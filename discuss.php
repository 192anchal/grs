<?php
include("connection.php");
include("headeruser.php");
$query="select * from tbl_ques";
$res=mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
    <form  style="box-shadow:0px 0px 5px blueviolet; padding:20px; width: 400px; border-radius:20px; background-color:white;" action="ques.php" method="post"> 
<h2 style="color:blueviolet;  text-shadow:2px 0px 6px grey; text-decoration:underline;">Add Question</h2>   <br/>
<b>Enter Your Question</b>
<textarea name="ques" class="form-control" placeholder="Enter your Question" id="floatingTextarea" style="border:1px black solid;"  cols="30" rows="3"></textarea>
<input type="submit" style="background-color:blueviolet; padding:10px; margin-top:10px; color:white; border-radius: 10px; font-weight: 50px;">
</form>
</center>

<br/><br/>
    <table class="table table-bordered table-hover text-center p-4">
        <tr>
            <thead class="table-primary">
            <th>S.No</th>
            <th>Question</th>
            <th>Post By</th>
            <th>Post Answer</th>
            <th>View Answer</th>
            </thead>
        </tr>
        <?php
        $a=1;
        while($row=mysqli_fetch_array($res)) {
        ?>
         <tr>
            <td><?php echo $a?></td>
            <td><?php echo $row['question'];?></td>
            <?php  $uid=$row['uid'];
            $query4="select * from tbl_user where uid='$uid'";
            $res4=mysqli_query($con,$query4);
            if($row4=mysqli_fetch_array($res4))
            {
                $name=$row4['name'];
                $filename=$row4['profile_pic'];
            }
            
            ?>
            <td> <?php echo $name ?><br/><img src="student/<?php echo $filename;?>" style="height:40px; width:40px; border-radius:50%;"/></td>
            <td><a href="post.php?id=<?php echo $row['qid'];?>" style="text-decoration: none;"><i class="fa-solid fa-envelope-circle-check fa-xl"></i></a></td>
            <td><a href="view.php?id=<?php echo $row['qid'];?>" style="text-decoration: none;"><i class="fa-solid fa-users-viewfinder fa-xl"></i></a></td>
         </tr>
        <?php
        $a++;
        }
        ?>
    </table>

</body>
</html>
<?php 
include("mainuser.php");
?>