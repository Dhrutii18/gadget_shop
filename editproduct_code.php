<?php
include("connect.php");
$name=$_POST['name'];
$c_id=$_POST['c_id'];
$photo="product/".$_FILES['photo']['name'];
move_uploaded_file($_FILES['photo']['tmp_name'],$photo);
$detail=$_POST['detail'];
$price=$_POST['price'];
$p_id=$_POST['p_id'];

$q="update product set name='$name',c_id='$c_id',photo='$photo',detail='$detail',price='$price' where p_id=$p_id";

mysqli_query($cn,$q);
print $q;
header("Location:viewproduct.php");
?>