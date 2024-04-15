<?php
include("headeruser.php");
$email=$_SESSION['user'];
$query="select * from tbl_user where email='$email'";
$res=mysqli_query($con,$query);
while($row=mysqli_fetch_array($res))
{
    $name=$row['name'];
    $uid=$row['uid'];
    $filename=$row['profile_pic'];
    $cid=$row['cid'];
}
date_default_timezone_set('Asia/Kolkata');
    $currentTime = date('H:i:s');
    if ($currentTime >= '05:00:00' && $currentTime < '12:00:00') {
        $greeting = "Good morning!";
    } elseif ($currentTime >= '12:00:00' && $currentTime < '16:00:00') {
        $greeting = "Good afternoon!";
    } elseif ($currentTime >= '16:00:00' && $currentTime < '22:00:00') {
        $greeting = "Good evening!";
    } 
    else {
        $greeting = "Good night!";
    }

?>
<!-- new menu -->
<center>
<h2 style="font-family:Algerian; text-decoration:underline;">
    <?php
    echo "Hello!😍";
    echo  " $name ";
    echo $greeting;
    ?>
</h2>
<center>
<?php
$query="select count(*) as user_count from tbl_complain where uid='$uid'";
$res=mysqli_query($con,$query);
if ($res->num_rows > 0) {
    $row = $res->fetch_assoc();
    $npCount = $row["user_count"];
} else {
    $npCount = 0; // If no users are found
}

$query2="select count(*) as user_count from tbl_complain where uid='$uid' && status='P'";
$res2=mysqli_query($con,$query2);
if ($res2->num_rows > 0) {
    $row2 = $res2->fetch_assoc();
    $pcCount = $row2["user_count"];
} else {
    $pcCount = 0; // If no users are found
}

$query3="select count(*) as user_count from tbl_complain where uid='$uid' && status='C'";
$res3=mysqli_query($con,$query3);
if ($res3->num_rows > 0) {
    $row3 = $res3->fetch_assoc();
    $closeCount = $row3["user_count"];
} else {
    $closeCount = 0; // If no users are found
}
?>
<div class="container-fluid">
<div class="row text-center p-1">
    <div class="col-sm-3 p-2 m-auto" style="box-shadow:0px 5px 10px blue; border-radius:20px; background-color:white;" >
        <h5 style="text-decoration:underline;  font-family:'Lucida Sans';">My Complains</h5>
         <span class="badge" style="font-size:50px; color:red"><?php echo $npCount; ?><img src="image/non-removebg-preview.png" style="width:35%; padding-left:20px;"/></span>
         
       
    </div>
    <div class="col-sm-3 p-2 m-auto" style="box-shadow:0px 5px 10px blue; border-radius:20px;  background-color:white;">
        <h5  style="text-decoration:underline;  font-family:'Lucida Sans';">Pending Complains</h5><span class="badge" style="font-size:50px; color:#F6FE13"><?php echo  $pcCount; ?><img src="image/pending.png" style="width:35%; padding-left:20px;"/></span>
   
       
    </div>
    <div class="col-sm-3 p-2 m-auto" style="box-shadow:0px 5px 10px blue; border-radius:20px; background-color:white;">
        <h5  style="text-decoration:underline;  font-family:'Lucida Sans';">Closed Complains</h5><span class="badge" style="font-size:50px; color:green"><?php echo  $closeCount; ?><img src="image/images-removebg-preview (1).png" style="width:35%; padding-left:20px;"/></span>
        
    </div>
    
</div>

</div>
<!-- end -->
<?php
include("mainuser.php");
?>