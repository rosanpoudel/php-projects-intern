	<?php 
		session_start();
		if($_SESSION["email"]==true){
		}else{
			header("../index.php");
			exit();
		}

		include "../controller/databaseconnect.php";
		include ("header.php");
		global $conn;
		global $sitepath;

		$limit = 4;  
		if (isset($_GET["page"])){
	 		$page  = $_GET["page"];
		}else{ 
			$page=1;
		}; 
		$start_from = ($page-1) * $limit; 
		$slide_query="SELECT * FROM slides LIMIT $start_from, $limit";
		$slide_result=mysqli_query($conn,$slide_query);
	?>

	<title>slider  manager</title>
	
	<div class="content">
		<table>
			<a class="action" href="<?php echo $sitepath; ?>/admin/view/add-slider.php">Add New Slider</a>
			<tr>
			    <th>ID</th>
			    <th>Title</th> 
			    <th>Description</th>
			    <th>images</th>
			    <th colspan="2">Actions</th>
		    </tr>
		    <?php while($data=mysqli_fetch_array($slide_result)){ ?>
		    </tr>
		    	<td><?php echo $data['id']; ?></td>
		    	<td> <?php echo $data['title']; ?> </td>
		    	<td><?php echo $data['description']; ?></td>

				<td>
					<?php 
						$image=explode(' ', $data['image']);
		   				foreach($image as $out) {
					?>
						<img src="<?php echo $sitepath ?>/admin/uploads/<?php echo $out; ?>" height='50px' width='50px'>
					<?php } ?>
				</td>

		    	<td>
				   <a class="action" href=" <?php echo $sitepath ?>/admin/edit-slider/<?php echo $data['id']; ?>">Edit</a>
		    	</td>
		    	<td>
				   <a class="action" href="#" onclick="deleteme(<?php echo $data['id']; ?>)">Delete</a>
		    	</td>
		    </tr>
		    <?php } ?>
		</table>
	</div>

	<?php 
		$posts = "SELECT COUNT(id) FROM slides";  
		$posts_result = mysqli_query($conn,$posts);  
		$row= mysqli_fetch_array($posts_result);  
		$total_records = $row[0];  
		$total_pages = ceil($total_records / $limit);  
		$pagLink = "<div class='pagination post'>";  
		for ($i=1; $i<=$total_pages; $i++) {  
		             $pagLink .= "<a href='slider-manager.php?page=".$i."'>".$i."</a>";  
		};  
		echo $pagLink . "</div>"; 
	?>



	<script type="text/javascript">
		function deleteme(id){
			if(confirm("ARE YOU SURE YOU WANT TO DELETE THIS SLIDE??")){
				window.location.href='../controller/delete-slider.php?delete_id='+id+'';
				return true;
			}
		}
	</script>


<?php include("footer.php") ?>
