// for login
function login(){
      Finch.navigate("login");
      return false;
}

// logging out user by clearing cookies
function logout(){
  document.cookie = 'logintoken' + '=;expires=Thu, 01 Jan 1970 00:00:01 GMT;';
  Finch.navigate("login");
  return false;
}
function todashboard(){
  Finch.navigate("dashboard");
  return false;
}

// for forgot password
function forgotpassword(){
  Finch.navigate("forgotpassword");
  return false;
}

// for register
function register(){
  Finch.navigate("register");
  return false;
}

// editing category
function editcat(id,name,user_id){
  Finch.navigate("editcat", {id,name,user_id});
  return false;
}

// editing categorydata
function editcatdata(id,feild_name,category_id){
  Finch.navigate("editcategorydata", {id,feild_name,category_id});
  return false;
}

// adding new category
function addcatdata(){
  Finch.navigate("AddCategory");
  return false;
}


// detail page
function detail(id){
  var category_id=id;
  Finch.navigate("Data", { id:category_id }); 
  return false;
}

// for add new category data
function addnewcategorydata(category_id){
  var category_id = category_id;
  Finch.navigate("addnewcategorydata" , {category_id : category_id});
  return false;
}

// getting cookie function
function getCookie(name){
  var nameEQ = name + "=";
  var ca = document.cookie.split(';');
  for(var i=0;i < ca.length;i++){
    var c = ca[i];
    while (c.charAt(0)==' ') c = c.substring(1,c.length);
    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
  }
}

// For login
function submitLogin(){
  var value = {};
  value['email'] = document.getElementById("email").value;
  value['password'] = document.getElementById("pwd").value;

  $.ajax({
    type: 'POST',
    url: 'http://localhost/eWallet/api/login',
    data: JSON.stringify(value),
    success: function(response){
      response = JSON.parse(response);
      token = response.data.token;
      document.cookie = "logintoken=" + token; //creating cookie loginToken

      if(response.status != 200 ){
        document.getElementById("error").innerHTML="Incorrect Id or Password";
      }else{
        Finch.navigate("dashboard");
        return false;
      }
    },
  });
  return false;
}

// for dashboard
function dashboard(){
  $.ajax({
    type: 'GET',
    url: 'http://localhost/eWallet/api/getdashboarddata', 
    headers: { 'authorization': getCookie('logintoken') },
    success: function(response){
      response = JSON.parse(response);
      userdetails = response.data;
      $.ajax({
        type: 'GET',
        url: 'http://localhost/eWallet/templates/dashboard.php', //getting dashboard templates
        success: function(templatedata){
          var template = Handlebars.compile(templatedata);
          var html= template({value: userdetails});
          $("#content").html(html);
        }
      }); 
    }
  });
  return false;
}

// for registering user
function registerUser(){
  var data = {};
  data['username'] = document.getElementById("username").value;
  data['email'] = document.getElementById("email").value;
  data['password'] = document.getElementById("pwd").value;

  $.ajax({
    type: 'POST',
    url: 'http://localhost/eWallet/api/register',
    data: JSON.stringify(data),
    success: function(response) {
        response = JSON.parse(response);
        if(response.status == 200){
          alert(" User Registered successfully ");
          Finch.navigate("login");  
        }else{
          alert('failed');
        }
    },
  });
  return false;
}



// for editing 
function editcategory(){
  var data = {};
  data['categoryid'] = document.getElementById("categoryid").value;
  data['categoryname'] = document.getElementById("categoryname").value;
  data['userid'] = document.getElementById("userid").value;
  var user_id=data['userid'];
  $.ajax({
    type: 'PUT',
    url: 'http://localhost/eWallet/api/editcategory',
    headers: { 'authorization': getCookie('logintoken') },
    data: JSON.stringify(data),
    success:function(response){
      response = JSON.parse(response);
      location.reload(true);
      Finch.navigate("dashboard");
    }
  });
  return false;
}


