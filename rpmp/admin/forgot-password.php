<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['submit']))
  {
    $email=$_POST['email'];
$mobile=$_POST['mobile'];
$newpassword=md5($_POST['newpassword']);
  $sql ="SELECT email FROM tbladmin WHERE email='$email' and number='$mobile'";
$query= mysqli_query($con,$sql);
if(mysqli_num_rows($query) > 0)
{
$con1="update `tbladmin` set `password`='$newpassword' where `email`='$email'and `number`='$mobile'";
$chngpwd1 =mysqli_query($con,$con1);
echo "<script>alert('Your Password succesfully changed');</script>";
}
else {
echo "<script>alert('Email id or Mobile no is invalid');</script>"; 
}
}

?>
<!DOCTYPE html>
<html>

<head>
 
    <title>Railway Pass Management System | Forgot Password Page</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
   <link href="assets/css/style.css" rel="stylesheet" />
      <link href="assets/css/main-style.css" rel="stylesheet" />
<script type="text/javascript">
function valid()
{
if(document.chngpwd.newpassword.value!= document.chngpwd.confirmpassword.value)
{
alert("New Password and Confirm Password Field do not match  !!");
document.chngpwd.confirmpassword.focus();
return false;
}
return true;
}
</script>

</head>

<body class="body-Login-back">

    <div class="container">
       
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center logo-margin ">
              <strong style="color: white;font-size: 25px">Railway Pass Management System</strong>
                </div>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">                  
                    <div class="panel-heading">
                        <h3 class="panel-title">Reset Your Password</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" name="chngpwd" onSubmit="return valid();">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-Mail" name="email" required="true" type="email">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Mobile Number" name="mobile" maxlength="10" pattern="[0-9]+" required="true" type="text">
                                </div>
                                <div class="form-group">
                                   
                                    <input class="form-control" type="password" placeholder="New Password"  name="newpassword" required="true">
                                </div>
                                <div class="form-group">
                                   <input class="form-control" type="password" placeholder="Confirm Password"  name="confirmpassword" required="true">
                                </div>
                                <div class="checkbox">
                                    

<label>
    <a href="index.php">Already have an account</a></label>
                                </div>

                                <!-- Change this to a button or input when using this as a form -->
                               
                                <input type="submit" value="submit" class="btn btn-lg btn-success btn-block" name="submit" >
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>

</body>

</html>
