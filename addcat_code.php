<?php
include("connect.php");
$cname=$_POST['cname'];
$q="insert into category (cname)values('$cname')";
mysqli_query($cn,$q);
print $q;
header("Location:viewcategroy.php");

?>