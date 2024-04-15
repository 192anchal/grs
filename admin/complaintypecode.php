<?php
$complain=$_POST['complain'];
include("connection.php");
$check="select * from tbl_complain_type where complain='$complain'";
$res=mysqli_query($con,$check);
if($row=mysqli_fetch_array($res))
{
   // header("location:complaintype.php");
   echo "<script>alert('This Complain All Ready Exist');window.location.href='complaintype.php'</script>";
}
else{
$query="insert into tbl_complain_type(complain,status,dor) values('$complain','N',curdate())";
mysqli_query($con,$query);
//header("Location:complaintype.php");
echo "<script>alert('Your Complain Added Succesfully');window.location.href='complaintype.php'</script>";
}
?>