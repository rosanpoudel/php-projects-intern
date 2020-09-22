<?php 
	session_start();
	if($_SESSION["email"]==true){
	}else{
		header("Location:../index.php");
		exit();
	}

	include "../controller/databaseconnect.php";
	global $conn;
	global $sitepath;
	include("header.php"); 

	$limit = 4;  
	if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
	$start_from = ($page-1) * $limit;  

	$posts="SELECT * FROM posts LIMIT $start_from, $limit";
	$posts_result=mysqli_query($conn,$posts);
	

?>

<title>posts manager</title>

<div class="content">
	<table>
		<a class="action" href="<?php echo $sitepath; ?>/admin/view/add-post.php">Add New post</a>
		<tr>
			<th>id</th>
			<th>title</th>	
			<th>content</th>    
			<th>seo title</th>	    
			<th>meta title</th>	    
			<th>meta keywords</th>	    
			<th>added on</th>
			<th>image</th>	    
			<th colspan="2">Actions</th>
		</tr>	
		<?php 
			while($row=mysqli_fetch_array($posts_result)){	
		?>
		<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['title']; ?></td>
			<td><?php echo $row['content']; ?></td>
			<td><?php echo $row['seo_title']; ?></td>
			<td><?php echo $row['meta_title']; ?></td>
			<td><?php echo $row['meta_keyword']; ?></td>
			<td><?php echo $row['added_date']; ?></td>

			<td>
				<?php 
					$image=explode(' ', $row['image']);//what will do here
	   				foreach($image as $out) {
				 ?>
					<img src="<?php  echo $sitepath ?>/admin/uploads/<?php echo $out ;?>" height='50px' width='50px'>
				<?php } ?>
			</td>

			<td>
				<a class="action" href="<?php echo $sitepath ?>/admin/edit-post/<?php echo $row['id']; ?>">Edit</a>
			</td>
			<td>
				<a class="action" href="#" onclick="deleteme(<?php echo $row['id'];?>)">Delete</a>
			</td>
		</tr>   
		<?php }  ?>  
	</table>
</div>	

<?php 
	$posts = "SELECT COUNT(id) FROM posts";  
	$posts_result = mysqli_query($conn,$posts);  
	$row= mysqli_fetch_array($posts_result);  
	$total_records = $row[0];  
	$total_pages = ceil($total_records / $limit);  
	$pagLink = "<div class='pagination post'>";  
	for ($i=1; $i<=$total_pages; $i++) {  
	             $pagLink .= "<a href='posts-manager.php?page=".$i."'>".$i."</a>";  
	};  
	echo $pagLink . "</div>"; 
?>

<script type="text/javascript">
	function deleteme(id){
		if(confirm("ARE YOU SURE YOU WANT TO DELETE THIS SLIDE??")){
			window.location.href='../controller/delete-post.php?delete_id='+id+'';
			return true;
		}
	}
</script>

<?php include ("footer.php"); ?>
