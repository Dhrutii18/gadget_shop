<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
?>
    <!-- //header -->
	<!-- inner banner -->
	<div class="ibanner_w3 pt-sm-5 pt-3">
		<h4 class="head_agileinfo text-center text-capitalize text-center pt-5">
	</div>
	
<!-- //inner banner -->
    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">User Registration</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->
    <!-- contact -->
    <section class="wthree-row pt-3 pb-sm-5 w3-contact">
        <div class="container py-sm-5 pb-5">
            <h5 class="head_agileinfo text-center text-capitalize pb-5">
                <span>U</span>ser Registration</h5>
            <div class="row contact-form pt-lg-5">
			<div class="col-lg-2"></div>
                <div class="col-lg-8 wthree-form-left">
                    <div class="contact-top1">
                        <form action="register_code.php" method="post" class="f-color"><form action="register_code.php" method="post" id="registrationForm" novalidate>
    <div class="form-group mb-3">
        <label for="name">Name</label>
        <input type="text" class="form-control" pattern="[a-zA-Z ]+" name="name" id="name" required>
        <div class="invalid-feedback">Please enter a valid name (letters and spaces only).</div>
    </div>

    <div class="form-group mb-3">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" id="email" required>
        <div class="invalid-feedback">Please enter a valid email address.</div>
    </div>

    <div class="form-group mb-3">
        <label for="password">Password (min 6 characters)</label>
        <input type="password" class="form-control" name="password" id="password" minlength="6" required>
        <div class="invalid-feedback">Password must be at least 6 characters long.</div>
    </div>

    <div class="form-group mb-3">
        <label for="confirm_password">Confirm Password</label>
        <input type="password" class="form-control" id="confirm_password" required>
        <div class="invalid-feedback" id="passwordMismatch">Passwords do not match.</div>
    </div>

    <div class="form-group mb-3">
        <label for="birthdate">Birthdate</label>
        <input type="date" class="form-control" name="birthdate" id="birthdate" required>
        <div class="invalid-feedback">Please enter your birthdate.</div>
    </div>

    <div class="form-group mb-3">
        <label for="city">City</label>
        <input type="text" class="form-control" pattern="[a-zA-Z ]+" name="city" id="city" required>
        <div class="invalid-feedback">City must only contain letters.</div>
    </div>

    <div class="form-group mb-4">
        <label for="address">Address</label>
        <textarea class="form-control" rows="3" name="address" id="address" required></textarea>
        <div class="invalid-feedback">Please enter your address.</div>
    </div>

    <button type="submit" class="btn btn-info btn-block">Submit</button>
    <div class="mt-3">
        <a href="userlogin.php">Click here for user login</a>
    </div>

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