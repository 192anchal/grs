<?php
$sid=$_REQUEST['sid'];
$session=$_POST['session'];
include("connection.php");
$query="update tbl_session set session='$session' where sid='$sid'";
mysqli_query($con,$query);
//header("location:session.php");
echo "<script>alert('Your Session Update Sucessfully');window.location.href='session.php';</script>";
?>