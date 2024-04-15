<?php
//$session=$_POST['session'];
//echo $session;
include("connection.php");
$name=$_POST['name'];
$fname=$_POST['fname'];
$gender=$_POST['gen'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$cpass=$_POST['cpass'];
$mobile=$_POST['mobile'];
$dob=$_POST['dob'];
$address=$_POST['address'];
$city=$_POST['city'];
$college=$_POST['college'];
$pincode=$_POST['pincode'];
$course=$_POST['course'];
$session=$_POST['session'];
//echo $session;
if($pass==$cpass)
{
    $check="select * from tbl_user where mobile='$mobile' and email='$email'";
    $res=mysqli_query($con,$check);
    if($row=mysqli_fetch_array($res))
    {
    //header("location:registration.php");
    echo "<script>alert('All Ready Exist');window.location.href='registration.php';</script>"; 
    }
else{
$query="insert into tbl_user(name,fname,gender,email,password,mobile,dob,address,city,pincode,course,sid,cid,status,dor) values('$name','$fname','$gender','$email','$pass','$mobile','$dob','$address','$city','$pincode','$course','$session','$college','N',curdate())";
mysqli_query($con,$query);
//header("location:studentlogin.php");
echo "<script>alert('Your Registation Sucessfully');window.location.href='studentlogin.php';</script>";
}
}
else
{
    //header("location:registration.php");
    echo "<script>alert('Password and Confirm Password are Not Same');window.location.href='registration.php';</script>";
}
?>