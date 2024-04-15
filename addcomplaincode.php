<?php
session_start(); 
include("connection.php");
$ctype=$_POST['ctype'];
//echo $ctype;
$complain=$_POST['complain'];
$email=$_SESSION['user'];
$check="select * from tbl_user where email='$email'";
$res=mysqli_query($con,$check);
if($row=mysqli_fetch_array($res)){
    $uid=$row['uid'];
//echo $uid;
}
$query="insert into tbl_complain(ctid,uid,complain,doc,status) values('$ctype','$uid','$complain',curdate(),'N')";
     mysqli_query($con,$query);
     header("location:addcomplain.php");
?>
    