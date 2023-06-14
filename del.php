<?php session_start(); ?>
<?php
 require('config/config.php');
 require('config/db.php');
$owner_id =$_REQUEST['id'];

$result = mysqli_query($conn,"SELECT * FROM owners WHERE id  = '$owner_id'");
$test = mysqli_fetch_array($result);
if (!$result) 
        {
        die("Error: Data not found..");
        }
                $id=$test['id'] ;				
                $fname=$test['fname'] ;
                $mi=$test['mi'] ;
                $address=$test['address'] ;
                $contact=$test['contact'] ;
                
mysqli_query($conn,"DELETE FROM owners WHERE id = '$id'");
header("Location: clients.php"); 
?>