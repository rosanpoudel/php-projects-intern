	<?php 	 	
		include '../admin/controller/databaseconnect.php';
		include '../admin/controller/siteconfiguration.php';
		global$conn;
		global $sitepath;
		$sqll="SELECT * FROM Configuration";
		$resultcheck=mysqli_query($conn,$sqll);
		$roww=mysqli_fetch_array($resultcheck);
		$logo=$roww['logo'];
		$sitename=$roww['siteName'];
		$siteurl=$roww['siteURL'];
		$sitepath=$roww['sitePath'];
		$footertext=$roww['footerText'];
	?>
	<div class=" nav clearfix">
		<div class="logo">
			<img src="<?php echo $sitepath ?>/admin/static/images/logo.png" />'
		</div>

		<div class="sitename "> <?php echo 'CMS'; ?></div>

		<a class="quote" href="newsletter-subscriber">Subscribe</a>
	
		<a class="quote" href="contact-us">Contact us</a>
	
		<a  class="quote" href="request-quote"> Get Quote</a>

		<a class="quote" href="<?php echo $sitepath ?>">Home</a>
	</div>