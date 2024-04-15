<?php
include("headeruser.php");
include("connection.php");
$email=$_SESSION['user'];
$query="select * from tbl_user where email='$email'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
$uid=$row['uid'];
//echo $uid;
}
?>
<center>
<table class="table table-bordered table-hover">
<h2 style="color:blueviolet;  text-shadow:2px 0px 6px grey; text-decoration:underline;">My Complain</h2> 
<tr>
<thead class="table-primary">
<th>S.No</th>
<th>Complain Type</th>

<th>Complain</th>
<th>Status of Complain</th>
<th>Date of Complain</th>
</thead>


</tr>
<?php
$i=1;
$query4="select * from tbl_complain where uid='$uid'";
$res4=mysqli_query($con,$query4);
while($row4=mysqli_fetch_array($res4))
{
?>
<tr>
<td><?php echo $i; ?></td>
<?php $ctid=$row4['ctid']; 
                 $query2="select * from tbl_complain_type where ctid='$ctid'";
                 $res2=mysqli_query($con,$query2);
                 if($row2=mysqli_fetch_array($res2))
                 {
                 $complain=$row2['complain'];
                 }
                  ?>
                 <td><b><?php echo strtoupper($complain) ?></b> </td>
                 
    <td><?php echo $row4['complain']; ?></td>
    <td><?php echo $row4['status']; ?></td>
    <td><?php echo $row4['doc']; ?></td>
    
    
    
</tr>

<?php
$i++;
}
?>
</table>
</center>




<?php
include("mainuser.php");
?>