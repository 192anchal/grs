<?php
include("headeruser.php");
$email=$_SESSION['user'];
include("connection.php");
$query="select * from tbl_user where email='$email'";
$res=mysqli_query($con,$query);
while($row=mysqli_fetch_array($res))
{
$uid= $row['uid'];
$filename=$row['profile_pic'];
}
?>
<div class="container-fluid">
        
</div>
<?php
        $query2="select * from tbl_user where uid='$uid'";
        $res2=mysqli_query($con,$query2);
    while($row2=mysqli_fetch_array($res2))
    {
        ?>
<form method="post" action="profileupdate.php" class="p-3 m-5" style=" font-size:19px; border-radius:20px; box-shadow: 2px 2px 10px blueviolet; background-color:white;"> 
<center><h2 style="color:blueviolet;  text-shadow:2px 0px 6px grey; text-decoration:underline;">Update Profile</h2> </center>
    <div class="row jumbotron box8 rounded">
    <h3 align="center" class="p-1 w-100" ><img src="student/<?php echo $filename; ?>" id="image" style="border-radius:50%; height:200px; width:200px"/></h3>
    
      <div class="row">
     
        <div class="col-sm-6 form-group">
          <label><b>Name:</b>
          </label>
          <input type="text" class="form-control" name="name" value="<?php echo $row2['name'] ?>" style="border:1px solid black;"/>
        </div>
        <div class="col-sm-6 form-group">
          <label><b>Father's name:</b></label>
          <input type="text" class="form-control" name="fname"  value="<?php echo $row2['fname']; ?>" style="border:1px solid black;"/>
        </div>
        <div class="col-sm-6 form-group">
          <label class="mt-4"><b>Gender:-</b></label>
          <input type="radio"   name="gender" value="male" <?php if($row2['gender']=='male') { ?> checked <?php } ?>/> Male
          <input type="radio"   name="gender" value="female" <?php if($row2['gender']=='female') { ?> checked <?php } ?>/> Female
        </div>
        <div class="col-sm-6 form-group">
          <label><b>Email:</b></label>
          <input type="text" class="form-control"  name="email"  readonly value="<?php echo $row2['email']; ?>" style="border:1px solid black;"/>
        
        </div>
        <div class="col-sm-6 form-group">
            
            <?php $cid=$row2['cid'];
            $query3="select * from tbl_college where cid='$cid'";
            $res3=mysqli_query($con,$query3);
            if($row3=mysqli_fetch_array($res3))
            {
              $collegename=$row3['college'];
            }
            
            ?>
                <label><b>College Name:</b>
                </label>
              <input type="text" class="form-control" readonly value="<?php echo $collegename;?>" style="border:1px solid black;"/>
             
              
            </div>
        <div class="col-sm-6 form-group">
          <label><b>Date of Birth:</b></label>
          <input type="text" class="form-control"  name="dob"  value="<?php echo $row2['dob']; ?>" style="border:1px solid black;"/>
        </div>
        <div class="col-sm-6 form-group">
          <label><b>Mobile Number:</b></label>
          <input type="text" class="form-control" name="mobile" value="<?php echo $row2['mobile']; ?>" style="border:1px solid black;"/>
        </div>

        <div class="col-sm-6 form-group">
          <label ><b>Address:</b></label>
          <input type="text" class="form-control" name="address" value="<?php echo $row2['address']; ?>" style="border:1px solid black;"/>
        </div>
        <div class="col-sm-6 form-group">
          <label><b>City:</b></label>
          <input type="text" class="form-control" name="city"  value="<?php echo $row2['city']; ?>" style="border:1px solid black;"/>
        
        </div>
        <div class="col-sm-6 form-group">
          <label><b>Pincode:</b></label>
          <input type="text" class="form-control" name="pincode" value="<?php echo $row2['pincode']; ?>" style="border:1px solid black;"/>
          
        </div>
        
        <div class="col-sm-6 form-group">
          <label><b>Course:</b></label>
          <input type="text" class="form-control" readonly value="<?php echo $row2['course']; ?>" style="border:1px solid black;"/>
        </div>
        <div class="col-sm-6 form-group">
            
            <?php $sid=$row2['sid'];
            $query4="select * from tbl_session where sid='$sid'";
            $res4=mysqli_query($con,$query4);
            if($row4=mysqli_fetch_array($res4))
            {
              $session=$row4['session'];
            }
            
            ?>
                <label><b>Session:</b>
                </label>
              <input type="text" class="form-control" readonly value="<?php echo $session;?>" style="border:1px solid black;"/>
             
              
            </div>

        <div class="col-sm-12 form-group mb-0 p-3 ">
          <center><button type="submit" class="btn btn-primary btn-lg" style="background-color:blueviolet">Update</button></center>
        </div>
       

      </div>
  </form>



<?php
}
include("mainuser.php");
?>