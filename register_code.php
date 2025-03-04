<?php
include("connect.php");

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$birthdate=$_POST['birthdate'];
$city=$_POST['city'];
$address=$_POST['address'];

$q="insert into user(name,email,password,birthdate,city,address)values('$name','$email','$password','$birthdate','$city','$address')";

mysqli_query($cn,$q);
print $q;
header("location:userlogin.php");


?>