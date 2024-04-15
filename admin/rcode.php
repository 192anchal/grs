<?php
include("headeradmin.php");
$ctype=$_POST['ctype'];
include("connection.php");
$query="select * from tbl_complain where cmpid='$ctype'";
$res=mysqli_query($con,$query);
while($row=mysqli_fetch_array($res))
{
    echo $row['complain'];
}
?>
<br/>
<input type="button" value="Print" onclick="window.print()"  style="background-color:blue; padding:10px; margin-top:10px; color:white; border-radius: 10px; font-weight: 50px;"/>