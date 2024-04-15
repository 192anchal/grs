<?php
$id=$_REQUEST['uid'];
include("headeradmin.php");
include("connection.php");
$query="select * from tbl_user where uid='$id'";
$res=mysqli_query($con,$query);
$query4="select * from tbl_user where uid='$id'";
$res4=mysqli_query($con,$query4);
while($row4=mysqli_fetch_array($res4))
{
$filename=$row4['profile_pic'];
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>All User Record Show</title>
     <style>
          img{
               width:140px;
          }
         th{
              padding: 10px; 
          }
         table{
          text-align: center;
         }
         
     </style>
</head>
<body>
     <center>
<div id="outer" class="container-fluid">
    <form>
        <div class="row" >
          <h2 style="color:blue; text-shadow:2px 0px 6px grey; text-decoration:underline;" >Show All Record</h2>
          <div class="col-sm-2 m-auto" >
          <img src="../student/<?php echo $filename; ?>" style="border-radius:50%; height:200px; width:200px"/>
          </div>
        </div>
        <?php
        if($row=mysqli_fetch_array($res))
        {

       
        ?>
        <br/><br/>
        <div class="row m-auto">
            <table class="table table-bordered">
            <tr>
                <th>Name:-</th>
                <td><?php echo strtoupper($row['name']);  ?></td>
                <th> Father'Name:-</th>
                <td><?php echo $row['fname'];  ?> </td>
           </tr>
           <tr>
                <th>Gender:-</th>
                <td><?php echo $row['gender'];  ?></td>
                <th>Email:-</th>
                <td><?php echo strtolower($row['email']);  ?></td>
           </tr>
           <tr>
                <th>Password:-</th>
                <td><?php echo "********";  ?></td>
                <th>Mobile:-</th>
                <td><?php echo $row['mobile'];  ?></td>
           </tr>
           <tr>
                
                <th> DOB:-</th>
                <td><?php echo $row['dor'];  ?></td>
                <th>Address:-</th>
                <td><?php echo $row['address'];  ?></td>
           </tr>
           <tr>
                <th>City:-</th>
                <td><?php echo $row['city'];  ?></td>
                <th>Pincode:-</th>
                <td><?php echo $row['pincode'];  ?></td>
           </tr>
           <tr>
                <th>Course:-</th>
                <td><?php echo $row['course'];  ?></td>
                <th>Session:-</th>
                <?php $sid=$row['sid']; 
                 $query2="select * from tbl_session where sid='$sid'";
                 $res2=mysqli_query($con,$query2);
                 if($row2=mysqli_fetch_array($res2))
                 {
                 $session=$row2['session'];
                 }
                  ?>
                 <td><?php echo $session ?> </td>
           </tr>
           <tr>
                <th>College:-</th>
                <?php $cid=$row['cid']; 
                 $query3="select * from tbl_college where cid='$cid'";
                 $res3=mysqli_query($con,$query3);
                 if($row3=mysqli_fetch_array($res3))
                {
                  $college=$row3['college'];
                 }
                ?>
                <td><?php echo $college ?> </td>
                <th>Status:-</th>
                <td><?php echo $row['status'];  ?></td>
           </tr>
           <tr>
                <th>DOR:-</th>
                <td><?php echo $row['dor'];  ?></td>
                <td></td>
                <th> <a href="usershow.php">BACK</a></th >
           </tr>
            </table>
              
        </div>
        <?php
         }
        ?>
</form>
</div>
     </center>
</body>
</html>
<?php  
include("mainadmin.php");
?>


