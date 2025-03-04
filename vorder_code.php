
<?php
session_start();
include("connect.php");
$name=$_POST['name'];
$city=$_POST['city'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$reg_id=$_SESSION['u_id'];

$q="select * from addtocart where reg_id='$reg_id'";
								$rs=mysqli_query($cn,$q);
								while($row=mysqli_fetch_array($rs))
								{
							$p_id=$row['p_id'];
							$qty=$row['qty'];
							

$q="insert into ordermaster(name,city,address,phone,p_id,qty,u_id)values('$name','$city','$address','$phone','$p_id','$qty','$reg_id')";
mysqli_query($cn,$q);
print $q;
								}
	$qd="delete from addtocart where reg_id='$reg_id'";
	mysqli_query($cn,$qd);


header("location:vorder.php?msg='y'");


?>