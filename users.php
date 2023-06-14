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
    
    <div class="content">
                <div class="container-fluid">
                    <div class="section">
                    </div>
                
                    <div class = "row">
                    <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                            <br/>
                                <div class="col-md-12">

                                </div>
                                
                                <div class="col-md-12 hoverable">
                              
                              <a href="#" data-toggle="modal" data-target="#adduserModal">                                        
                                  <button type="submit" class="btn btn-info btn-fill pull-right">Add User</button>
                              
                              </a>
                          </div>


<div id="adduserModal" class="modal fade" role="dialog">
<div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal">&times;</button>
  <h4 class="modal-title">Add User</h4>
</div>
<div class="modal-body">
  <form method="post" action="useradd.php">
<table width="200" border="1">
<tr>
<td>Username:</td>
<td><input type="text" name="username" /></td>
</tr>
<tr>
<td>Password:</td>
<td><input type="text" name="password" /></td>
</tr>
<tr>
<td>Name:</td>
<td><input type="text" name="name" /></td>
</tr>
<tr>
<td> </td>
<td><input type="submit" name="ok" value="Add"/></td>
</tr>
</table>

</form>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>

</div>
</div>




                                
                                <div class="card-header ">
                                    <h4 class="card-title">System Users</h4>
                                    <div class="panel panel-info">
           

                    

                                    </div>
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover table-striped">
                                       
               
                                <thead>
                                <th>Id</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Name</th>
                                <th>Action</th>

                            </thead>
                             <tbody>

      
    
                             
<?php
 
$result = mysqli_query($conn,"SELECT * FROM user where id !=$session");

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['username'] . "</td>";
  echo "<td>" . $row['password'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>
          <button class='btn btn-primary btn-sm btn-fill' data-toggle='modal' data-target='#editUserModal-$row[id]'>Update</button> &nbsp &nbsp
          <a rel='facebox' href='deluser.php?id=$row[id]'><span class=\"btn btn-secondary btn-sm btn-fill\">Delete</span></a>
        </td>";
?>

<!-- Edit User Modal -->
<div class="modal fade" id="editUserModal-<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="editUserModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editUserModalLabel">Edit User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="edituser.php">
          <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" value="<?php echo $row['username']; ?>">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="text" class="form-control" name="password" value="<?php echo $row['password']; ?>">
          </div>
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>">
          </div>
          <button type="submit" name="save" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
<?php 
}
echo "</table>";
?>

              
              </div>
           </div>
         </div>
      </div>
    </div>
   <!-----  ######################################### -->
   

</div>
</body>

</html>
 <script src="js/jquery.js"></script>
  <script type="text/javascript">
$(function() {


$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

//Built a url to send
var info = 'id=' + del_id;
 if(confirm("Sure you want to delete this update? There is NO undo!"))
		  {

 $.ajax({
   type: "GET",
   url: "delete.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script>


       
  
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
