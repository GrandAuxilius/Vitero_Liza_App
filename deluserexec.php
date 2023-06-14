<?php
require('config/config.php');
require('config/db.php');
	$id = $_POST['id'];
	mysqli_query($conn,"DELETE from user WHERE id='$id'");
			

		 echo "<script>windows: location='users.php'</script>";				
			