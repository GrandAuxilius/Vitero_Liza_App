<?php
require('config/config.php');
require('config/db.php');

$owner_id =$_REQUEST['id'];
    $id = $_POST['id'];
    $lname = $_POST['lname'];
    $fname = $_POST['fname'];
    $mi = $_POST['mi'];
    $address=$_POST['address'] ;
    $contact=$_POST['contact'] ;

    $sql = "UPDATE owners SET id ='$id', lname ='$lname',
         fname ='$fname',mi ='$mi', address='$address', contact='$contact' WHERE id = '$owner_id'";

    if (mysqli_query($conn, $sql)) {
        echo "<script>window.location='clients.php'</script>";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }