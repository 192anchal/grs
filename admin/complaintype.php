<?php
include("headeradmin.php");
 include("connection.php");
$query="select * from tbl_complain_type order by ctid";
$res=mysqli_query($con,$query);
?>
<!-- main -->
<center>
<form style="box-shadow:0px 5px 10px blue; padding:20px; width: 400px; border-radius:20px; background-color:white;"  action="complaintypecode.php" method="post">    
<h2 style="color:blue; text-shadow:2px 0px 6px grey; text-decoration:underline;">Add Complain Type</h2>
<br/>
<input type="text" class="form-control" name="complain" placeholder="Enter Complain Type" style="border:1px black solid;" >
<input type="submit" value="Add Complain" style="background-color:blue; padding:10px; margin-top:10px; color:white; border-radius: 10px; font-weight: 50px;">
</form>
<br/>
<br/>
<table class="table table-bordered w-auto table-hover">
<tr>
  <thead class="table-primary">
  <th>S.No</th>
  <th>Academic Complain</th>
  <th>Date of Creation</th>
  <th>Created By</th>
  <th>Edit</th>
  <th>Delete</th>
  </thead>
</tr>
<?php
$ctid=1;
while($row=mysqli_fetch_array($res))
{
?>
<tr>
   <td><?php echo $ctid ?></td>
   <th><?php echo $row['complain'];?></th>
   <td><?php echo $row['dor'];?></td>
   <th><?php echo "Admin";?>  <i class="fa-regular fa-user"></i></th>
   <td><a href="complaintypeedit.php?ctid=<?php echo $row['ctid'];?> "><img src="../image/5506-200.png" style="width:35px;"/></a></td>
   <td><a href="complaintypedelete.php?ctid=<?php echo $row['ctid'];?>"><img src="../image/3405244.png" style="width:25px;"/></a></td>
</tr>
<?php
$ctid++;
}
?>
</table>
</center>
<!-- main -->
<?php
include("mainadmin.php");
?>






