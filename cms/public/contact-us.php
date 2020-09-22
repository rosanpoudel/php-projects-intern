<?php 
	include 'userheader.php';
 ?>
<div class="clearfix">
	<?php  include 'navigation.php'; ?>	

	<div class="content contact" >
	 	<form action="<?php echo $sitepath ?>/public/contactus-form.php"  method="POST">
	 		<label>Name :</label><br>
	 		<input type="text" name="name"><br><br>

	 		<label>Email :</label><br>
	 		<input type="email" name="email"><br><br>

	 		<label>Phone :</label><br>
	 		<input type="number" name="number"><br><br>

	 		<label>Message :</label><br>
	 		<textarea name="message"></textarea><br><br>

	 		<input type="submit" name="submit">
	 	</form>
	</div>
</div>

<?php
	include 'copyright.php'; 
?>
	

<?php include 'userfooter.php'; ?>