// for deleting category
$(document).on('click', '#delete',function(e){
  e.preventDefault();
  if(confirm("ARE YOU SURE YOU WANT TO DELETE THIS DATA??")){
    var currentRow = $(this).closest("tr");
    var category_id = currentRow.find("td:eq(0)").text();
    var user_id = currentRow.find("td:eq(2)").text();
    $.ajax({
      type:'DELETE',
      url:'http://localhost/eWallet/api/delete/'+category_id,
      headers: { 'authorization': getCookie('logintoken') },
      success:function(response){
        response = JSON.parse(response);
        if(response.status=200){
          location.reload();
          Finch.navigate("dashboard");
        }else{
          alert("Error");
        }
      }
    });
  }
});


// for adding new data
function addnewdata(){
  var data = {};
  data['categoryname'] = document.getElementById("categoryname").value;
  data['user'] = $('#user').val();
  var user_id = $('#user').val();
  $.ajax({
    type: 'POST',
    url: 'http://localhost/eWallet/api/addnewdata',
    headers: { 'authorization': getCookie('logintoken') },

    data: JSON.stringify(data),
    success: function(response){
      response = JSON.parse(response);
      location.reload(true);
      Finch.navigate("dashboard",{ id: user_id });
    }
  });
  return false;
}

// for adding new categorydata
function postcategorydata(){
  var data= {};
  data['categorydataname'] = document.getElementById("categorydataname").value;
  data['categoryid'] = document.getElementById("categoryid").value;
  var categoryid =  data['categoryid'];
  $.ajax({
    type:'POST',
    url:'http://localhost/eWallet/api/addcategorydata',
    headers: { 'authorization': getCookie('logintoken') },

    data: JSON.stringify(data),
    success:function(response){
      response = JSON.parse(response);
      if(response.status = 200){
        Finch.navigate("Data" , { id: categoryid});
      }
    }
  });
  return false;
}


// for deleting categorydata data
$(document).on('click' , '#deletecategorydata' , function(e){
  e.preventDefault();
  if(confirm("ARE YOU SURE YOU WANT TO DELETE THIS DATA?")){
    var currentRow = $(this).closest("tr");
    var categorydata_id = currentRow.find("td:eq(0)").text();
    var category_id = currentRow.find("td:eq(2)").text();

    $.ajax({
      type:'DELETE',
      url:'http://localhost/eWallet/api/deletecategorydata/'+categorydata_id,
      headers: { 'authorization': getCookie('logintoken') },

      success : function(response){
        response = JSON.parse(response);
        if(response.status = 200){
          location.reload(true);
          Finch.navigate("Data", {id: category_id});
        }
      }
    });
  }
});


// for editing categorydata
function categorydataedit(){
  var data = {};
  data['categorydataid'] = document.getElementById("categorydataid").value;
  data['categorydataname'] = document.getElementById("categorydataname").value;
  data['categoryid'] = document.getElementById("categoryid").value;
  var category_id = data['categoryid'];

  $.ajax({
    type:'PUT',
    url:'http://localhost/eWallet/api/editcategorydata',
    headers: { 'authorization': getCookie('logintoken') },
    data:JSON.stringify(data),
    success:function(response){
      response = JSON.parse(response);
      if(response.status = 200){
        location.reload(true);
        Finch.navigate("Data",{ id: category_id });
      }
    }
  });
}

// forgot password
function fpassword(){
  var data = {};
  data['email'] = document.getElementById("email").value;
  $.ajax({
    type:'POST',
    url:'http://localhost/eWallet/api/forgotpassword',
    data:JSON.stringify(data),
    success:function(response){
      if(response = 'No such email found.'){
        alert('Error : No Such Email Found in Database');
        Finch.navigate("login");
        return false;
      }else{
        alert(' Email successfully sent With new password');
        Finch.navigate("login");
      }
    }
  });
  return false;
}
