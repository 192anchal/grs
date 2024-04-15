<?php
include("headeradmin.php");
$ctid=$_REQUEST['ctid'];
include("connection.php");
$query="select * from tbl_complain_type where ctid='$ctid'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
?>
<!-- main -->
<form style="box-shadow:0px 0px 5px blue; padding:20px; width: 400px; border-radius:20px;" action="complaintypeupdate.php" method="post">
<input type="hidden" name="ctid" value="<?php echo $row['ctid'];?>"/>
<h2 style="color:blue;">Update Complain</h2>
Enter Your Complain:
<input type="text" class="form-control" name="complain" placeholder="Enter Your Complain" value="<?php echo $row['complain'];?>" >
<input type="submit" value="Update Complain" style="background-color:blue; padding:10px; margin-top:10px; color:white; border-radius: 10px; font-weight: 50px;">
</form>
<?php
}
?>
<!-- main -->
<?php
include("mainadmin.php");
?>