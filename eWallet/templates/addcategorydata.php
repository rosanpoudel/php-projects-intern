<script type="text/javascript">
	document.getElementById("login").style.display='none';
	document.getElementById("register").style.display='none';
	document.getElementById("logout").style.display='block';
</script>

<form onSubmit="return postcategorydata();">
	<label>Category ID:</label>
	<input  name="categoryid" id="categoryid" value="{{ category_id }}" ><br><br>

	<label>Field Name:</label>
	<input type="text" name="categorydataname" id="categorydataname"><br><br>

	<button type="submit" id="submit">Submit</button>

	<a id="submit" class="gobck" onClick="return detail({{category_id}});" href="#">Go Back</a>
</form>

