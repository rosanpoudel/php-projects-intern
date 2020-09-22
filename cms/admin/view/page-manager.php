	<?php 
		session_start();
		if($_SESSION["email"]==true){
		}else{
			header("Location:../index.php");
			exit();
		}

		include "../controller/databaseconnect.php";
		global $conn;


		$limit = 5;  
		if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
		$start_from = ($page-1) * $limit;

		$sql="SELECT * FROM pages  LIMIT $start_from, $limit";
		$result1=mysqli_query($conn,$sql);
		include("header.php"); 
	?>

	
	<title>page manager</title>

	<a class="addpage addimage" href="<?php echo $sitepath ?>/admin/view/add-page.php">Add Page</a>
	
	<!-- <a  class="addpage pg" href="<?php echo $sitepath ?>/admin/view/image-manager.php">Image Manager</a> -->


	<table class=" content page-table" align=center>
		  <tr>
		    <th>ID</th>
		    <th>Title</th>
		    <th>Content</th> 
		    <th>Description</th>
		    <th colspan="2">Actions</th>
		    <th>images</th>
		    <th>parent_id</th>
		    <th>slug</th>
		  </tr>
		<?php
		 while($row=mysqli_fetch_array($result1)){	
	  	?>
		  	<tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['title']; ?></td>
				<td><?php echo $row['content']; ?></td>
				<td><?php echo $row['description']; ?></td>
				<td>
				   <a class="action" href="<?php echo $sitepath ?>/admin/edit-page/<?php echo $row['id']; ?>">Edit</a>
				</td>
				<td>
				   <a class="action" href="#" onclick="deleteme(<?php echo $row['id'];?>)">Delete</a> 
				</td>
				<td>
					<a class="action" href="<?php echo $sitepath ?>/admin/view-image/<?php echo $row['id']; ?>">Images</a>
				</td>

				<td><?php echo $row['parent_id']; ?></td>
				<td><?php echo $row['slug']; ?></td>
			</tr>
		<?php } ?>
	</table>
	

	<?php 
		$sql = "SELECT COUNT(id) FROM pages";  
		$result1= mysqli_query($conn,$sql);  
		$row= mysqli_fetch_array($result1);  
		$total_records = $row[0];  
		$total_pages = ceil($total_records / $limit);  
		$pagLink = "<div class='pagination'>";  
		for ($i=1; $i<=$total_pages; $i++) {  
		             $pagLink .= "<a href='page-manager.php?page=".$i."'>".$i."</a>";  
		};  
		echo $pagLink . "</div>"; 
	?>

	<!-- javascript pop up for deleting page -->
	<script type="text/javascript">
		function deleteme(id){
			if(confirm("ARE YOU SURE YOU WANT TO DELETE THIS PAGE??")){
				window.location.href='../controller/delete-page.php?delete_id='+id+'';
				return true;
			}
		}
	</script>

<?php include ("footer.php") ?>
