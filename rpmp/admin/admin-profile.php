<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['bpmsaid']==0)) {
  header('location:logout.php');
  } else{
    if(isset($_POST['submit']))
  {
    $adminid=$_SESSION['bpmsaid'];
    $AName=$_POST['adminname'];
  $mobno=$_POST['mobilenumber'];
  $email=$_POST['email'];
  $sql="update `tbladmin` set `name`='$adminname',`number`='$mobilenumber',`email`='$email' where `id`='$aid'";
     $query = mysqli_query($con,$sql);
  echo '<script>alert("Profile has been updated.")</script>';
     
    
  }
  ?>
<!DOCTYPE html>
<html>

<head>
    
    <title>Railway Pass Management System | Admin Profile</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
   <link href="assets/css/style.css" rel="stylesheet" />
      <link href="assets/css/main-style.css" rel="stylesheet" />



</head>

<body>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
      <?php include_once('includes/header.php');?>
        <!-- end navbar top -->

        <!-- navbar side -->
        <?php include_once('includes/sidebar.php');?>
        <!-- end navbar side -->
        <!--  page-wrapper -->
          <div id="page-wrapper">
            <div class="row">
                 <!-- page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Admin Profile</h1>
                </div>
                <!--end page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                       
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form method="post"> 
                                    <?php

$sql="SELECT * from  tbladmin";
$query = mysqli_query($con,$sql);
$cnt=1;
if(mysqli_num_rows($query) > 0)
{
foreach($query as $row)
{               ?>
    <div class="form-group"> <label for="exampleInputEmail1">Admin Name</label> <input type="text" name="adminname" value="<?php  echo $row['name'];?>" class="form-control" required='true'> </div>
    <div class="form-group"> <label for="exampleInputEmail1">User Name</label> <input type="text" name="username" value="<?php  echo $row['username']?>" class="form-control" readonly=""> </div>
    <div class="form-group"> <label for="exampleInputEmail1">Contact Number</label><input type="text" name="mobilenumber" value="<?php  echo $row['number'];?>"  class="form-control" maxlength='10' required='true' pattern="[0-9]+"> </div>
    <div class="form-group"> <label for="exampleInputEmail1">Email address</label> <input type="email" name="email" value="<?php  echo $row['email'];?>" class="form-control" required='true'> </div> 
    <?php $cnt=$cnt+1;}} ?> 
     <p style="padding-left: 450px"><button type="submit" class="btn btn-primary" name="submit" id="submit">Update</button></p> </form>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->
                </div>
            </div>
        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>

</body>

</html>
<?php }  ?>