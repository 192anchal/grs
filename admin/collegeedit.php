<?php
include("headeradmin.php");
$cid=$_REQUEST['cid'];
//echo $sid;
include("connection.php");
$query="select * from tbl_college where cid='$cid'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
?>
<!-- main -->
<form style="box-shadow:0px 0px 5px blue; padding:20px; width: 400px; border-radius:20px;" action="collegeupdate.php" method="post">
<input type="hidden" name="cid" value="<?php echo $row['cid'];?>"/>
<h2 style="color:blue;">Update College</h2>
Enterm Your College:
<input type="text" class="form-control" name="college" placeholder="Enter Your College" value="<?php echo $row['college'];?>" >
<input type="submit" value="Update College" style="background-color:blue; padding:10px; margin-top:10px; color:white; border-radius: 10px; font-weight: 50px;">
</form>
<?php
}
?>
<!-- main -->
<?php
include("mainadmin.php");
?>