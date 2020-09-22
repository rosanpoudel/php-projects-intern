		<?php 
			include '../admin/controller/databaseconnect.php';
			global$conn;

			$sqll="SELECT * FROM Configuration";
			$resultcheck=mysqli_query($conn,$sqll);
			$roww=mysqli_fetch_array($resultcheck);
			$logo=$roww['logo'];
			$sitename=$roww['siteName'];
			$siteurl=$roww['siteURL'];
			$sitepath=$roww['sitePath'];
			$footertext=$roww['footerText'];

			$sql="SELECT * FROM pages";
			$result=mysqli_query($conn,$sql);

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
		
	
	<?php include 'nav.php'; ?>
	
		<div class="clearfix">
			<?php include 'navigation.php'; ?>
			<div class="content allpage clearfix">
				<table>
					<tr>
						<th>Id</th>
						<th>Title</th>
						<th>Content</th>
						<th>Description</th>
						<th>images</th>
					</tr>

					<?php
			 			while($row=mysqli_fetch_array($result)){
						$page_id=$row['id'];
		  			?>

					<tr>
						<td> <?php echo $row['id']; ?></td>
						<td><?php echo $row['title']; ?></td>
						<td><?php echo $row['content']; ?></td>
						<td><?php echo $row['description']; ?></td>

						<td><a class="images" href="<?php echo $sitepath ?>/images/<?php echo $page_id;?>">images</a></td>
					</tr>

					<?php } ?>
				</table>
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


