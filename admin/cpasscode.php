<?php
session_start();
$op=$_POST['op'];
$np=$_POST['np'];
$cnp=$_POST['cnp'];
$email=$_SESSION['admin'];
include("connection.php");
$query="select password from tbl_admin where email='$email'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
 $pp=$row['password'];
}
if($op==$pp)
{
if($op==$np)
{
echo "<script>alert('Old Password and New Password are Same');window.location.href='changepass.php'</script>";
}
else if($np==$cnp)
{ 
$check="update tbl_admin set password='$cnp' where email='$email'";
mysqli_query($con,$check);
echo "<script>alert('Update Password Sucessfully');window.location.href='adminlogin.php'</script>";
}
else
{ 
echo "<script>alert('New Password and Confirm Password are Not same');window.location.href='changepass.php'</script>";
}
}
else
{
//header("location:profile.php");
echo "<script>alert('Old Password and Login Password are Not same');window.location.href='changepass.php'</script>";
}
?>