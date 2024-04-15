<?php
include("connection.php");
$check="select * from tbl_session";
$secres=mysqli_query($con,$check);
$clgquery="select * from tbl_college";
$clgres=mysqli_query($con,$clgquery);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.bundle.js"></script>
    <style>
      #login-ref{
        text-align:center;
        margin-bottom: 20px;
    
      }
       .back{
        margin:12px;
    }
    span a{
        color:royalblue;
        text-decoration:none;
        font-size:19px;
       color:blue;


    }
    #footer{
  position:fixed;
  bottom:0;
}
body{
        font-family:cambria;
background-color:#6ebaca;
}  
    .col-sm-4
    {
      color:black;
      font-size:17px;
    }
    </style>
</head>
<body>
  <div id="outer" class="container-fluid " >
  <div class="image text-center">
    <img src="image/77fae23198780d94189b84d2115662d6.png" alt="" width="10%" style="margin:10px;">
  </div>
    <h4 align="center" style="color:blue"class="">Grievance Redressal Portal</h4>
    <h5 align="center" class="">Student Registration</h5>
     <form action="regcode.php" method="post">
       <div class="row mt-3">
        <div class="col-sm-2"></div>
  <div class="col-sm-4 " >
    Enter Your Name:
    <input type="text" class="form-control" name="name" placeholder="Enter Your Name" required>
  </div>
  <div class="col-sm-4">
  Enter Your Father's name:
    <input type="text" class="form-control" name="fname" placeholder="Father's name" required >
  </div>
  <div class="col-sm-2"></div>

</div>
       <div class="row mt-3">
        <div class="col-sm-2"></div>
        <div class="col-sm-4">
  <div class="text-center d-flex mt-4">
  <span class="mt-1 ms-3">Gender</span>
    <div class="form-check mt-1 ms-4 ">
    
  <input class="form-check-input" type="radio" name="gen" value="male" id="flexRadioDefault1" required>
  
   Male

</div>
<div class="form-check mt-1  ms-4">
  <input class="form-check-input" type="radio" name="gen" value="female" id="flexRadioDefault2" required>
    Female
  
</div>
   </div>
  </div>
  
  <div class="col-sm-4">
  Enter Your email:
    <input type="Email" class="form-control" name="email" placeholder="Enter Email" required>
  </div>

  <div class="col-sm-2"></div>

</div>
       <div class="row mt-3">
        <div class="col-sm-2"></div>
  <div class="col-sm-4">
    Enter Your Password:
    <input type="password" class="form-control" name="pass" placeholder="Enter New Password" required>
  </div>
  <div class="col-sm-4">
    Confirm Your Password:
    <input type="password" class="form-control" name="cpass" placeholder="Confirm Password" required>
  </div>
  <div class="col-sm-2"></div>

</div>
       <div class="row mt-3">
        <div class="col-sm-2"></div>
        <div class="col-sm-4">
  Enter Your contact:
    <input type="number" class="form-control" name="mobile" placeholder="Enter your contact"required >
  </div>
  <div class="col-sm-4">
  Enter Your Date of Birth:
    <input type="date" class="form-control" name="dob" placeholder="Enter Your DOB"   required>
  </div>
  
  <div class="col-sm-2"></div>

</div>
<div class="row mt-3">
    <div class="col-sm-2"></div>
    <div class="col-sm-4">
    Enter Your Address:
     <div class="form-group"> 
     
  <textarea name="address" class="form-control" name="address" placeholder="Enter your Address" id="floatingTextarea" required cols="30" rows="1"></textarea> 
  
</div> 

    </div>
    <div class="col-sm-4 ">
      Select Your City:
    <select class="form-select" name="city" aria-label="Default select example">
  <option value="">--select City--</option>
  <option >Darbhanga</option>
  <option >Muzaffarpur</option>
  <option >Samastipur</option>
  <option >Madhubani</option>
  
  
</select>
    </div>
    <div class="col-sm-2"></div>
 </div>
 <div class="row mt-3">
    <div class="col-sm-2"></div>
    <div class="col-sm-4">
      Select Your College:
    <select class="form-select" name="college" aria-label="Default select example" required>
  <option value="">--select College--</option>
   <?php 
  while($clgrow=mysqli_fetch_array($clgres))
  {
  ?>
  <option value="<?php echo $clgrow['cid']?>"><?php echo $clgrow['college'];?></option>
  <?php
  }
  ?>
</select>
    </div>
    <div class="col-sm-4">
      Enter Your Pincode:
    <input type="number" name="pincode" class="form-control" placeholder="Enter Your Pin-code" required>
    </div>
    <div class="col-sm-2"></div>
 </div>
 
 <div class="row mt-3">
    <div class="col-sm-2"></div>
    <div class="col-sm-4  ">
      Select Your Course:
    <select class="form-select" name="course" aria-label="Default select example" required>
  <option value="">--select course--</option>
  <option >B.Sc</option>
  <option >B.A</option>
  <option >B.Com</option>
  <option >M.Sc</option> 
  <option >M.A</option>
  <option >M.Com</option>
  <option >M.Ba</option>
  <option >PHD</option>

</select>
    </div>
    <div class="col-sm-4">
      Select Your Session:
    <select class="form-select" name="session" aria-label="Default select example" required>
  <option value="">--select session--</option>
  <?php 
  while($secrow=mysqli_fetch_array($secres))
  {
  ?>
  <option value="<?php echo $secrow['sid']?>"><?php echo $secrow['session'];?></option>
  <?php
  }
  ?>
</select>
    </div>
    <div class="col-sm-2"></div>
 </div>
 <div class="row mt-4 text-center">
    <div class="col-sm-2"></div>
    <div class="col-sm-8 mb-2">
        <div class="d-grid gap-2 " style="place-items:center;">
        <input type="submit" value="Register "  class="btn btn-primary w-50 " />

        </div>
    </div>

    <div class="col-sm-2"></div>
 </div>
</form>
<div id="login-ref" style="height:50px;">
        <span class="back" ><a href="index.php"style="font-size:16px;">< Back to Home</a></span>
       <span class="back"> If you already registered/ <a href="studentlogin.php" style="font-size:16px;">Login ?</a></span>
  </div>
  <div class="row bg-dark text-center p-1 w-100  " id="footer">
  <!-- <span style="color:white;">Copyright © 2023 Designed & Devloped By <span style="color:blue">Anchal Prajapti</span></span> -->
</div> 
  </div>
  
</body>
</html>