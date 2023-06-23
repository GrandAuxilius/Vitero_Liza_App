<?php session_start();
if(!isset($_SESSION['id'])){
	echo '<script>windows: location="index.php"</script>';
	
	}
?>
<?php
 require('config/config.php');
 require('config/db.php');

$id =$_REQUEST['id'];
$result = mysqli_query($conn,"SELECT * FROM bill where id='$id'");
while($row = mysqli_fetch_array($result))
  {
	  $prev=$row['prev'];
	  $owners_id=$row['owners_id'];
	  $pres=$row['pres'];
	  $price=$row['price'];
	  $totalcons = (float)$pres - (float)$prev;
	  $bill=$totalcons * $price;
	  $date=$row['date'];
 
  }

?>

<?php
  


$result = mysqli_query($conn,"SELECT * FROM owners WHERE id  = '$owners_id'");
$test = mysqli_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$id=$test['id'] ;
				$lname= $test['lname'] ;					
				$fname=$test['fname'] ;
				$mi=$test['mi'] ;
				$address=$test['address'] ;
				$contact=$test['contact'] ;

?>


<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap/dist/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap/dist/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap/dist/css/bootstrap-theme.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap/dist/css/bootstrap-theme.min.css" />

<style type="text/css">
    body {
        background-color: #f4f4f4;
        font-family: Arial, sans-serif;
    }

    #data {
        margin: 0 auto;
        width: 700px;
        padding: 20px;
        border: 2px solid #066;
        background-color: #fff;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
    }

    h4 {
        color: #337ab7;
        font-size: 22px;
        margin-bottom: 10px;
    }

    p {
        color: #777;
        font-size: 16px;
        margin-top: 0;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th, td {
        padding: 8px;
        border-bottom: 1px solid #ddd;
        text-align: left;
        font-size: 14px;
    }

    th {
        background-color: #f5f5f5;
        font-weight: bold;
    }

    #invoice-total {
        margin-top: 20px;
        text-align: center;
    }

    #invoice-total h2 {
        color: #337ab7;
        font-size: 24px;
        margin-bottom: 10px;
    }

    #footer {
        margin-top: 20px;
        text-align: center;
    }

    .btn {
        background-color: #337ab7;
        color: #fff;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .btn:hover {
        background-color: #23527c;
    }
</style>

<script>
    function printDiv(data) {
        var printContents = document.getElementById('data').innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>
</head>
<body>
<div id="data">
    <center>
        <h4>ELECTRIC BILL</h4>
        <p>Cell# 093545374</p>
        <p style="text-align: right; margin-right: 20px;">Date: <?php echo $date; ?></p>
    </center>
    <div id="context">
        <table>
            <tr>
                <th>Last Name:</th>
                <td><b><i><?php echo $lname; ?></i></b></td>
                <th>Client ID</th>
                <td><?php echo $id; ?></i></td>
            </tr>
            <tr>
                <th>First Name</th>
                <td><b><i><?php echo $fname; ?></i></b></td>
          
            </tr>
            <tr>
                <th>Address:</th>
                <td colspan="3"><b><i><?php echo $address; ?></i></b></td>
            </tr>
            <tr>
                <th>Contact:</th>
                <td colspan="3"><b><i><?php echo $contact; ?></i></b></td>
            </tr>
            <tr>
                <th>Previous Reading:</th>
                <td><b><i> <?php echo $prev; ?> </i></b></td>
                <th>Present Reading:</th>
                <td><b><i><?php echo $pres; ?></i></b></td>
            </tr>
            <tr>
                
        </table>
    </div>
    <div id="invoice-total">
        <h2>Total Electric Bill: <b><i><?php echo "&#8369;$bill"; ?></h2>
    </div>
    <div id="footer">
   
        <p>Signature: _____________</p>
    </div>
</div>
<center>
    <button type="button" class="btn btn-default" onclick="window.history.back()">
        <span class="glyphicon glyphicon-arrow-left"></span>&nbsp;Go back
    </button>
    &nbsp;
    <button type="button" class="btn btn-default" onclick="printDiv(data)">
        <span class="glyphicon glyphicon-print"></span>&nbsp;Print Bill
    </button>
</center>
</body>
</html>