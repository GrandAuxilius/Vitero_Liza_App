<?php
session_start(); 
require('config/config.php');
require('config/db.php');
$id = $_REQUEST['id'];
$result = mysqli_query($conn,"DELETE from user WHERE id='$id'");
if(!$result) {
    die("Error: Data not found..");
}
echo "<script>windows: location='users.php'</script>";	
?>