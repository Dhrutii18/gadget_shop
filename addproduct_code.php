<?php
include("connect.php");
$name=$_POST['name'];
$c_id=$_POST['c_id'];
$photo="product/".$_FILES['photo']['name'];
move_uploaded_file($_FILES['photo']['tmp_name'],$photo);
$detail=$_POST['detail'];
$price=$_POST['price'];

$q="insert into product (name,c_id,photo,detail,price)values('$name','$c_id','$photo','$detail','$price')";
mysqli_query($cn,$q);
print $q;


header("Location:viewproduct.php");






?>