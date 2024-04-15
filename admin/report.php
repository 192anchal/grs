<?php
include("headeradmin.php");
include("connection.php");
$mycheck="select * from tbl_complain_type";
$myres=mysqli_query($con,$mycheck);
?>
<center>
<form  style="box-shadow:0px 0px 5px blueviolet; padding:20px; width: 400px; border-radius:20px; background-color:white;" action="rcode.php" method="post"> 
<h2 style="color:blue;  text-shadow:2px 0px 6px grey; text-decoration:underline;">Download Report</h2>   <br/>
<b>Select Complain Type</b>
<select class="form-select" name="ctype" aria-label="Default" style="border:1px black solid;">
  <option value="">--Select Complain Type--</option>
  <?php 
  while($myrow=mysqli_fetch_array($myres))
  {
  ?>
  <option value="<?php echo $myrow['ctid']?>"><?php echo $myrow['complain'];?></option>
  <?php
  }
  ?>
</select>

<input type="submit" value="Download" style="background-color:blue; padding:10px; margin-top:10px; color:white; border-radius: 10px; font-weight: 50px;">
</form>
</center>
<?php
include("mainadmin.php"); 
?>