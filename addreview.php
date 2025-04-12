<?php
    if(isset($_POST['p_id']))
        $p_id=$_POST['p_id'];
    if(isset($_POST['msg']))
        $msg=$_POST['msg'];
    $date = date("Y-m-d H:i:s");
    echo $msg;
    include("connect.php");
    
$q="insert into reviews(revdate,p_id,msg)values('$date','$p_id','$msg')";
$query=mysqli_query($cn,$q);
if($query)
    echo "success";
else
    echo "something went wrong";


?>