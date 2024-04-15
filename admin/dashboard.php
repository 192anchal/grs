<?php
include("headeradmin.php");
include("connection.php");
$query="select count(*) as user_count from tbl_complain where status='N'";
$res=mysqli_query($con,$query);
if ($res->num_rows > 0) {
    $row = $res->fetch_assoc();
    $npCount = $row["user_count"];
} else {
    $npCount = 0; // If no users are found
}

$query2="select count(*) as user_count from tbl_complain where status='P'";
$res2=mysqli_query($con,$query2);
if ($res2->num_rows > 0) {
    $row2 = $res2->fetch_assoc();
    $pcCount = $row2["user_count"];
} else {
    $pcCount = 0; // If no users are found
}

$query3="select count(*) as user_count from tbl_complain where status='C'";
$res3=mysqli_query($con,$query3);
if ($res3->num_rows > 0) {
    $row3 = $res3->fetch_assoc();
    $closeCount = $row3["user_count"];
} else {
    $closeCount = 0; // If no users are found
}
$query4="select count(*) as user_count from tbl_college";
$res4=mysqli_query($con,$query4);
if ($res4->num_rows > 0) {
    $row4 = $res4->fetch_assoc();
    $clgCount = $row4["user_count"];
} else {
    $clgCount = 0; // If no users are found
}


$query6="select count(*) as user_count from tbl_user where status='Y'";
$res6=mysqli_query($con,$query6);
if ($res6->num_rows > 0) {
    $row6 = $res6->fetch_assoc();
    $blockCount = $row6["user_count"];
} else {
    $blockCount = 0; // If no users are found
}
$currentTime = date('H:i:s');
if ($currentTime >= '05:00:00' && $currentTime < '12:00:00') {
    $greeting = "GOOD MORNING!";
} elseif ($currentTime >= '12:00:00' && $currentTime < '16:00:00') {
    $greeting = "GOOD AFTERNOON!";
} elseif ($currentTime >= '16:00:00' && $currentTime < '22:00:00') {
    $greeting = "GOOD EVENING!";
} 
else {
    $greeting = "GOOD NIGHT!";
}
?>
<div class="row">
 <center><H2 style="font-family:Algerian; text-decoration:underline;"><?php
 echo "HELLO!😍";
 echo " GRS MASTER ";
 echo $greeting;
 ?></H2></center>
</div>
<div class="row text-center p-1">
    <div class="col-sm-3 p-2 m-auto" style="box-shadow:0px 5px 10px blue; border-radius:20px; background-color:white;" >
        <h5 style="text-decoration:underline;  font-family:'Lucida Sans';">Not Processed Complains</h5>
         <span class="badge" style="font-size:50px; color:red"><?php echo $npCount; ?><img src="../image/non-removebg-preview.png" style="width:35%; padding-left:20px;"/></span>
         
       
    </div>
    <div class="col-sm-3 p-2 m-auto" style="box-shadow:0px 5px 10px blue; border-radius:20px;  background-color:white;">
        <h5  style="text-decoration:underline;  font-family:'Lucida Sans';">Pending Complains</h5><span class="badge" style="font-size:50px; color:#F6FE13"><?php echo  $pcCount; ?><img src="../image/pending.png" style="width:35%; padding-left:20px;"/></span>
   
       
    </div>
    <div class="col-sm-3 p-2 m-auto" style="box-shadow:0px 5px 10px blue; border-radius:20px; background-color:white;">
        <h5  style="text-decoration:underline;  font-family:'Lucida Sans';">Closed Complains</h5><span class="badge" style="font-size:50px; color:green"><?php echo  $closeCount; ?><img src="../image/images-removebg-preview (1).png" style="width:35%; padding-left:20px;"/></span>
        
    </div>
    
</div>
<div class="row text-center mt-4 p-2">
    <div class="col-sm-1"></div>
    <div class="col-sm-4 p-2 m-auto" style="box-shadow:0px 5px 10px blue; border-radius:20px; background-color:white;" >
        <h5 style="text-decoration:underline;  font-family:'Lucida Sans';">Total Colleges</h5>
         <span class="badge" style="font-size:50px; color:HOTPINK"><?php echo $clgCount; ?><img src="../image/college.png" style="width:28%; padding-left:20px;"/></span>

    </div>
    <div class="col-sm-3 p-2 m-auto" style="box-shadow:0px 5px 10px blue; border-radius:20px; background-color:white;">
        <h5  style="text-decoration:underline;  font-family:'Lucida Sans';">Total Blocked Users</h5><span class="badge" style="font-size:50px; color:blueviolet"><?php echo  $blockCount; ?><img src="../image/block.png" style="width:35%; padding-left:20px;"/></span>
        
    </div>
    <div class="col-sm-1"></div>
</div>
<!-- main -->
<?php
include("mainadmin.php");
?>