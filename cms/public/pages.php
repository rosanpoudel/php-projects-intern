<?php 
	include '../admin/controller/siteconfiguration.php';
	include '../admin/controller/databaseconnect.php';
	global$conn;
	global $sitepath;

	$parent_value=$_GET['page_value'];

	$sql="SELECT * FROM pages where slug='$parent_value'";
	$result=mysqli_query($conn,$sql);

	$resolve = mysqli_fetch_assoc($result);

	$query="SELECT * FROM images WHERE page_id=".$resolve['id'];
	$query_result=mysqli_query($conn,$query); 
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
		<div>
			<?php include 'navigation.php'; ?>

			<div class="content clearfix">
				<table>
					<tr>
						<th>Id</th>
						<th>Title</th>
						<th>Content</th>
						<th>Description</th>
					</tr>
					<tr>
						<td> <?php echo $resolve['id']; ?></td>
						<td><?php echo $resolve['title']; ?></td>
						<td><?php echo $resolve['content']; ?></td>
						<td><?php echo $resolve['description']; ?></td>
					</tr>
				</table>

				<?php while($row1=mysqli_fetch_array($query_result)){ ?>
					<span>
						<a href="<?php echo $sitepath ?>/admin/uploads/<?php echo $row1['image']; ?>" rel="prettyPhoto[gallery]">
						<img src="<?php echo $sitepath ?>/admin/uploads/<?php echo $row1['image']; ?>" height="200px" width="200px">
						</a>
					</span>
				<?php } ?>
			</div>
		</div>
	</div>
	

	<?php
		include 'copyright.php' 
	?>


	<script src="<?php echo $sitepath ?>/admin/static/js/jquery.min.js"></script>
	<script src="<?php echo $sitepath ?>/admin/static/js/popper.min.js"></script>
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


