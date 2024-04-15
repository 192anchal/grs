<?php
session_start();
$email=$_POST['email'];
//echo $email;
$password=$_POST['password'];
include("connection.php");
$query="select * from tbl_admin where email='$email' and password='$password'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
$_SESSION['admin']=$email;
 header("location:dashboard.php");
 //echo "<script>alert('Welcome❤️❤️❤️');window.location.href='dashboard.php';</script>";
}
else
{
//header("location:adminlogin.php");
echo "<script>alert('Your Password is Incorrect');window.location.href='adminlogin.php';</script>";
}
?>