<?php
session_start();
$op=$_POST['op'];
$np=$_POST['np'];
$cnp=$_POST['cnp'];
$email=$_SESSION['user'];
include("connection.php");
$query="select password from tbl_user where email='$email'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
 $pp=$row['password'];
}
if($op==$pp)
{
if($op==$np)
{
echo "<script>alert('Old Password and New Password are Same');window.location.href='userchangepass.php'</script>";
}
else if($np==$cnp)
{ 
$check="update tbl_user set password='$cnp' where email='$email'";
mysqli_query($con,$check);
echo "<script>alert('Update Password Sucessfully');window.location.href='studentlogin.php'</script>";
}
else
{ 
echo "<script>alert('New Password and Confirm Password are Not same');window.location.href='userchangepass.php'</script>";
}
}
else
{
//header("location:profile.php");
echo "<script>alert('Old Password and Login Password are Not same');window.location.href='userchangepass.php'</script>";
}
?>