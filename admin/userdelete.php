<?php
$uid=$_REQUEST['uid'];
include("connection.php");
$query="delete from tbl_user where uid='$uid'";
mysqli_query($con,$query);
header("location:usershow.php");
//echo "<script>alert('Delete Sucesfully');window.location.href='usershow.php';</script>";
?>