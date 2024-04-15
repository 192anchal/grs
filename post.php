<?php
$qid=$_REQUEST['id'];
include("headeruser.php");
$query2="select * from tbl_user where email='$email'";
$res2=mysqli_query($con,$query2);
while($row2=mysqli_fetch_array($res2))
{
$filename=$row2['profile_pic'];
$name=$row2['name'];
 }
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
    <form  style="box-shadow:0px 0px 5px blueviolet; padding:20px; width: 400px; border-radius:20px; background-color:white;" action="answer.php" method="post"> 
<h2 style="color:blueviolet;  text-shadow:2px 0px 6px grey; text-decoration:underline;">Post Answer</h2> 
<input type="hidden" name="qid" value="<?php echo $qid; ?>"/>
<img src="student/<?php echo $filename; ?>" id="image" style="border-radius:50%; width:100px; height:100px;"/> 
<br/>
<h4 style="color:blueviolet;  text-shadow:2px 0px 6px grey; text-decoration:underline;"><?php echo $name;?></h4>
<b>Enter Post Answer</b>
<textarea name="ans" class="form-control" placeholder="Enter Post Answer" id="floatingTextarea" style="border:1px black solid;"  cols="30" rows="3"></textarea>
<input type="submit" style="background-color:blueviolet; padding:10px; margin-top:10px; color:white; border-radius: 10px; font-weight: 50px;">
</form>
<h5 ><a href="discuss.php" style="color:blueviolet;  text-shadow:2px 0px 6px grey; ">Back Now</a></h5>
</center>
</body>
</html>
<?php
include("mainuser.php"); 
?>