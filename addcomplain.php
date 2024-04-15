<?php
include("headeruser.php");
include("connection.php");
$mycheck="select * from tbl_complain_type";
$myres=mysqli_query($con,$mycheck);
?>
<!-- new menu -->
<center>
<form  style="box-shadow:0px 0px 5px blueviolet; padding:20px; width: 400px; border-radius:20px; background-color:white;" action="addcomplaincode.php" method="post"> 
<h2 style="color:blueviolet;  text-shadow:2px 0px 6px grey; text-decoration:underline;">Add Complain</h2>   <br/>
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
<b>Enter Your Complain</b>
<textarea name="complain" class="form-control" placeholder="Enter your Complain" id="floatingTextarea" style="border:1px black solid;"  cols="30" rows="5"></textarea>
<input type="submit" value="Add Complain" style="background-color:blueviolet; padding:10px; margin-top:10px; color:white; border-radius: 10px; font-weight: 50px;">
</form>
</center>
<!-- end -->
<?php
include("mainuser.php");
?>