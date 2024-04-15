<?php
$ctid=$_REQUEST['ctid'];
include("connection.php");
$query="delete from tbl_complain_type where ctid='$ctid'";
mysqli_query($con,$query);
//header("location:complaintype.php");
echo "<script>alert('Delete Sucessfully');window.location.href='complaintype.php';</script>";
?>