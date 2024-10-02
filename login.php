<?php
session_start();
include('dbcoonect.php');
$email=$_session['email'];
$otp=$_POST['otp'];
$sql = "SELECT * FROM otp_2 WHERE email='$email' and otp='$otp'";
$rs = mysqli_query($conn,$sql) or die(mysqli_error($conn));
if(mysqli_num_rows($rs)>0){
    header("location:login_form.php?msg=welcome user:".$email."Login Success!");
}
else{
    header("location:login_form.php?msg=email is invalid ...Plz check again!");

}
?>