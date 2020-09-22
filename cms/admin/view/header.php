

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="http://localhost/cms/admin/static/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/cms/admin/static/css/style.css">
	<!-- Important Owl stylesheet -->
	<link rel="stylesheet" href="http://localhost/cms/admin/static/owl/owl.carousel.min.css"> 

	<link rel="stylesheet" href="http://localhost/cms/admin/static/owl/owl.theme.default.min.css">
 
	<script src="http://localhost/cms/admin/static/owl/jquery.min.js"></script>

	<script src="http://localhost/cms/admin/static/owl/owl.carousel.min.js"></script>

</head>
<body>


	<?php 
		include '../controller/databaseconnect.php';
 		include '../controller/siteconfiguration.php';
 		global $sitepath;
 	?>
 	
	<div class="nav clearfix">
		<div class="logo">
		 <img src= "<?php echo $sitepath ?>/admin/static/images/logo.png" />	
		</div>

		<div class="sitename"> <?php echo $sitename; ?></div>

		<div class="logout">  
			<a  class="btn-success" href="<?php echo $sitepath ?>/admin/view/logout.php">Log Out</a>
		</div>

		<div class="logout">  
			<a  class="btn-success" href="<?php echo $sitepath ?>/admin/view/dashboard.php">Dashboard</a>
		</div>

	</div>

	<div class="dashboard dash-admin">
			<a href="<?php echo $sitepath ?>/admin/view/page-manager.php">Page Manager</a>
			<a href="<?php echo $sitepath ?>/admin/view/image-manager.php">Image manager</a>
			<a href="<?php echo $sitepath ?>/admin/view/admin-manager.php">Admin Manager</a>
			<a href="<?php echo $sitepath ?>/admin/view/slider-manager.php">Slider Manager</a>
			<a href="<?php echo $sitepath ?>/admin/view/posts-manager.php">Posts Manager</a>
			<a href="<?php echo $sitepath ?>/admin/view/subscribers.php">Subscribers</a>
	</div>
