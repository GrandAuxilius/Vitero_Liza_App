<?php
 session_start();
 
 require('config/config.php');
        require('config/db.php'); 

  
  
 $login = mysqli_query($conn,"SELECT * FROM user WHERE username = '" .$_POST['username'] . "' and password = '" .$_POST['password'] . "'");
 $row=mysqli_fetch_array($login);  
 
 if($row){
 $_SESSION['id'] = $row['id'];

 echo '<script>windows: location="home.php"</script>';
 }
	else {
		header ("location: index.php?err");
		}
 
 
?>
