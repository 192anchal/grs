<?php
session_start();
$email=$_SESSION['user'];
include("connection.php");          
$query1="select * from tbl_user where email='$email'";
$res1=mysqli_query($con,$query1);
if($row1=mysqli_fetch_array($res1))
    {
$uid=$row1['uid'];
    }
$filename=$_FILES['file']['name'];
//echo $filename;
$size=$_FILES['file']['size'];
// //echo $size;
$type=$_FILES['file']['type'];
// // echo $type;
$tmp_name=$_FILES['file']['tmp_name'];
// //echo $tmp_name;
$location="student/";
$query="update tbl_user set profile_pic='$filename' where uid='$uid'";
mysqli_query($con,$query);
move_uploaded_file($tmp_name,$location.$filename);
echo "<script>alert('Profile Upload Sucessfully');window.location.href='pic.php';</script>";
?>