
	<?php 
		session_start();
		if($_SESSION["email"]==true){
		}else{
			header("../index.php");
			exit();
		}
	?>																

	<?php 
	include("header.php"); 
	$sql="SELECT * FROM pages";
	$result=mysqli_query($conn,$sql);
	?>
	<title>add new page</title>

	

	
	<form class="form editpg image-table" action="<?php echo $sitepath ?>/admin/controller/addnewpage.php" method="POST" name="form">
		<label>Title:</label><br>
		<input type="text" name="title" placeholder="Enter Title" required="required"><br><br>

		 <label>Content:</label>
		 <textarea name="content" name="editor1" id="editor1" rows="6" cols="50" required="required"></textarea><br>
                
        
		<label>Description:</label><br>
		<input type="text" name="description" placeholder="description" required="required"><br><br>

		<label>Select Page: </label><br>
		<select name="select-page">
		
			    <?php
			      while ($row = $result->fetch_assoc()) 
			      {
			      	echo '<option></option>';
			        echo '<option value=" '.$row['id'].' "> '.$row['title'].' </option>';
			      }
			    ?>

	    </select><br><br>

		<input type="submit" name="submit">

	</form>
	<div>
		
	</div>


    <script src="../static/ckeditor/ckeditor.js"></script>
    
	<script>
    	CKEDITOR.replace( 'editor1' );
	</script>

<?php include("footer.php") ?>
