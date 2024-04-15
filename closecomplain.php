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
<h2 style="color:blueviolet;  text-shadow:2px 0px 6px grey; text-decoration:underline;">Close Complain</h2> 
<tr>
<thead class="table-primary">
<th>S.No</th>
<th>Complain Type</th>
<th>Complain</th>
<th>Status of Complain</th>
<th>Date of Complain</th>
<th>Date of Complition</th>
</thead>

</tr>
<?php
$i=1;
$query1="select * from tbl_complain where uid='$uid' and status='C'";
$res1=mysqli_query($con,$query1);
while($row1=mysqli_fetch_array($res1))
{
?>
<tr>
<td><?php echo $i; ?></td>
<?php $ctid=$row1['ctid']; 
                 $query2="select * from tbl_complain_type where ctid='$ctid'";
                 $res2=mysqli_query($con,$query2);
                 if($row2=mysqli_fetch_array($res2))
                 {
                 $complain=$row2['complain'];
                 }
                  ?>
                 <td><b><?php echo strtoupper($complain) ?></b> </td>
                 
    <td><?php echo $row1['complain']; ?></td>
    <td><?php echo $row1['status']; ?></td>
    <td><?php echo $row1['doc']; ?></td>
    <td><?php echo $row1['docomplain']; ?></td>
    
    
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