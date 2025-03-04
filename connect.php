<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "gadget_db";

$cn = mysqli_connect($servername, $username,$password, $database,3307);
// echo "<pre>";print_r($cn);die;
if (!$cn) {
    die("Connection failed: " . mysqli_connect_error());
}else{
  //echo "work";
}
//   try {
//   $cn = new PDO("mysql:host=$servername;dbname=gadget_db", $username, $password);
//$cn = new PDO("mysql:host=localhost;port=3307;dbname=gadget_db", $username, $password);
//echo "hello";die;die;
  // set the PDO error mode to exception
  //$cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   echo "Connected successfully";
//} //catch(PDOException $e) {
  //echo "Connection failed: " . $e->getMessage();
//}
?>
