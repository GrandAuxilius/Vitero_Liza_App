<?php
require('config/config.php');
require('config/db.php');
	
			 		$id=$_POST['id'] ;
					$username= $_POST['username'] ;					
					$password=$_POST['password'] ;
					$name=$_POST['name'] ;
					
					
		 mysqli_query($conn,"INSERT INTO  user (id,username,password,name) 
		 VALUES ('$id','$username','$password','$name')"); 
				
			
				echo '<script>windows: location="users.php"</script>';
				
				