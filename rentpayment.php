
<?php

include("connect.php");


?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Fashion Hub Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <!-- shop css -->
    <link href="css/shop.css" type="text/css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- Owl-Carousel-CSS -->
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Elsie+Swash+Caps:400,900" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
    <!-- //online-fonts -->
</head>

<body>
    <!-- header -->
<?php 
include("menu.php");
$gtotal=intval($_SESSION['gtotal']);
$u_id = $_SESSION['u_id'];

$q="delete from rent_pending";
mysqli_query($cn,$q);
$q= "SELECT * FROM rentorder WHERE u_id = '$u_id'";
			$rs=mysqli_query($cn,$q);
			while($row=mysqli_fetch_array($rs))
			{
                $r_id=$row['r_id'];
				$p_id=$row['p_id'];
				$start_date=$row['start_date'];
                $end_date=$row['end_date'];
				$u_id=$row['u_id'];
        $q="insert into rent_pending(r_id,p_id,start_date,end_date,u_id)values('$r_id','$p_id','$start_date','$end_date','$u_id')";
				mysqli_query($cn,$q);
			}
?>
?>
	<!-- inner banner -->
	<div class="ibanner_w3 pt-sm-5 pt-3">
		<h4 class="head_agileinfo text-center text-capitalize text-center pt-5">
			<span></span></h4>
	</div>

<!-- //inner banner -->
    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Book</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->
    <!-- contact -->
    <section class="wthree-row pt-3 pb-sm-5 w3-contact">
        <div class="container py-sm-5 pb-5">
            <h5 class="head_agileinfo text-center text-capitalize pb-5">
                <span></span>Book Now</h5>
            <div class="row contact-form pt-lg-5">
			<div class="col-lg-2"></div>
                <div class="col-lg-8 wthree-form-left">
                    <div class="contact-top1">
                    <form id="redirectForm" method="post" action="rent_request.php">
       
       <div class="form-group">
         <label>Rent ID:</label><br>
         <input class="form-control" name="orderId" value="<?php echo"RENT".rand(111,999);?>"/>
       </div>
       <div class="form-group">
         <label>Rent Amount:</label><br>
         <input class="form-control" name="orderAmount" value="<?php echo $gtotal;?>"/>
       </div>
      
       <div class="form-group">
         <label>Rent Note:</label><br>
         <input class="form-control" name="orderNote" placeholder="Enter Order Note here (Ex. Test order)"/>
       </div>    
       <div class="form-group">
         <label>Name:</label><br>
         <input class="form-control" name="customerName" placeholder="Enter your name here (Ex. John Doe)"/>
       </div>
       <div class="form-group">
         <label>Email:</label><br>
         <input class="form-control" name="customerEmail" placeholder="Enter your email address here (Ex. Johndoe@test.com)"/>
       </div>
       <div class="form-group">
         <label>Phone:</label><br>
         <input class="form-control" name="customerPhone" placeholder="Enter your phone number here (Ex. 9999999999)"/>
       </div>
      
       <input type="hidden" class="form-control" name="orderCurrency" value="INR" placeholder="Enter Currency here (Ex. INR)"/>
         <input type="hidden" class="form-control" name="returnUrl" value="http://localhost/gadget_shop/rent_response.php"/>
           <input type="hidden" class="form-control" name="appId" value="TEST1041276579bf61c30bb20b3d390e56721401" />
         <input type="hidden" class="form-control" name="notifyUrl" value="http://localhost/gadget_shop/rent_response.php"/>
      
       <button type="submit" class="btn btn-primary btn-block" value="Pay">Submit</button>
       <br> 
       <br>
     </form>
                    </div>
                    <!--  //contact form grid ends here -->
                </div>
                <!-- contact details -->
                
            </div>
            <!-- //contact details container -->
        </div>
       <?php
	   include("footer.php")
	   ?>