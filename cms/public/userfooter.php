<?php 
	include '../admin/controller/siteconfiguration.php';
	global $sitepath;
	
 ?>	
	<script src="<?php echo $sitepath ?>/admin/static/js/jquery.min.js"></script>
	<script src="<?php echo $sitepath ?>/admin/static/js/popper.min.js"></script>
	<script src="<?php echo $sitepath ?>/admin/static/js/bootstrap.min.js"></script>
	<script src="<?php echo $sitepath ?>/admin/static/prettyphoto/js/jquery-1.6.1.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="<?php echo $sitepath ?>/admin/static/prettyphoto/js/jquery.prettyPhoto.js" type="text/javascript"></script>
	
	<script type="text/javascript">
	  	$(document).ready(function(){
	    	$("a[rel^='prettyPhoto']").prettyPhoto({
	    		default_width: 500,
				default_height: 344,

	    	});
	  });
	</script>
</body>
</html>
