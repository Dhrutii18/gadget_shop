<?php
include("connect.php");
session_start();
$p_id=$_POST['p_id'];
$start_date=$_POST['start_date'];
$end_date=$_POST['end_date'];
$u_id=$_SESSION['u_id'];
$q="insert into rentorder(p_id,start_date,end_date,u_id)values('$p_id','$start_date','$end_date','$u_id')";
mysqli_query($cn,$q);
print $q;

header("location:bookrent.php");
?>