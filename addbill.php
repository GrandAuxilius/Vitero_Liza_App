<?php
require('config/config.php');
require('config/db.php');
	
	$owners_id = $_POST['owners_id'];
	$prev = $_POST['prev'];
	$pres = $_POST['pres'];
	$totalcons = (float)$pres - (float)$prev;
	$price = $_POST['price'];
	$pricetotal = (float)$totalcons * (float)$price;
	$date=$_POST['date'] ;
	

	mysqli_query($conn,"INSERT INTO  bill (owners_id,prev,pres,price,date) 
		 VALUES ('$owners_id','$prev','$pres','$pricetotal','$date')"); 
		 
	mysqli_query($conn,"UPDATE tempo_bill SET Prev = '$pres' where id ='$owners_id'");
				
			
				echo '<script>windows: location="billing.php"</script>';
	