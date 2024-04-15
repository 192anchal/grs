<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login Page</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.bundle.js"></script>


    <style>
 body{
        font-family:cambria;
background-color:#6ebaca;
        
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
.col-sm-4
    {
      color:black;
      font-size:17px;
    }
    </style>
    <script>
      
      function showpass(){
        var pass=document.getElementById('pass');
      var spass = document.getElementById('spass');
      if(pass.type=='password'){
        pass.type='text';
      }else{
        pass.type='password';
      }
      }
    </script>
    <body>
  <div id="outer" class="container-fluid " >
  <div class="image text-center">
    <img src="image/77fae23198780d94189b84d2115662d6.png" alt="" width="10%" style="margin:20px;">
  </div>
  <h4 align="center" style="color:blue"class="">Grievance Redressal Portal</h4>
    <h5 align="center" class="">Student Login</h5>
    <form action="studentcode.php" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <div class="row mt-4">
        <div class="col-sm-2"></div>
  <div class="col-sm-4">
  Enter Your email:
    <input type="Email" class="form-control" name="email" placeholder="Enter Email" required>
  </div>
  <div class="col-sm-4">
  Enter Your Password:
    <input type="password" class="form-control" name="password" placeholder="Enter your Password" id="pass" required>
    <input type="checkbox" onclick="showpass();" id="spass"><span>  Show Password</span>
  
  </div>
  <div class="col-sm-2"></div>
  <div class="row mt-4 text-center">
    <div class="col-sm-2"></div>
    <div class="col-sm-8 mb-2">
        <div class="d-grid gap-2 " style="place-items:center;">
        <input type="submit" value="Login" class="btn btn-primary w-50 " />

    </form>

</div>
    <div id="login-ref" style="height:50px; margin-top:20px">
       <span class="back">Don’t have an account/ <a href="registration.php" style="font-size:16px;">Sign Up ?</a></span>
       <br/>
       <span class="back" ><a href="index.php"style="font-size:16px;"> Back to Home</a></span>
  </div>
  
  </div>
  <div class="conatiner-fluid">
  <div class="row bg-dark text-center p-0 w-100"  id="footer">
  <span style="color:white;">Copyright © 2023 Designed & Developed By <span style="color:blue">Anchal Prajapati</span></span>
</div>
  </div>
</body>
</html>