<?php 
	include '../admin/controller/siteconfiguration.php';
	 global $sitepath;
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>CMS</title>
	<link rel="stylesheet" type="text/css" href="<?php echo $sitepath ?>/admin/static/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $sitepath ?>/admin/static/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $sitepath ?>/admin/static/css/animate.css">
	<link rel="stylesheet" href="<?php echo $sitepath ?>/admin/static/owl/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo $sitepath ?>/admin/static/owl/owl.theme.default.min.css">
	<script src="<?php echo $sitepath ?>/admin/static/owl/jquery.min.js"></script>
	<script src="<?php echo $sitepath ?>/admin/static/owl/owl.carousel.min.js"></script>
</head>
<body>
	<?php 
		include 'nav.php';

	 	$posts="SELECT * FROM posts";
	 	$post_query=mysqli_query($conn,$posts);
	?>
	<div class="clearfix">
		<?php 
	 		include 'navigation.php';
		?>
		<div class="content">
			<div>
				<!-- <h1>ALL POSTS</h1> -->
				<?php while($post_result=mysqli_fetch_array($post_query)){ ?>
			  	<div class="recent-post single">
				  	<div><STRONG>TITLE :</STRONG> <?php echo $post_result['title']; ?></div>
				  	<div><STRONG>CONTENT :</STRONG>  <?php echo $post_result['content']; ?></div>
				  	<div><STRONG>SEO TITLE :</STRONG>  <?php echo $post_result['seo_title']; ?></div>
				  	<div><STRONG>META TITLE :</STRONG>  <?php echo $post_result['meta_title']; ?></div>
				  	<div><STRONG>META KEYWORD :</STRONG>  <?php echo $post_result['meta_keyword']; ?></div>


				  	<?php 
						$image=explode(' ', $post_result['image']);
		   				foreach($image as $out) {
					 ?>
			  			<img src="<?php echo $sitepath ?>/admin/uploads/<?php echo $out; ?>">
			  		<?php } ?>
			  	</div>
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
</body>
</html>

