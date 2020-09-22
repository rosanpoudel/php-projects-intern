		<?php 
			include '../admin/controller/databaseconnect.php';
			include '../admin/controller/siteconfiguration.php';
			global$conn;
			global $sitepath;

			$sql="SELECT * FROM pages";
			$result=mysqli_query($conn,$sql);

			$sqli_query="SELECT * FROM images";
			$result_query=mysqli_query($conn,$sqli_query);
		?>

<!DOCTYPE html>
	<html>
	<head>
		<title>CMS</title>
		<link rel="stylesheet" type="text/css" href="<?php echo $sitepath ?>/admin/static/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $sitepath ?>/admin/static/css/style.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $sitepath ?>/admin/static/prettyphoto/css/prettyPhoto.css">
	</head>
	<body>
	
	

	<?php 
		include 'nav.php'; 
	 ?>
	<div class="clearfix">
		<?php 
			include 'navigation.php';
		?>
		<div class="content">
			<?php
			    while($img=mysqli_fetch_array($result_query)){
		 		$image = $img['image']; 
			  	?>
		  		<a href="<?php echo $sitepath ?>/admin/uploads/<?php echo $image; ?>" rel="prettyPhoto[gallery]">
		  			<img src="<?php echo $sitepath ?>/admin/uploads/<?php echo $image; ?>" height="200px" width="200px"/>
		  		</a>
		  	<?php } ?>
		</div>
	</div>
	

		<?php
			include 'copyright.php' 
		?>
	


	<script src="<?php echo $sitepath ?>/admin/static/js/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="<?php echo $sitepath ?>/admin/static/js/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="<?php echo $sitepath ?>/admin/static/js/bootstrap.min.js"></script>

	<script src="<?php echo $sitepath ?>/admin/static/prettyphoto/js/jquery-1.6.1.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="<?php echo $sitepath ?>/admin/static/prettyphoto/js/jquery.prettyPhoto.js" type="text/javascript"></script>


	<script type="text/javascript">
	  	$(document).ready(function(){
	    	$("a[rel^='prettyPhoto']").prettyPhoto({
	    		default_width: 500,
				default_height: 344,

	    	});
	  });
	</script>
	
</body>
</html>


