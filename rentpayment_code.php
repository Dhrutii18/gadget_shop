
<?php
session_start();
$days=$_SESSION["days"];
$total=$_SESSION["total"];
include("connect.php");
$name=$_POST['name'];


$city=$_POST['city'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$u_id=$_SESSION['u_id'];
$start_date=$_SESSION['start_date'];
$end_date=$_SESSION['end_date'];
$q="select * from rentorder where u_id='$u_id'";
								$rs=mysqli_query($cn,$q);
								while($row=mysqli_fetch_array($rs))
								{
							$p_id=$row['p_id'];
							
							

$q="insert into rentmaster(p_id,cname,address,city,phone,u_id,start_date,end_date,days,total)values('$p_id','$name','$address','$city','$phone','$u_id','$start_date','$end_date','$days','$total')";
mysqli_query($cn,$q);
print $q;
								}
	$qd="delete from rentorder where u_id='$u_id'";
	mysqli_query($cn,$qd);


header("location:rentpayment.php?msg='y'");


?>