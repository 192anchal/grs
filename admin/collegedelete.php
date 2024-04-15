<?php
$cid=$_REQUEST['cid'];
include("connection.php");
$query="delete from tbl_college where cid='$cid'";
mysqli_query($con,$query);
//header("location:college.php");
echo "<script>alert('Delete Sucessfully');window.location.href='college.php';</script>";
?>