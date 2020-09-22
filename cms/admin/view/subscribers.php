<?php 
	session_start();
	if($_SESSION["email"]==true){
	}else{
		header("Location:../index.php");
		exit();
	}
?>
<?php  
	include "../controller/databaseconnect.php";
	global $conn;
	global $sitepath;
	include("header.php"); 

	$subscriber="SELECT * FROM subscribers";
	$posts_result=mysqli_query($conn,$subscriber);
?>

<title>Newsletter Subscribers</title>

<div class="content">

	<form method="POST" action="<?php echo $sitepath ?>/admin/controller/export-to-excel.php">
		<input type="submit" name="submit" value="Export to Excel">
	</form>

	<table>
		<tr>
			<th>id</th>
			<th>E-mail</th>
			<th>Date</th>
			<th>Action</th>
		</tr>
		<?php while($subs=mysqli_fetch_array($posts_result)){ ?>
		<tr>
			<td><?php echo $subs['id']; ?></td>
			<td><?php echo $subs['email']; ?></td>
			<td><?php echo $subs['date']; ?></td>
			<td>
				<a class="action" href="#" onclick="deleteme(<?php echo $subs['id'];?>)">Delete</a>
			</td>
		</tr>
		<?php } ?>
	</table>
</div>	

<script type="text/javascript">
	function deleteme(id){
		if(confirm("ARE YOU SURE YOU WANT TO DELETE THIS RECORD??")){
			window.location.href='../controller/delete-subscriber.php?delete_id='+id+'';
			return true;
		}
	}
</script>

	

	

<?php include ("footer.php") ?>
