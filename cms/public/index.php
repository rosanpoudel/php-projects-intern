
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
	<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous"> -->

	<link rel="stylesheet" href="<?php echo $sitepath ?>/admin/static/owl/owl.carousel.min.css">
 
<!-- Default Theme -->
	<link rel="stylesheet" href="<?php echo $sitepath ?>/admin/static/owl/owl.theme.default.min.css">
 
<!--  jQuery 1.7+  -->
	<script src="<?php echo $sitepath ?>/admin/static/owl/jquery.min.js"></script>
 
<!-- Include js plugin -->
	<script src="<?php echo $sitepath ?>/admin/static/owl/owl.carousel.min.js"></script>

</head>
<body>
	

	<?php 
		include 'nav.php';

	 	$posts="SELECT * FROM posts ORDER BY id DESC LIMIT 2";
	 	$post_query=mysqli_query($conn,$posts);
	?>

<div class="clearfix">
	<?php  	include 'navigation.php'; ?> 

	<div class="content home-page">
		<div id="owl-example" class="owl-carousel">
		 	<?php
			 	$sqli_query="SELECT * FROM slides where id=52";
				$result_query=mysqli_query($conn,$sqli_query);

			 	while($img=mysqli_fetch_array($result_query)){
		 		$image = $img['image'];
		 		$title= $img['title']; 
		 		$description= $img['description'];
	  		?>


		  		<?php 
		  			$image=explode(' ', $img['image']);
						foreach($image as $out) {
		  		 ?>
			  	<div>
			  		<a href="<?php echo $sitepath ?>/admin/uploads/<?php echo $out; ?>" rel="prettyPhoto[gallery]"> 
							<img src="<?php echo $sitepath ?>/admin/uploads/<?php echo $out; ?>"/>
			  		</a>
			  	</div>
			  	<?php } ?>

	  		<?php } ?>

		</div>
	</div>

	<a class="action all-post" href="view-all-post">view all posts</a>

	<section>
		<div>
			<?php 
				while($post_result=mysqli_fetch_array($post_query)){ 
			?>
			  	<div class="recent-posts">
				  	<div>
				  		<STRONG>TITLE :</STRONG> <?php echo $post_result['title']; ?>
				  	</div>

					<div id="owl-example" class="owl-carousel recent-post-carousel">

					  	<?php 
							$image=explode(' ', $post_result['image']);
			   				foreach($image as $out) {
						 ?>
				  		<img src="<?php echo $sitepath ?>/admin/uploads/<?php echo $out; ?>">
				  		<?php } ?>

				  	</div>

				  	<div class="post-content">
				  		<STRONG>CONTENT :</STRONG>  <?php echo $post_result['content']; ?>
				  	</div>

				  	<div>
			  			<a class="action" href="<?php echo $sitepath ?>/readmore/<?php echo $post_result['id']; ?>">Read more</a> 
			  		</div>
			  	</div>
		  	<?php } ?>
			
		</div>
	</section>
</div>

<?php
	include 'copyright.php' ;
?>


<div class="footer-img">
	<img src="<?php echo $sitepath ?>/admin/uploads/10.jpg " height="300px" width="100%">
</div>



<script type='text/javascript'>
	jQuery(document).ready(function($) {
		 $('.owl-carousel').owlCarousel({
			nav: true,
			navText:["",""],
			items: 1,
			loop: true,
			center: true,
			lazyLoad:true,
			autoplay:true,
			autoplayTimeout:2500, 
			slideSpeed: 100,
    		// paginationSpeed: 500,
			dots: false
		});
	})
</script>
	
	


	<!-- jQuery library -->
	<script src="<?php echo $sitepath ?>/admin/static/js/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="<?php echo $sitepath ?>/admin/static/js/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="<?php echo $sitepath ?>/admin/static/js/bootstrap.min.js"></script>
</body>
</html>

