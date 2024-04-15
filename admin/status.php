<?php
$id=$_REQUEST['id'];
//echo $id;
include("connection.php");
$query="select * from tbl_complain where cmpid='$id'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
    $status=$row['status'];
}
if($status=='N')
{
$query2="update tbl_complain set status='P' where cmpid='$id'";
mysqli_query($con,$query2);
echo "<script>alert('Update Sucessfully');window.location.href='notprocesyet.php'</script>";
}
?>