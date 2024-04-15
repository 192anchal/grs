<?php
include("headeradmin.php");
$sid=$_REQUEST['sid'];
//echo $sid;
include("connection.php");
$query="select * from tbl_session where sid='$sid'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
?>
<!-- main -->
<form style="box-shadow:0px 0px 5px blue; padding:20px; width: 400px; border-radius:20px;" action="sessionupdate.php" method="post">
<input type="hidden" name="sid" value="<?php echo $row['sid'];?>"/>
<h2 style="color:blue;">Update Session</h2>
Enter Your Session:
<input type="text" class="form-control" name="session" placeholder="Enter Your Session" value="<?php echo $row['session'];?>" >
<input type="submit" value="Update Session" style="background-color:blue; padding:10px; margin-top:10px; color:white; border-radius: 10px; font-weight: 50px;">
</form>
<?php
}
?>
<!-- main -->
<?php
include("mainadmin.php");
?>