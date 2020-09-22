<script type="text/javascript">
	document.getElementById("login").style.display='none';
	document.getElementById("register").style.display='none';
	document.getElementById("logout").style.display='block';
</script>
<form name="form" onSubmit="return addnewdata();">
	<label>User Id:</label>
	<input  id="user" value="{{ user_id }}"><br>

	<label>category Name :</label>
	<input type="text" name="categoryname" id="categoryname"><br><br>

	<button type="submit" id="submit">Submit</button>

	<a id="submit" class="gobck" onClick="return todashboard();" href="#">Go Back</a>
	
		
</form>