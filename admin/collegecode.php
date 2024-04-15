<?php
$college=$_POST['college'];
include("connection.php");
$check="select * from tbl_college where college='$college'";
$res=mysqli_query($con,$check);
if($row=mysqli_fetch_array($res))
{
    //header("location:college.php");
    echo "<script>alert('This College All Ready Exist');window.location.href='college.php'</script>";
}
else{
$query="insert into tbl_college(college,status,dor) values('$college','N',curdate())";
mysqli_query($con,$query);
echo "<script>alert('Your College Added Succesfully');window.location.href='college.php'</script>";
}
?>