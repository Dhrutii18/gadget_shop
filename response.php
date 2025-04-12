<!DOCTYPE html>
<html>
<head>
	<title>Cashfree - PG Response Details</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<h1 align="center">PG Response</h1>	

	<?php  
	
	session_start();
	
	// $reg_id=$_SESSION['u_id'];
		
		 $secretkey = "cfsk_ma_test_e820b20ac08dea13a950cbc21a112af6_89838c41";
		 $orderId = $_POST["orderId"];
		 $orderAmount = $_POST["orderAmount"];
		 $referenceId = $_POST["referenceId"];
		 $txStatus = $_POST["txStatus"];
		 $paymentMode = $_POST["paymentMode"];
		 $txMsg = $_POST["txMsg"];
		 $txTime = $_POST["txTime"];
		 $signature = $_POST["signature"];
		
		 $data = $orderId.$orderAmount.$referenceId.$txStatus.$paymentMode.$txMsg.$txTime;
		 $hash_hmac = hash_hmac('sha256', $data, $secretkey, true) ;
		 $computedSignature = base64_encode($hash_hmac);
		

		 if ($signature == $computedSignature) {
			
			// code here 
			

	 ?>
	<div class="container"> 
	<div class="panel panel-success">
	  <div class="panel-heading">Signature Verification Successful</div>
	  <div class="panel-body">
	  	<!-- <div class="container"> -->
	 		<table class="table table-hover">
			    <tbody>
			      <tr>
			        <td>Order ID</td>
			        <td><?php echo $orderId; ?></td>
			      </tr>
			      <tr>
			        <td>Order Amount</td>
			        <td><?php echo $orderAmount; ?></td>
			      </tr>
			      <tr>
			        <td>Reference ID</td>
			        <td><?php echo $referenceId; ?></td>
			      </tr>
			      <tr>
			        <td>Transaction Status</td>
			        <td><?php echo $txStatus; ?></td>
			      </tr>
			      <tr>
			        <td>Payment Mode </td>
			        <td><?php echo $paymentMode; ?></td>
			      </tr>
			      <tr>
			        <td>Message</td>
			        <td><?php echo $txMsg; ?></td>
			      </tr>
			      <tr>
			        <td>Transaction Time</td>
			        <td><?php echo $txTime; ?></td>
			      </tr>
			    </tbody>
			</table>
		<!-- </div> -->

	   </div>
	</div>
	</div>
	 <?php   
	  	} else {
			include("connect.php");
			$q= "SELECT * FROM payment_pending p JOIN user u ON p.reg_id = u.u_id";		
			$rs=mysqli_query($cn,$q);
			while($row=mysqli_fetch_array($rs))
			{
				$reg_id=$row['reg_id'];
				
				$p_id=$row['p_id'];
				$qty=$row['qty'];
				$name = $row['name'];
   				$city = $row['city'];
    			$address = $row['address'];
				$q="insert into ordermaster(name,city,address,p_id,qty,u_id)values('$name','$city','$address','$p_id','$qty','$reg_id')";
				mysqli_query($cn,$q);
			}
			$qd="DELETE FROM addtocart WHERE reg_id IN (SELECT reg_id FROM payment_pending)";
			mysqli_query($cn,$qd);
	        $qd="delete from payment_pending";
            mysqli_query($cn,$qd);
			
	 
	 ?>
	<div class="container"> 
	<div class="panel panel-danger">
	  <div class="panel-heading">Signature Verification failed</div>
	  <div class="panel-body">
	  	<!-- <div class="container"> -->
	 		<table class="table table-hover">
			    <tbody>
			      <tr>
			        <td>Order ID</td>
			        <td><?php echo $orderId; ?>
				

				</td>
			      </tr>
			      <tr>
			        <td>Order Amount</td>
			        <td><?php echo $orderAmount; ?></td>
			      </tr>
			      <tr>
			        <td>Reference ID</td>
			        <td><?php echo $referenceId; ?></td>
			      </tr>
			      <tr>
			        <td>Transaction Status</td>
			        <td><?php echo $txStatus; ?></td>
			      </tr>
			      <tr>
			        <td>Payment Mode </td>
			        <td><?php echo $paymentMode; ?></td>
			      </tr>
			      <tr>
			        <td>Message</td>
			        <td><?php echo $txMsg; ?></td>
			      </tr>
			      <tr>
			        <td>Transaction Time</td>
			        <td><?php echo $txTime; ?></td>
			      </tr>
				  <tr >
					<td colspan="2" align="center"><button style="padding: 10px 20px; background-color: #28a745; color: white; border: none; border-radius: 5px; cursor: pointer;"
    				onclick="window.location.href='index.php'"> Go to Home</td>
				  </tr>
			    </tbody>
			</table>
		<!-- </div> -->
	  </div>	
	</div>	
	</div>
	
	<?php	
	 	}
	 ?>

</body>
</html>



