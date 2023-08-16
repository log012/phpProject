<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['bpmsaid']==0)) {
  header('location:logout.php');
  } else{
    
  ?>
<!DOCTYPE html>
<html>

<head>
    
    <title>Railway Pass Management System | Dashboard</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
   <link href="assets/css/style.css" rel="stylesheet" />
      <link href="assets/css/main-style.css" rel="stylesheet" />

<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>

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
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!--end page header -->
            </div>

            <div class="row">
                <!--quick info section -->
              
                <div class="col-lg-6">
                    
                    <div class="alert alert-success text-center">
                        <?php 
$sql ="SELECT ID from tblpass";
$query = mysqli_query($con,$sql);
$res=mysqli_num_rows($query);

?><div class="panel-body yellow">
                        <i class="fa  fa-users fa-3x"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $res;?></b>
                        <a href="manage-pass.php" style="color:#000"> Total Pass</a>
                    </div>
                    </div>
                </div>
                
                
              
                <!--end quick info section -->

                <div class="col-lg-6">
                     
                    <div class="alert alert-danger text-center">
                        <?php 
$sql1 ="SELECT * from tblcontact where IsRead=0 ";
$query1 = mysqli_query($con,$sql1);
$res1=mysqli_num_rows($query1)

?><div class="panel-body red">
                        <i class="fa fa-file fa-3x"></i>&nbsp;&nbsp;&nbsp;&nbsp;<b style="color:#fff"><?php echo $res1;?> </b>
                        <a href="unreadenq.php" style="color:#fff">Total Unread Query</a> 
</div>
                    </div>
                </div>


                <div class="col-lg-6">
                     
                    <div class="alert alert-success text-center">
                        <?php 
$sql1 ="SELECT * from tblcontact where IsRead='1'";
$query1 = mysqli_query($con,$sql1);
$res1=mysqli_num_rows($query1)
?><div class="panel-body blue">
                        <i class="fa fa-file fa-3x"></i>&nbsp;&nbsp;&nbsp;&nbsp;<b style="color:#fff"><?php echo $res1;?> </b>
                        <a href="readenq.php" style="color:#fff">Total Read Query</a> 
</div>
                    </div>
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