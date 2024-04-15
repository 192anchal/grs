<?php
include("headeradmin.php"); 
include("connection.php");
$query="select * from tbl_user where status='Y'";
$res=mysqli_query($con,$query);
?>
<!-- main -->
<h2 style="color:blue; text-shadow:2px 0px 6px grey; text-decoration:underline;" align="center">Block Users</h2>
<table class="table table-bordered text-center table-hover">
    <tr>
        <thead class="table-primary">
        <th>S.No</th>
        <th>Name</th>
     
        <th>Gender</th>
        <th>Email id</th>
        <th>Password</th>
   
 
        <th>View More</th>
        <th>Delete</th>
        <th>Unlock User</th>
        </thead>
    </tr>
    <?php
    $id=1;
    while($row=mysqli_fetch_array($res))
    {
    ?>
    <tr>
    <td><?php echo $id; ?></td>
    <td><b><?php echo strtoupper($row['name']); ?></b></td>
    <td><?php echo $row['gender']; ?></td>
    <td><?php echo strtolower($row['email']); ?></td>
    <td><?php echo "XXXXX" ?></td>

   
    <td><a href="userviewmore.php?uid=<?php echo $row['uid'];?>" style="text-decoration:none;">View More</a></td>

    <td><a href="userdelete.php?uid=<?php echo $row['uid'];?>"><img src="../image/3405244.png" style="width:25px;"/></a></td>
    <td><a href="unblock.php?id=<?php echo $row['uid']; ?>"><img src="../image/unblock.png" style="width:25px;"/></a></td>
    </tr>
    
    <?php
    $id++;
    }
    ?>
</table>
<!-- main -->
<?php
include("mainadmin.php");
?>