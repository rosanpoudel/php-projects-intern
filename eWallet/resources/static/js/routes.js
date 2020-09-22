Finch.route("login", loginpage);

Finch.route("register", registeruser);

Finch.route("forgotpassword", forgotpasswordtemplate);

Finch.route("dashboard",dashboard);

Finch.route("AddCategory",addCategory);

Finch.route("editcat" , function(bindings){
	Finch.observe( "id","name","user_id" , function(id,name,user_id){
		EditCategory(id,name,user_id);
	});
});

Finch.route("editcategorydata" , function(bindings){
	Finch.observe("id","feild_name","category_id" , function(id,feild_name,category_id){
		EditCatData(id,feild_name,category_id);
	});
});

Finch.route("addnewcategorydata", function(bindings) {
  Finch.observe("category_id", function(category_id){
  	newcategorydata(category_id);
  });
});

Finch.route("Data", function(bindings){
	Finch.observe(["id"], function(id){
		detailpage(id);
	});
});

Finch.listen();

