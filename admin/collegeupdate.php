<?php
$cid=$_REQUEST['cid'];
$college=$_POST['college'];
include("connection.php");
$query="update tbl_college set college='$college' where cid='$cid'";
mysqli_query($con,$query);
//header("location:session.php");
echo "<script>alert('Your College Update Sucessfully');window.location.href='college.php';</script>";
?>