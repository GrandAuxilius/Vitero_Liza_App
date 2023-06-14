

<?php
  require('config/config.php');
  require('config/db.php');
$id =$_REQUEST['id'];
mysqli_query($conn,"DELETE from bill WHERE id='$id'");
			

		
?>

<?php
	header('Location: ' . $_SERVER['HTTP_REFERER']);
	exit;
?>