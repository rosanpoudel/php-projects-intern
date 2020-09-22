<script type="text/javascript">
	document.getElementById("login").style.display='none';
	document.getElementById("register").style.display='none';
	document.getElementById("logout").style.display='block';
</script>
<form name="form" onSubmit="return categorydataedit();">
	<label>categorydata ID:</label>
	<input  id="categorydataid" value="{{categorydataid}}"><br><br>

	<label>category ID:</label>
	<input  id="categoryid" value="{{category_id}}"><br><br>

	<label> Field Name :</label>
	<input type="text" id="categorydataname" value="{{categorydataname}}"><br><br>

	<button type="submit" id="submit">Submit</button>

	<a id="submit" class="gobck" onClick="return detail({{category_id}});" href="#">Go Back</a>


</form>