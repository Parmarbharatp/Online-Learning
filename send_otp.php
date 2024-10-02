<?php
session_start();
include("dbconnect.php");
include("email.php");

$email=$_POST["email"];
$sql = "SELECT * FROM otp2 WHERE email='$email'";
$rs= mysqli_query($conn,$sql) or die(mysqli_error($conn));
if(mysqli_num_rows($rs)>0){
  $_SESSION['email']=$email;
    $otp=rand(11111,99999);
   send_otp($email,"PHP OTP LOGIN",$otp);
    $sql = "UPDATE otp2 SET otp='$otp' WHERE email='$email'";
    $rs= mysqli_query($conn,$sql) or die(mysqli_error($conn));
  header("location:login_form.php?msg=otp send success!");
}
else{
    $error[] = "incurrect OTP";
}
?>
