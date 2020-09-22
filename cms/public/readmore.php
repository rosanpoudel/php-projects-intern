<?php 
	include 'userheader.php';

	if (isset($_GET['post_id'])) {
		$posts="SELECT * FROM posts WHERE id=" .$_GET['post_id'];
 		$post_query=mysqli_query($conn,$posts);	
	}
	
?>
<div class="clearfix">
	<?php 
	include 'navigation.php';
	?>

	<div class="content">
	<div>
		<?php while($post_result=mysqli_fetch_array($post_query)){ ?>
	  	<div class="recent-post single">
		  	<div><STRONG>TITLE :</STRONG> <?php echo $post_result['title']; ?></div><br>
		  	<div><STRONG>CONTENT :</STRONG>  <?php echo $post_result['content']; ?></div><br>
		  	<div><STRONG>SEO TITLE :</STRONG>  <?php echo $post_result['seo_title']; ?></div><br>
		  	<div><STRONG>META TITLE :</STRONG>  <?php echo $post_result['meta_title']; ?></div><br>
		  	<div><STRONG>META KEYWORD :</STRONG>  <?php echo $post_result['meta_keyword']; ?></div><br>

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
		include 'copyright.php';
  		include 'userfooter.php'; 
	?>
	
