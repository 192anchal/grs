<?php
$session=$_POST['session'];
include("connection.php");
$check="select * from tbl_session where session='$session'";
$res=mysqli_query($con,$check);
if($row=mysqli_fetch_array($res))
{
   // header("location:session.php");
   echo "<script>alert('This Session All Ready Exist');window.location.href='session.php'</script>";
}
else{
$query="insert into tbl_session(session,status,dor) values('$session','N',curdate())";
mysqli_query($con,$query);
//header("Location:session.php");
echo "<script>alert('Your Session Added Succesfully');window.location.href='session.php'</script>";
}
?>