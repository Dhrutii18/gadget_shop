<?php
include("connect.php");
$cname=$_POST['cname'];
$c_id=$_POST['c_id'];

$q="update category set cname='$cname' where c_id=$c_id";

mysqli_query($cn,$q);
print $q;
header("Location:viewcategroy.php");
?>