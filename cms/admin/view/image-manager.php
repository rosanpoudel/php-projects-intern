	<?php 
		session_start();
		if($_SESSION["email"]==true){
		}else{
			header("Location:../index.php");
			exit();
		}
	?>

	<?php 
		include ("header.php");
 	?>
	<title>image manager</title>

	


	<a class="addpage" href="<?php echo $sitepath ?>/admin/view/add-image.php">Add New Image</a>

	<table class="page-table">
		<!-- <caption>Image Table</caption> -->
		<tr>
			<th>id</th>
			<th>title</th>
			<th>description</th>
			<th>image</th>
			<th>page_id</th>
			<th>Action</th>
		</tr>

		<?php
			include "../controller/databaseconnect.php";
			global $conn;
			$limit = 4;  
			if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
			$start_from = ($page-1) * $limit;

			$sql="SELECT * FROM images LIMIT $start_from, $limit";
			$result=mysqli_query($conn,$sql);
		  	while($row=mysqli_fetch_array($result)){
	  	?>
	  	<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['title']; ?></td>
			<td><?php echo $row['description']; ?></td>
			<td><img src="<?php echo $sitepath ?>/admin/uploads/<?php echo $row['image'];?>" height='50px' width='50px'></td>
			<td><?php echo $row['page_id'] ?></td>

			<td>
			   <a class="action" href="#" onclick="deleteimage(<?php echo $row['id'];?>)">Delete</a> 
			</td>
		</tr>

		<?php } ?>

	</table>

	<?php 
		$sql = "SELECT COUNT(id) FROM images";  
		$result= mysqli_query($conn,$sql);  
		$row= mysqli_fetch_array($result);  
		$total_records = $row[0];  
		$total_pages = ceil($total_records / $limit);  
		$pagLink = "<div class='pagination'>";  
		for ($i=1; $i<=$total_pages; $i++) {  
		             $pagLink .= "<a href='image-manager.php?page=".$i."'>".$i."</a>";  
		};  
		echo $pagLink . "</div>"; 
	?>



	<script type="text/javascript">
		function deleteimage(id){
			if(confirm("ARE YOU SURE YOU WANT TO DELETE THIS  IMAGE??")){
				window.location.href='../controller/delete-image.php?delete_id='+id+'';
				return true;
			}
		}
	</script>
<?php include("footer.php") ?>
