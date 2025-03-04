<?php
include("connect.php");
$name=$_POST['name'];
$email=$_POST['email'];
$msg=$_POST['msg'];
$date=date("Y-m-d");
$q="insert into feedback(name,email,msg,date) values('$name','$email','$msg','$date')";
mysqli_query($cn,$q);
header("location:vfeeback.php?msg=y");
?>