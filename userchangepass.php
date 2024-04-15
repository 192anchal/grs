<?php
include("headeruser.php");
?>
<!-- new menu -->
<center>
<form  style="box-shadow:0px 0px 5px blueviolet; padding:20px; width: 400px; border-radius:20px;background-color:white;" action="usercpasscode.php" method="post"> 
<h2 style="color:blueviolet; text-shadow:2px 0px 6px grey; text-decoration:underline;">Change Password</h2>   
<b>Old Password:</b>
<input type="password" class="form-control" name="op" placeholder="Old Password"style="border:1px black solid;" >
<b>New Password:</b>
<input type="password" class="form-control" name="np" placeholder="New Password" style="border:1px black solid;">
<b>Confirm Password:</b>
<input type="password" class="form-control" name="cnp" placeholder="Confirm Password" style="border:1px black solid;">
<input type="submit" value="Change" style="background-color:blueviolet; padding:10px; margin-top:10px; color:white; border-radius: 10px; font-weight: 50px;">
</form>
</center>
<!-- end -->
<?php
include("mainuser.php");
?>