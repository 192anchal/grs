


<?php 
$qid=$_REQUEST['id'];
include("connection.php");
include("headeruser.php");
$query="select * from tbl_ans where qid='$qid'";
$res=mysqli_query($con,$query);
$query2="select * from tbl_ques where qid='$qid'";
$res2=mysqli_query($con,$query2);
if($row2=mysqli_fetch_array($res2))
    {
        echo "Question:-";
        echo $row2['question'];
        echo "<br/>";
    }
while($row=mysqli_fetch_array($res))
{
    echo "Answer:-";
echo $row['answer'];
echo "<br/>";
}
?>
<?php 
include("mainuser.php");
?>