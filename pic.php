<?php
include("headeruser.php");
?>
<!-- new menu -->
<center>
<form  style="box-shadow:0px 0px 5px blueviolet; padding:20px; width: 400px; border-radius:20px; background-color:white;" action="piccode.php" method="post" enctype="multipart/form-data"> 
<h2 style="color:blueviolet;  text-shadow:2px 0px 6px grey; text-decoration:underline;">Upload Picture</h2>   <br/>
<b>Select Your Picture</b>
<input type="file" class="form-control" name="file" style="border:1px solid black;"/>
<input type="submit" value="Upload" style="background-color:blueviolet; padding:10px; margin-top:10px; color:white; border-radius: 10px; font-weight: 50px;">
</form>
</center>
<!-- end -->
<?php
include("mainuser.php");
?>