<?php
session_start();
if($_SESSION['user']=="")
{
session_destroy();
header("Location:index.php");
}
$email=$_SESSION['user'];
include("connection.php");
$query="select * from tbl_user where email='$email'";
$res=mysqli_query($con,$query);
while($row=mysqli_fetch_array($res))
{
$filename=$row['profile_pic'];
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard | GRS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  

    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.bundle.js"></script>
<style>
*{
    margin: 0%;
    padding: 0%;
    border: none;
    outline: none;
    box-sizing:border-box;
}
body{
    display: flex;
    font-family:calibri;
}
.slidebar{
    position: sticky;
    top: 0%;
    bottom: 0;
    left: 0;
    width:78px;
    height: 100vh;
    padding: 0 1.5rem;
    color: #fff;
    overflow: hidden;
    transition:all 0.5s linnear;
    background-color:#147eb3;
   
}
#footer{
  position:fixed;
  bottom:0;

}
.slidebar:hover{
    width:270px;
    transition: 0.5s;
}

.logo{
    
    padding: 12px;
}
.menu{
    height: 88%;
    list-style: none;
    position: relative;
    padding: 0%;
}
.menu li{
    padding: 0.5rem;
    margin: 8px 0;
    border-radius: 8px;
    transition: all 0.5s ease-in-out;
}

.menu a {
    color:white;
    font-size: 14px;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 1.5rem;
}
.menu a i{
    font-size: 1.2rem;
}
.menu a span{
    overflow: hidden;
}
.logout{
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100;
}
.main--content{
    position: relative;
    background: #ebe9e9;
    width: 100%;
    padding: 0.6rem;
}
.header--wrapper img{
    width: 40px;
    height: 40px;
    cursor:pointer;
    border-radius: 50%;
}
.header--wrapper{
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    
    background:blueviolet;
    border-radius: 10px;
    padding: 10px 2rem;
    margin-bottom: 1rem;
}
.header--title{
    color: rgba(113, 99, 186, 255);
}
.user--info{
    display: flex;
    align-items: center;
    gap:1rem;
}

</style>
</head>
<body>
    <div class="slidebar">
        <div class="logo"></div>
        <ul class="menu">
        <li class="active">
                <a href="userdashboard.php">
                <i class="fa-solid fa-table-columns"></i>   
                    <h5><span><b>Dashboard</b></span></h5>
                </a>
            </li>
            <hr style="color:black;"/>
            <li>
                <a href="update.php">
                <i class="fas fa-user"></i>
                    <span>Update <br/>Profile</span>
                </a>
            </li>
            <li>
                <a href="pic.php">
                <i class="fa-solid fa-image"></i>
                    <span>Upload <br/>Pic</span>
                </a>
            </li>
            <li>
                <a href="addcomplain.php">
                <i class="fa-sharp fa-solid fa-plus"></i>
                    <span>Add <br/>Complain</span>
                </a>
            </li>
            <li>
                <a href="mycomplain.php">
                <i class="fa-solid fa-file-pen"></i>
                <span>My <br/>Complains</span>
                </a>
            </li>
            
            <li>
                <a href="closecomplain.php">
                <i class="fa-sharp fa-solid fa-xmark"></i>
                    <span>Close <br/>Complains</span>
                </a>
            </li>
            <li>
                <a href="discuss.php">
                <i class="fa-solid fa-chess-board"></i>
                    <span>Discussion <br/>Board</span>
                </a>
            </li>
            <li>
                <a href="userchangepass.php">
                    <i class="fas fa-question-circle"></i>
                    <span>Change <br/>Password</span>
                </a>
            </li>
            

            <li>
                <a href="studentlogout.php">
                <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </li>
           
           
        </ul>
    </div>


    <div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <span  class="text-light" style="font-family:sans-serif;">Student</span>
                <h2 class="text-light" >Dashboard</h2>
            </div>
            <div class="user--info">
                <h5 style="color:#fff">

                <?php
                date_default_timezone_set('Asia/Kolkata');
                $currentTime=date('d-m-y h:i:s A');
                echo $currentTime;
                echo "|";
                echo $_SESSION['user'];
                ?>
            
                </h5>
               
                <div class="dropdown">
                
                <img src="student/<?php echo $filename; ?>" id="image" alt=""  data-bs-toggle="dropdown" aria-expanded="false"/>
                       
                    
                    <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                      <li><a class="dropdown-item" href="userchangepass.php">Change Password</a></li><hr/>
                      <li><a class="dropdown-item" href="studentlogout.php">Logout</a></li>
                    </ul>
                  </div> 
            </div>
        </div>
        <!-- new section  -->
