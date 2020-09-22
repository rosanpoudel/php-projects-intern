<script type="text/javascript">
	document.getElementById("login").style.display='block';
	document.getElementById("login").style.marginLeft="200px";
	document.getElementById("register").style.display='none';
</script>

<form name="form" onSubmit="return registerUser();">
	<label>UserName :</label>
	<input type="text" name="username" id="username" required="required"><br><br>

	<label>E-mail :</label>
	<input type="email" name="email" id="email" required="required"><br><br>

	<label>password :</label>
	<input type="password" name="password" id="pwd" required="required"><br><br>

	<button type="submit" id="submit">Register</button>

</form>