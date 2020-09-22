
<?php
 include 'userheader.php';
 
 if(isset($_GET['page_id'])){
 	$page_id=$_GET['page_id'];
 	$sql="SELECT * FROM images WHERE page_id=".$page_id;
 	$result=mysqli_query($conn,$sql);
}
 ?>
 <div class=clearfix>
 	<?php 
 		include 'navigation.php';
 	 ?>
	<div class="content">
	 	<?php 
	 		while($row=mysqli_fetch_array($result)){
	 	 ?>
		
		 	<div class="imgpage">
				<a href=" <?php echo $sitepath ?>/admin/uploads/<?php echo $row['image']; ?>" rel="prettyPhoto[gallery]">
					<img src="<?php echo $sitepath ?>/admin/uploads/<?php echo $row['image']; ?>" height="200px" width="200px" />
				</a>
			</div>
		
		<?php  	} ?> 
	</div>
</div>


<?php
	include 'copyright.php' 
?>

	

<?php include 'userfooter.php' ?>