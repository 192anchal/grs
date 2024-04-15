<?php
$ctid=$_REQUEST['ctid'];
$complain=$_POST['complain'];
include("connection.php");
$query="update tbl_complain_type set complain='$complain' where ctid='$ctid'";
mysqli_query($con,$query);
//header("location:complaintype.php");
echo "<script>alert('Your Complain Update Sucessfully');window.location.href='complaintype.php';</script>";
?>