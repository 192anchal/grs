<?php
session_start();

$email=$_POST['email'];
//echo $email;
$pass=$_POST['password'];
include("connection.php");
$query="select * from tbl_user where email='$email' and password='$pass' and status='N'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
$_SESSION['user']=$email;
 header("location:userdashboard.php");
 //echo "<script>alert('Welcome');window.location.href='userdashboard.php';</script>";
}
else
{
//header("location:studentlogin.php");
echo "<script>alert('Your Password is Incorrect');window.location.href='studentlogin.php';</script>";
}
?>