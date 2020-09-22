

<?php 
	session_start();
	if($_SESSION["email"]==true){
	}else{
		header("../index.php");
		exit();
	}

	include "../controller/databaseconnect.php";
	global $conn;
	//getting id from the database
	if(isset($_GET['edit_id'])){
		$sql="SELECT * FROM users WHERE id=" . $_GET['edit_id'];
		$result=mysqli_query($conn,$sql);
		$row=mysqli_fetch_array($result);
	}
	//update information
	if(isset($_GET['update'])){
		
		$email=$_POST['email'];
		$password=$_POST['password'];
		$edit_id=$_GET['edit_id'];
		$query="UPDATE users SET email='$email', password='$password' WHERE id=$edit_id";
		$result=mysqli_query($conn,$query);
		header("Location:user-table.php");
		exit();
	}
?>
	<?php include("header.php") ?>

	<title>edit id & password</title>



 	<?php
 		$edit_id = $_GET['edit_id'];
 	?>
 	
 <!-- creating html form for editing -->

 	
 	<form class="page-table editpg user-table" method="POST" action="<?php echo $sitepath; ?>/admin/view/edit-user.php?edit_id='<?php echo $edit_id; ?>'&update=true"> <!-- getting edit_id -->
 		<h1>Edit Login Details</h1><br>
 		Email:<input type="text" name="email" placeholder="Email" value="<?php echo $row['email']; ?>"><br><br>
 		Password:<input type="password" name="password" placeholder="Password" value="<?php echo $row['password']; ?>"><br><br>
 		<button type="submit" name="update" id="update">update</button>
 	</form>
<?php include("footer.php") ?>
 