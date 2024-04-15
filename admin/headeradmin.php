<?php
session_start();
if($_SESSION['admin']=="")
{
session_destroy();
header("Location:../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | GRS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  

    <link rel="stylesheet" href="../css/bootstrap.css">
    <script src="../js/bootstrap.bundle.js"></script>
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
    background-color:blueviolet;
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
    color: #fff;
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
    padding: 1rem;
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
    background:blue;
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
#footer{
  position:fixed;
  bottom:0;

}

</style>
</head>
<body>
    <div class="slidebar">
        <div class="logo"></div>
        <ul class="menu">
        <li class="active">
                <a href="dashboard.php">
                <i class="fa-solid fa-table-columns"></i>   
                    <h5><span><b>Dashboard</b></span></h5>
                </a>
            </li>
            <hr/>
            <li>
                <a href="college.php">
                <i class="fa-solid fa-building-columns">
                   </i>
                    <span>College<br/> Managaement</span>
                </a>
            </li>
            <li>
                <a href="session.php">
                 <i class="fas fa-tachometer-alt"></i>
                    <span>Session Managaement</span>
                </a>
            </li>
            <li>
                <a href="complaintype.php">
                <i class="fa-solid fa-file-pen"></i>
                <span>Complain <br/>Type </span>
                </a>
            </li>
            <div class="college">
            <li>
            
            
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                               
                           <i class="fas fa-briefcase"></i>
                   Complain<br/> Managaement
                 </a>
                 <ul class="dropdown-menu">
                   <li><a class="dropdown-item text-dark p-0" href="notprocesyet.php">Not Prosesses Yet</a></li>
                   <li><a class="dropdown-item text-dark p-0" href="pendingcomplain.php">Pending Complaint</a></li>
                   <li><a class="dropdown-item text-dark p-0" href="closecomplain.php">Closed Complaint</a></li>
                   <li><a class="dropdown-item text-dark p-0" href="report.php">Download Report</a></li>
                 </ul>
       
                         
                      
                   </li>
            </div>
            <li>
                <a href="usershow.php">
                <i class="fas fa-user"></i>
                    <span>User<br/> Managaement</span>
                </a>
            </li>
            <li>
                <a href="blockshowuser.php">
                <i class="fa-sharp fa-solid fa-ban"></i>
                    <span>Blocked<br/> User</span>
                </a>
            </li>
            <li>
                <a href="admindiscuss.php">
                <i class="fa-sharp fa-solid fa-indent"></i>
                    <span>Discussion <br/>Forum</span>
                </a>
            </li>
            <li>
                <a href="changepass.php">
                    <i class="fas fa-question-circle"></i>
                    <span>Change <br/>Password</span>
                </a>
            </li>
            <li>
                <a href="logout.php">
                <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </li>
           
           
        </ul>
    </div>


    <div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <span  class="text-light" style="font-family:sans-serif;">Admin</span>
                <h2 class="text-light" >Dashboard</h2>
            </div>
            <div class="user--info">
                <h5 style="color:white;">

                <?php
                date_default_timezone_set('Asia/Kolkata');
                $currentTime=date('d-m-y h:i:s A');
                echo $currentTime;
                echo "|";
                
                echo $_SESSION['admin'];
                
                ?>
                </h5>
               
                <div class="dropdown">
                
                <img src="../image/user-icon-person-icon-client-symbol-login-head-sign-icon-design-vector-removebg-preview.png" alt=""  data-bs-toggle="dropdown" aria-expanded="false"/>
                       
                    
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="changepass.php">Change Password</a></li>
                      <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                  </div> 
            </div>
        </div>
        <!-- new section  -->
