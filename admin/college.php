<?php

include("headeradmin.php");
include("connection.php");
$query="select * from tbl_college order by cid";
$res=mysqli_query($con,$query);
?>
<!-- main -->
<center>
<form style="box-shadow:0px 5px 10px blue; padding:20px; width: 400px; border-radius:20px; background-color:white;"    action="collegecode.php" method="post" >    
<h2 style="color:blue; text-shadow:2px 0px 6px grey; text-decoration:underline;">Add College</h2>
<br/>
<input type="text" class="form-control" name="college" placeholder="Enter Your college" style="border:1px black solid;" >
<input type="submit" value="Add College" style="background-color:blue; padding:10px; margin-top:10px; color:white; border-radius: 10px;">
</form>
<br/><br/>
<table class="table table-bordered w-auto table-hover">
    <tr>
        <thead class="table-primary">
        <th>S.No</th>
        <th>Academic College</th>
  <th>Date of Creation</th>
  <th>Created By</th>
  <th>Edit</th>
  <th>Delete</th>
  </thead>
    </tr>
    <?php
    $id=1;
    while($row=mysqli_fetch_array($res))
{
    ?>
    <tr>
        <td><?php echo $id ?></td>
        <th><b><?php echo $row['college']; ?></b></td>
        <td><?php echo $row['dor']; ?></td>
        <th><?php echo "Admin" ?>  <i class="fa-regular fa-user"></i></th>
        <td><a href="collegeedit.php?cid=<?php echo $row['cid'];?>"><img src="../image/5506-200.png" style="width:35px;"/></a></td>
        <td><a href="collegedelete.php?cid=<?php echo $row['cid'];?>"><img src="../image/3405244.png" style="width:25px;"/></a></td>
    </tr>
    <?php
    $id++;
}
    ?>
</table>
<center/>
<!-- main -->
<?php
include("mainadmin.php");
?>