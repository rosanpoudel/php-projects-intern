<script type="text/javascript">
	document.getElementById("login").style.display='none';
	document.getElementById("logout").style.display='block';
	document.getElementById("register").style.display='none';
</script>

<div>
	<div class="new-data">

		<a class="todash" onClick="return todashboard();" href="#">Dashboard</a>
		<a class="crud add" id="addcategorydata" onClick="return addnewcategorydata({{ data.0.category_id }});" href="#">Add New Field</a>
		
	</div>
	
	<table>
		<tr>
			<th>Id</th>
			<th>Field-name</th>
			<th>Category-id</th>
			<th colspan="2">Actions</th>
		</tr>

		{{#each data}}
		<tr>
			<td>{{id}}</td>
			<td>{{field_name}}</td>
			<td>{{category_id}}</td>
			<td><a class="crud" id="editcategorydata" onClick="return editcatdata({{id}} , '{{field_name}}' , {{category_id}});" href="#">Edit</a></td>
			<td><a class="crud delete" id="deletecategorydata" href="#">Delete</a></td>
		</tr>
		{{/each}}
	</table>
</div>