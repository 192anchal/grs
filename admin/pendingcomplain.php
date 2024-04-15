<?php
include("headeradmin.php");
include("connection.php");
$query="select * from tbl_complain where status='P'";
$res=mysqli_query($con,$query);
?>
<!-- main -->
<h2 align="center" style=" color:blue; text-shadow:2px 0px 6px grey; text-decoration:underline;">Pending Complaint</h2>
<table class="text-center table-bordered mt-4 table table-hover">
    <tr>
        <thead class="table-primary">
        <th>S.No</th>
        <th>Complain Type</th>
        <th>Student Name</th>
        <th>Complain</th>
        <th>Status of Complain</th>
        <th>Date of Complain</th>
       </thead>

    </tr>
    <?php
    $id=1;
    while($row=mysqli_fetch_array($res))
    {
    ?>
    <tr>
        <td><?php echo $id ?></td>
        <?php $ctid=$row['ctid']; 
                 $query2="select * from tbl_complain_type where ctid='$ctid'";
                 $res2=mysqli_query($con,$query2);
                 if($row2=mysqli_fetch_array($res2))
                 {
                 $complain=$row2['complain'];
                 }
                  ?>
                 <td><b><?php echo strtoupper($complain) ?></b> </td>

                 <?php $uid=$row['uid']; 
                 $query3="select * from tbl_user where uid='$uid'";
                 $res3=mysqli_query($con,$query3);
                 if($row3=mysqli_fetch_array($res3))
                {
                  $name=$row3['name'];
                 }
                ?>
                <td><b><?php echo $name ?> </b></td>
        
        <td><?php echo $row['complain'];  ?></td>
        <td><a href="pending.php?id=<?php echo $row['cmpid'];?>"><button style="background-color:yellow;" class="p-1"><?php echo $row['status'];  ?>ending Complain</button></a></td>
        <td><?php echo $row['doc'];  ?></td>
     
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