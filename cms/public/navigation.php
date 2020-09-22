	<?php 
		include '../admin/controller/databaseconnect.php';
		global $conn;
	 ?>


	 
	<div class="dashboard clearfix">
		<div>
			<h1 class="dash-heading bold"><a href="<?php echo $sitepath ?>/all-pages">Pages</a></h1>
		</div>
			
			<div class="bs-example">
					<?php
						$parent_query ="SELECT * FROM pages where parent_id= -1 ";
						$resultcheck=mysqli_query($conn, $parent_query);
						while($res=mysqli_fetch_assoc($resultcheck)){ 
					?>

				    <div class="dropdown">
				        <a class="parent" href="<?php echo $sitepath ?>/pages/<?php echo $res['slug'];?>"> <?php echo $res['title']; ?></a> <button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown"><span class="caret"></span></button>
				        
				        <ul class="dropdown-menu">
						    <?php 
						    	$child_query ="SELECT * FROM pages WHERE parent_id=" .$res['id'];
					        	$resultcheck1=mysqli_query($conn,$child_query);
						    	while($res1=mysqli_fetch_assoc($resultcheck1)){
						     ?>
						            <li><a href="<?php echo $sitepath; ?>/pages/<?php echo $res1['slug'];?>"><?php echo $res1['title']; ?></a></li>

					        <?php } ?>
				        </ul>		
					</div>
		        <?php } ?>

			</div>
			<h1 class=" bold"><a href="<?php echo $sitepath ?>/images">Images</a></h1>
	</div>
	


	


	
