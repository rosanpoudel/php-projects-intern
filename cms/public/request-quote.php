<?php 
	include 'userheader.php';
	include 'navigation.php';



	$country_query="SELECT * FROM tbl_country";
	$query_result=mysqli_query($conn,$country_query);
	
 ?>


	<form class="form quote_form" action="<?php echo $sitepath ?>/public/quote_form.php" method="POST">
		
		<label>First Name:</label><br>
		<input type="text" name="firstname" placeholder="First Name"><br><br>

		<label>Last Name:</label><br>
		<input type="text" name="lastname" placeholder="Last Name"><br><br>

		<label>Phone Number:</label><br>
		<input type="number" name="phonenumber" placeholder="Phone Number"><br><br>

		<label>E-mail:</label><br>
		<input type="email" name="email" placeholder="E-mail"><br><br>

		<label>Permanent Address:</label><br>
		<input type="text" name="address" placeholder="Permanent Address"><br><br>

		<label>Temporary Address:</label><br>
		<input type="text" name="address1" placeholder="Temporary Address"><br><br>

		<label>Country  :</label>

		<select name="country">
			<option></option>
			<?php 
			while($country=mysqli_fetch_assoc($query_result)){
		$country_name=$country['name'];
		?>

			<option><?php echo $country_name; ?></option>
			<?php } ?>
		</select><br><br>


		<label>State/Province  :</label>
		<select name="state">
			<option></option>
			<option></option>
		</select><br><br>

		<label>City  :</label>
		<input type="text" name="city" placeholder="City"><br><br>


		<label>Postal code :</label>
		<input type="text" name="code" placeholder="Postal-code"><br><br>

		<label>Date  :</label><br>
		<input type="date" name="date"><br><br>

		<label>Contact Me via  :</label><br>
		<input type="checkbox" name="contact_me" value="email"> <strong>  Email</strong><br>
		<input type="checkbox" name="contact_me" value="phone"> <strong>  Phone</strong><br>
		<input type="checkbox" name="contact_me" value="post">  <strong>  Post</strong><br><br>

		<label>Gender  :</label><br>
		<input type="radio" name="gender" value="male"> <strong>Male</strong><br>
		<input type="radio" name="gender" value="female"> <strong>Female</strong><br><br>

		<label>Services Intrested  :</label><br>
		<input type="checkbox" name="services" value="music"> <strong> Music</strong><br>
		<input type="checkbox" name="services" value="sports"> <strong> Sports</strong><br>
		<input type="checkbox" name="services" value="literature"> <strong> Literature</strong><br>
		<input type="checkbox" name="services" value="direction"> <strong> Direction</strong><br>
		<input type="checkbox" name="services" value="animation"> <strong> Animation</strong><br>
		<input type="checkbox" name="services" value="programming"> <strong> Programming</strong><br><br>

		<label>Other Notes  :</label><br>
		<textarea name="notes" cols="30" rows="7"></textarea><br><br>


		<p class="robotic" id="pot">
	    <label>If you're human leave this blank:</label>
	    <input name="robotest" type="text" id="robotest" class="robotest" />
	</p>


		<input type="submit" name="submit">

	</form>

 <?php include 'userfooter.php'; ?>