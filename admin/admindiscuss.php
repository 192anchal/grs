<?php
include("headeradmin.php");
include("connection.php");
$query="select * from tbl_ans";
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
    <div class="container-fluid">
       <center> <h3 style="color:blue; text-shadow:2px 0px 6px grey; text-decoration:underline;">User Discussion Forum</h3></center>
        <table class="table table-bordered ">
            <form action="">
                <tr><thead class="table-success">
                    <th>S.No</th>
                    <th>Question</th>
                    <th>Posted By</th>
                    <th>Answer</th>
                    <th>Delete</th>
                </thead></tr>
                <?php
                    $i=1;
                    while($row=mysqli_fetch_array($res))
                    {
                        $uid=$row['uid']
                        ?>
                <tr>
                    <td><?php echo $i; ?></td>
                   
                    <?php
                    $ques=$row['qid'];
                    $query3="select * from tbl_ques where qid='$ques'";
                    $res3=mysqli_query($con,$query3);
                    if($row3=mysqli_fetch_array($res3))
                    {
                        $question=$row3['question'];
                    }
                    ?>
                    <td>
                       <?php echo $question; ?>
                   </td>
                   
                    
                    <?php
                    $query4="select * from tbl_user where uid='$uid'";
                    $res4=mysqli_query($con,$query4);
                    if($row4=mysqli_fetch_array($res4))
                    {
                    $filename=$row4['profile_pic'];
                    $user=$row4['name'];
                    ?>
                    <td>
                     <img src="../student/<?php echo $filename; ?>" style="width:30px; height:30px; border-radius:50%;"; id="image"/>
                     <?php echo $user; ?>
                      </td>
                      <?php
                         $aid=$row['aid'];
                       $query5="select * from tbl_ans where aid='$aid'";
                       $res5=mysqli_query($con,$query5);
                       if($row5=mysqli_fetch_array($res5))
                       {
                        $answer=$row5['answer'];
                       }
                       ?>
                        <td><?php echo $answer; ?></td>
                        <td><a href="deleteDiscuss.php?id=<?php echo $row['qid'];?>">Delete</a></td>
                    <?php
                    }
                     ?>
                    
                    <?php
                    $i++;
                    }
                    ?>
            </form>
        </table>
    </div>
</body>
</html>






<?php
include("mainadmin.php");

?>