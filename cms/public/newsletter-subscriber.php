<?php 
	include 'userheader.php';
	global $conn;	
 ?>
<div class="clearfix">
	<?php 
		include 'navigation.php';
	?>
	<div class="content contact">
	 		<form class="contact" action="<?php echo $sitepath ?>/subscribers" method="POST">
	 			<label>E-mail :</label><br>
	 			<input type="email" name="email" required="required"><br><br>
	 			<input type="submit" name="submit">
	 		</form>
	</div>
</div>

<?php 
 	include 'copyright.php';
 	include 'userfooter.php'; 
?>
