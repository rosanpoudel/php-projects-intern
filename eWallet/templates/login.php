<script type="text/javascript">
	document.getElementById("login").style.display='none';
	document.getElementById("logout").style.display='none';
	document.getElementById("register").style.marginLeft="120px";
	document.getElementById("register").style.display='block';
</script>


<form name="form" onSubmit="return submitLogin();">

	<label>E-mail :</label>
	<input type="email" name="email" id="email" required="required"><br><br>

	<label>password :</label>
	<input type="password" name="password" id="pwd" required="required"><br><br>

	<a class= "password" onClick="return forgotpassword();" href="#">Forgot Password</a><br><br>

	<button type="submit" id="submit">Login</button><br>

	<div id="error"></div>
</form>

