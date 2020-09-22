<?php 
		session_start();
		if($_SESSION["email"]==true){
		}else{
			header("Location:../index.php");
			exit();
		}
 
		include "../controller/databaseconnect.php";
		include "header.php";
		global $conn;
		$sql="SELECT * FROM users";
		$result=mysqli_query($conn,$sql);
	?>

	
	<title>user table</title>


	</div>
	
	<table class="page-table user-table">
		<!-- <caption> LIST OF USERS</caption> -->
		  <tr>
		    <th>ID</th>
		    <th>Email</th>
		    <th>Password</th> 
		    <th>Actions</th>
		  </tr>

		<?php
		  while($row=mysqli_fetch_array($result)){
	  	?>
		  	<tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['email']; ?></td>
				<td><?php echo $row['password']; ?></td>
				
				<td>
					<a class="action" href="<?php echo $sitepath ?>/admin/edit-user/<?php echo $row['id']; ?>">Change</a>
				</td>
				
			</tr>
		<?php } ?>
	</table>

	
<?php include("footer.php") ?>
