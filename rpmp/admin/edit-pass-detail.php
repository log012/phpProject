<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['bpmsaid']==0)) {
  header('location:logout.php');
  } else{
    if(isset($_POST['submit']))
  {


 $fname=$_POST['fullname'];
$cnum=$_POST['cnumber'];
$email=$_POST['email'];
$itype=$_POST['identitytype'];
$icnum=$_POST['icnum'];
$cat=$_POST['category'];
$source=$_POST['source'];
$des=$_POST['destination'];
$tc=$_POST['trainclass'];
$fdate=$_POST['fromdate'];
$tdate=$_POST['todate'];
$cost=$_POST['cost'];
$eid=$_GET['editid'];
$wtype=$_POST['waytype'];
$sql="update `tblpass` set `name`='$fname',`email`='$email',`number`='$cnum',`source`='$source',`destination`='$des',`from date`='$fdate',`to date`='$tdate', `cost`='$cost' where `id`='$eid'";
$query=mysqli_query($con,$sql);



  
         echo '<script>alert("Pass Detail has been updated")</script>';
 

  

}
?>

<!DOCTYPE html>
<html>

<head>
    
    <title>Railway Pass Management System | Edit Pass</title>
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
                    <h1 class="page-header">Edit Pass</h1>
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
                                    <form method="post" enctype="multipart/form-data"> 
                                    <?php
$eid=$_GET['editid'];
$sql="SELECT * from  tblpass where ID=$eid";
$query = mysqli_query($con,$sql);

$cnt=1;
if(mysqli_num_rows($query) > 0)
{
foreach($query as $row)
{               ?> 
  <p colspan="6" style="font-size:20px;color:blue;text-align: center;">
 Pass ID: <?php  echo ($row['passnumber']);?></p>
    <div class="form-group"> <label for="exampleInputEmail1">Full Name</label> <input type="text" name="fullname" value="<?php  echo $row['name'];?>" class="form-control" required='true'> </div>
    <div class="form-group"> <label for="exampleInputEmail1">Photo</label> <img src="images/<?php echo $row['image'];?>" width="50" height="50" value="<?php  echo $row->ProfileImage;?>">
<a href="changeimage.php?editid=<?php echo $row['id'];?>"> &nbsp; Edit Image</a> </div>
    <div class="form-group"> <label for="exampleInputEmail1">Contact Number</label> <input type="text" name="cnumber" value="<?php  echo $row['number'];?>" class="form-control" required='true' maxlength="10" pattern="[0-9]+"> </div>
    <div class="form-group"> <label for="exampleInputEmail1">Email Address</label> <input type="email" name="email" value="<?php  echo $row['email'];?>" class="form-control" required='true'> </div>
    
    
     
     
     <div class="form-group"> <label for="exampleInputEmail1">Source</label> <input type="text" name="source" class="form-control" required='true' value="<?php  echo $row['source'];?>"> </div>
     <div class="form-group"> <label for="exampleInputEmail1">Destination</label> <input type="text" name="destination" value="<?php  echo $row['destination'];?>" class="form-control" required='true'> </div>
    
<div class="form-group"> <label for="exampleInputEmail1">From Date</label> <input type="date" name="fromdate" value="<?php  echo $row['from date'];?>" class="form-control" required='true'> </div>
<div class="form-group"> <label for="exampleInputEmail1">To Date</label> <input type="date" name="todate" value="<?php  echo $row['to date'];?>" class="form-control" required='true'> </div>



<div class="form-group"> <label for="exampleInputEmail1">Cost</label> <input type="text" name="cost" value="<?php  echo $row['cost'];?>" class="form-control" required='true'> </div>


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