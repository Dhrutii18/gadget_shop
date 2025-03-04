<?php
include("connect.php");
$p_id=$_POST['p_id'];
session_start();
$qty=$_POST['qty'];
$reg_id=$_SESSION['u_id'];
$q="insert into addtocart(p_id,reg_id,qty)values('$p_id','$reg_id','$qty')";
mysqli_query($cn,$q);
print $q;

header("location:vcart.php");
?>