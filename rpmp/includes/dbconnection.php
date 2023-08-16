<?php
$server='localhost';
$username='root';
$password='';
$database='rpmpdb';
$con=mysqli_connect($server,$username,$password,$database);
if ($con){
    echo "<script>alert('connection successful')</script>";
}else{
    echo "<script>alert('connection not successful')</script>";

}
?>