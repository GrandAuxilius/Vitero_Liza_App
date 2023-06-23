<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Light Bootstrap Dashboard - Free Bootstrap 4 Admin Dashboard by Creative Tim</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="assets/css/demo.css" rel="stylesheet" />
    <style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}
</style>
</head>

<body>


<?php


session_start();?>
<?php
$session=$_SESSION['id'];
        require('config/config.php');
        require('config/db.php');

        $result = mysqli_query($conn,"SELECT * FROM user where id= '$session'");
        while($row = mysqli_fetch_array($result))
          {
          $sessionname=$row['name'];
        
          }
          
        ?>
        <?php
       
          $results = mysqli_query($conn,"SELECT * FROM user");
          $users = mysqli_num_rows($results);
        ?>
        <?php
       
          $results = mysqli_query($conn,"SELECT * FROM bill");
          $bill = mysqli_num_rows($results);
        ?>
        <?php
 
          $jibu = mysqli_query($conn,"SELECT * FROM owners");
          $client = mysqli_num_rows($jibu);
        ?>

        

 <!-- Sidebar -->
 

    <div class="wrapper">
        <div class="sidebar" data-image="assets/img/sidebar-5.jpg">
           
            <div class="sidebar-wrapper">
                
                
                <?php include('includes/sidebar.php'); ?>

              

            </div>
        </div>
        <div class="main-panel">
        <?php include('includes/navbar.php'); ?>
        
 <!-- Sidebar -->
 
             
    <!-------- home panel ----------------------------->
    
    <center>
    <div class="content" style="background: linear-gradient(to right, #ffd200, #ff8c00);"> 
                <div class="container-fluid">
                    <div class="section">
                    </div>
                <br>
                <br>
                
                    <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                            <br/>
                                <div class="col-md-12">

      <hr color="#000000" />



<div style="float: left; width: 100%;">
  <div class="card" style="background: #fff; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
  <div class="col-md-12">
  <div class="panel-title"><h5 style="font-size:24px; font-weight:bold; color: #ffd200; text-shadow: 2px 2px #ff8c00;">Clients</h5></div>
            </div>
              <div class="panel-body">
               <h1 align="center" style="font:Verdana, Geneva, sans-serif; font-weight:bolder; color: #ffd200; text-shadow: 2px 2px #ff8c00;"><?php echo $client; ?></h1>
              </div>
              <a href="clients.php"><div class="panel-footer" style="background: linear-gradient(to right, #ffd200, #ff8c00);"><span class="alert-link glyphicon glyphicon-circle-arrow-right" style="color: #fff; text-shadow: 2px 2px #000;"></span>View</div></a>
  </div>
</div>

<div style="float: right; width: 100%;">
  <div class="card" style="background: #fff; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
  <div class="col-md-12">
  <div class="panel-title"><h5 style="font-size:24px; font-weight:bold; color: #ffd200; text-shadow: 2px 2px #ff8c00;">Users</h5></div>
            </div>
              <div class="panel-body">
               <i><h1 align="center" style="font:Verdana, Geneva, sans-serif; font-weight:bolder; color: #ffd200; text-shadow: 2px 2px #ff8c00;"><?php echo $users; ?></h1>
              </div>
             
              <a href="users.php"><div class="panel-footer" style="background: linear-gradient(to right, #ffd200, #ff8c00);"><span class="alert-link glyphicon glyphicon-circle-arrow-right" style="color: #fff; text-shadow: 2px 2px #000;"></span>View</div></a>
              </div>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
            </div>
              </div>
              </div>
            
              </div>
              </div>
              </div>  

 <!-- Footer -->


            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <ul class="footer-menu">
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Company
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Portfolio
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog
                                </a>
                            </li>
                        </ul>
                        <p class="copyright text-center">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </div>
    
</body>
<!--   Core JS Files   -->
<script src="assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="assets/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>

</html>
