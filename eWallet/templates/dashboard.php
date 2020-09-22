<script type="text/javascript">
	document.getElementById("login").style.display='none';
	document.getElementById("register").style.display='none';
	document.getElementById("logout").style.display='block';
	document.getElementById("logout").style.marginLeft="200px";
</script>
<div>
	<div class="new-data">
		<a class="crud add" id="addNew" onClick=" return addcatdata();" href="#">Add New Data</a>
	</div>

	<table id="table">

		<input style="display:none" id="user" value="{{ value.0.user_id }}">

		<tr>
			<th>id</th>
			<th>Category_Name</th>
			<th>user_id</th>
			<th colspan="2">Actions</th>
		</tr>

		{{#each value}}
			<tr>
				<td >{{id}}</td>
				<td ><a id="categorydata" onClick="return detail({{ id }});" href="#">{{name}}</a></td>
				<td>{{user_id}}</td>
				<td>
					<a class="crud" id="edit" onClick="return editcat( {{id}}, '{{name}}' ,{{user_id}} );" href="#"> Edit </a>
				</td>

				<td>
					<a class="crud delete"  id="delete" href="#">Delete</a>
				</td>
				
			</tr>
		{{/each}}
	</table>
</div>

<div id="deletemsg"></div>




