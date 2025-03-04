
<?php
include("connect.php");
session_start();
$email=$_POST['email'];

$password=$_POST['password'];


$q="select * from admin where email='$email' and password='$password'";
$rs=mysqli_query($cn,$q);
if($row=mysqli_fetch_array($rs))
{
	$_SESSION['a_id']=$row['a_id'];
	header('location:add_category.php');
}
						

					else	{
								header('location:admin_login.php?msg=y');

						}








?>