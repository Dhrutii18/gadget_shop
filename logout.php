<?php
session_start();
if(isset($_SESSION['u_id']))
{
	session_unset();
	session_destroy();
	header("location:userlogin.php");
}
else
{
	session_unset();
	session_destroy();
	header("location:admin_login.php");
	
}

?>