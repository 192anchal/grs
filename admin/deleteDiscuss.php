<?php


include("connection.php");
$id=$_REQUEST['id'];
// echo $id;
$query="delete from tbl_ans where qid='$id'";
mysqli_query($con,$query);
$query2="delete from tbl_ques where qid='$id'";
mysqli_query($con,$query2);
echo "<script>alert('Chat deleted Successfuly'); window.location.href='admindiscuss.php'</script>";
?>