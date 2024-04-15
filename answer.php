<?php
session_start();
$ans=$_POST['ans'];
$qid=$_POST['qid'];
include("connection.php");
$email=$_SESSION['user'];
$query="select * from tbl_user where email='$email'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
    $uid=$row['uid'];
}
$query1="insert into tbl_ans(uid,qid,answer,date) values('$uid','$qid','$ans',curdate());";
mysqli_query($con,$query1);
echo "<script>alert('Answer Submit Sucessfully');window.location.href='discuss.php';</script>"; 

?>