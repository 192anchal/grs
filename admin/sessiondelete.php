<?php
$sid=$_REQUEST['sid'];
include("connection.php");
$query="delete from tbl_session where sid='$sid'";
mysqli_query($con,$query);
//header("location:session.php");
echo "<script>alert('Delete Sucesfully');window.location.href='session.php';</script>";
?>