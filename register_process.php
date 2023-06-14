<?php

require('config/config.php');
require('config/db.php');

 $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
  $name = $_POST['name'];
  $username = $_POST['username']; 
  $password = $_POST['password'];
  
  $sql = "INSERT INTO user (name,username, password) VALUES ('$name','$username', '$password')";
  
  if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
?> 