<script type="text/javascript">
	document.getElementById("login").style.display='none';
	document.getElementById("register").style.display='none';
	document.getElementById("logout").style.display='block';
</script>

<form name="form" onSubmit="return editcategory();">
	<label>Category Id:</label>
	<input  id="categoryid" name="categoryid" value="{{ categoryid }}"><br>

	<label>User Id :</label>
	<input  id="userid" name="userid" value="{{ userid }}"><br>

	<label> New Category Name :</label>
	<input type="text" name="categoryname" id="categoryname" value="{{ categoryname }}"><br><br>

	<button type="submit" id="submit">Submit</button>

	<button id="submit" class="gobck"> Go Back</button>

</form>