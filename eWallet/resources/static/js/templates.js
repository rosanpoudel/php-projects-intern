// for login page
function loginpage(){
  var check = getCookie("logintoken");
  if(check){
    Finch.navigate("dashboard");
    return false;
  }
	$.ajax({
		type:'GET',
		url:'http://localhost/eWallet/templates/login.php',
		success:function(data){
			var template = Handlebars.compile(data);
			var html = template(template);
			$("#content").html(html);
		}
	});
	return false;
}

// for loading register page
function registeruser(){
	$.ajax({
		type:'GET',
		url:'http://localhost/eWallet/templates/register.php',
		success:function(data){
			var template = Handlebars.compile(data);
			var html = template(template);
			$("#content").html(html);
		}
	});
}

// for add new  main category
function addCategory(){
	var user = $('#user').val();
	$.ajax({
		type: 'GET',
		url:"http://localhost/eWallet/templates/addnewdata.php",
		success: function(data){
			var template = Handlebars.compile(data);
			var html = template({user_id: user});
			$("#content").html(html);
		}
	});
}



// for getting the categorydata value after the category is clicked
function detailpage(id){
  var category_id = id;
  $.ajax({
    type:'GET',
    url:'http://localhost/eWallet/api/getcategorydata/'+id,
    headers:{ 'authorization': getCookie('logintoken') },
    success:function(response){
      response = JSON.parse(response);
      categorydata = response.data;
      if(response.status=200){
        $.ajax({
          type:'GET',
          url:'http://localhost/eWallet/templates/category-data.php',
          headers: { 'authorization' : getCookie('logintoken') },
          success:function(data){
            var template = Handlebars.compile(data);
            var html = template({data:categorydata});
            $("#content").html(html);
          }
        });
      }
    }
  });
}

// for adding new categorydata form
function newcategorydata(category_id){
	var category_id = category_id;
	$.ajax({
		type:'GET',
		url:'http://localhost/eWallet/templates/addcategorydata.php',
		success:function(data){
			var template = Handlebars.compile(data);
			var html = template({category_id:category_id});
			$("#content").html(html);
		}
	});
}


// for editing main category
function EditCategory(id,name,user_id){
  var category_id = id;
  var categoryname = name;
  var userid = user_id;
  $.ajax({
    type:'GET',
    url:"http://localhost/eWallet/templates/edit-data.php",
    headers: { 'authorization' : getCookie('logintoken') },

    success: function(data){
      var template = Handlebars.compile(data);
      var html= template({categoryid:category_id,categoryname:categoryname,userid:userid});
      $("#content").html(html);
    }
  });
  return false;
}



// for editing categorydata
function EditCatData(id,feild_name,category_id){
    var categorydata_id = id;
    var categorydataname =feild_name;
    var category_id = category_id;
    $.ajax({
    	type:'GET',
    	url:"http://localhost/eWallet/templates/edit-categorydata.php",
    	success: function(data){
    		var template = Handlebars.compile(data);
    		var html= template({categorydataid:categorydata_id,categorydataname:categorydataname,category_id:category_id});
    		$("#content").html(html);
    	}
    });
}


function forgotpasswordtemplate(){
  $.ajax({
    type:'GET',
    url:'http://localhost/eWallet/templates/forgotpassword.php',
    success:function(data){
      var template = Handlebars.compile(data);
      var html = template(template);
      $("#content").html(html);
    }
  });
  return false;
}












        




