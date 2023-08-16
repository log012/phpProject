<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['bpmsaid'] == 0)) {
    header('location:logout.php');
} else {
    if (isset($_POST['submit'])) {


        $fname = $_POST['fullname'];
        $cnum = $_POST['cnumber'];
        $email = $_POST['email'];

        $source = $_POST['source'];
        $des = $_POST['destination'];

        $fdate = $_POST['fromdate'];
        $tdate = $_POST['todate'];
        $cost = $_POST['cost'];
        $passnum = mt_rand(100000000, 999999999);
        $propic = $_FILES["propic"]["name"];

        $extension = substr($propic, strlen($propic) - 4, strlen($propic));
        $allowed_extensions = array(".jpg", "jpeg", ".png", ".gif");
        if (!in_array($extension, $allowed_extensions)) {
            echo "<script>alert('Profile Pics has Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
        } else {

            $propic =md5($propic).time().$extension;
            move_uploaded_file($_FILES["propic"]["tmp_name"], "images/" . $propic);
            $sql = "insert into `tblpass`(`passnumber`,`name`,`image`,`email`,`number`,`source`,`destination`,`from date`,`to date`,`cost`)values('$passnum','$fname','$propic','$email','$cnum','$source','$des','$fdate','$tdate','$cost')";
             $query = mysqli_query($con, $sql);

          


            if ($query) {
                echo '<script>alert("Pass detail has been added.")</script>';
                header('location:add-pass.php');
            } else {
                echo '<script>alert("Something Went Wrong. Please try again")</script>';
            }
        }
    }
?>

    <!DOCTYPE html>
    <html>

    <head>

        <title>Railway Pass Management System | Add Pass</title>
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
            <?php include_once('includes/header.php'); ?>
            <!-- end navbar top -->

            <!-- navbar side -->
            <?php include_once('includes/sidebar.php'); ?>
            <!-- end navbar side -->
            <!--  page-wrapper -->
            <div id="page-wrapper">
                <div class="row">
                    <!-- page header -->
                    <div class="col-lg-12">
                        <h1 class="page-header">Add Pass</h1>
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

                                            <div class="form-group"> <label for="exampleInputEmail1">Full Name</label> <input type="text" name="fullname" value="" class="form-control" required='true'> </div>
                                            <div class="form-group"> <label for="exampleInputEmail1">Profile Image</label> <input type="file" name="propic" value="" class="form-control" required='true'> </div>
                                            <div class="form-group"> <label for="exampleInputEmail1">Contact Number</label> <input type="text" name="cnumber" value="" class="form-control" required='true' maxlength="10" pattern="[0-9]+"> </div>
                                            <div class="form-group"> <label for="exampleInputEmail1">Email Address</label> <input type="email" name="email" value="" class="form-control" required='true'> </div>



                                            <div class="form-group"> <label for="exampleInputEmail1">Source</label> <input type="text" name="source" value="" class="form-control" required='true'> </div>
                                            <div class="form-group"> <label for="exampleInputEmail1">Destination</label> <input type="text" name="destination" value="" class="form-control" required='true'> </div>

                                            <div class="form-group"> <label for="exampleInputEmail1">From Date</label> <input type="date" name="fromdate" value="" class="form-control" required='true'> </div>
                                            <div class="form-group"> <label for="exampleInputEmail1">To Date</label> <input type="date" name="todate" value="" class="form-control" required='true'> </div>



                                            <div class="form-group"> <label for="exampleInputEmail1">Cost</label> <input type="text" name="cost" value="" class="form-control" required='true'> </div>
                                            <p style="padding-left: 450px"><button type="submit" class="btn btn-primary" name="submit" id="submit">Add</button></p>
                                        </form>
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