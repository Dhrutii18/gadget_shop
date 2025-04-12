<!DOCTYPE html>
<html lang="zxx">
<?php

include("connect.php");


?>

<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <meta name="keywords" content="Fashion Hub Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
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
    <!-- Owl-Carousel-CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
    <!-- flexslider-css -->
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

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
    <?php
    include("menu.php");

    ?>


    <?php
    if (!isset($_SESSION['u_id'])) {
        header("location:userlogin.php");
    }

    ?>

    <!-- //header -->
    <!-- inner banner -->
    <div class="ibanner_w3 pt-sm-5 pt-3">
        <h4 class="head_agileinfo text-center text-capitalize text-center pt-5">
        </h4>
    </div>
    <!-- //inner banner -->
    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="#">Product</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Single Product</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->

    <?php
    ?>
    <!-- Single -->
    <div class="innerf-pages section py-5">
        <div class="container">
            <div class="row my-sm-5">

                <?php
                $p_id = $_GET['p_id'];
                $q = "select * from product where p_id='$p_id'";
                $rs = mysqli_query($cn, $q);
                while ($row = mysqli_fetch_array($rs)) {

                ?>
                    <div class="col-lg-4 single-right-left">
                        <div class="grid images_3_of_2">
                            <div class="flexslider1">
                                <ul class="slides">
                                    <li data-thumb="images/mff1.jpg">
                                        <div class="thumb-image">
                                            <img src="<?php print $row['photo']; ?>" style="width:250px;height:250px" data-imagezoom="true" alt=" " class="img-fluid">
                                        </div>
                                    </li>

                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-8 mt-lg-0 mt-5 single-right-left simpleCart_shelfItem">
                        <h3><?php print $row['name']; ?>
                        </h3>
                        <div class="caption">
                            <div class="clearfix"> </div>
                            <h3>
                                <?php print "Rent Rs. ".$row['rent']; ?></h3>
                        </div>
                        <div class="desc_single">
                            <h5>Description</h5>
                            <p><?php print $row['detail']; ?></p>
                        </div>
                        <div class="d-sm-flex justify-content-between">
                            <div class="occasional">

                            </div>

                        </div>
                        <div class="description">
                            <form action="bookrent_code.php" method="post">
                                <input type="hidden" name="p_id" value="<?php print $p_id; ?>">
                                <span>Start Date</span>
                                <input type="date" placeholder="start date" name="start_date" required>
                                <span>End Date</span> 
                                <input type="date" placeholder="End date" name="end_date" onfocus="(this.type='date')" required>
                                <input type="submit" value="Submit" name="btn" class="btn">

                            </form>
                        </div>
                    <?php
                }
                    ?>

                    </div>
            </div>
        </div>
         
        <!-- reviews -->
        <div class="container">
            <div class="row mb-3">
                <div class="col-sm-6">
                 <h5>Reviews</h5>
                 <?php
                     $q = "select * from reviews where p_id='$p_id'";
                     $data = mysqli_query($cn, $q);
                     while ($row = mysqli_fetch_array($data)) { ?>
                        <p class="py-2"><?php print $row['msg'];?></p>
                        <?php
                        }
                     
                ?>
                </div>
                <div class="col-sm-6">
                    <h5>write review</h5>
                    <form method="post" class="f-color">
                            <input type="hidden" name="p_id" id="p_id" value="<?php echo $p_id;?>">
                            <div class="form-group">
                                <!-- <label for="contactusername">Email</label> -->
                                <textarea class="form-control" name="msg" id="msg" required></textarea>
                            </div>
                            
                            <button type="submit" id="review" name="review" class="btn btn-info btn-block"><h4>Submit</h4></button>
						</form> 
                </div>
                
            </div>
    </div>
    <!-- /new_arrivals -->
    <!--// Single -->
    <?php
    include("footer.php");

    ?> <!-- //footer -->
    <!-- sign up Modal -->
    <div class="modal fade" id="myModal_btn" tabindex="-1" role="dialog" aria-labelledby="myModal_btn" aria-hidden="true">
        <div class="agilemodal-dialog modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Register Now</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body pt-3 pb-5 px-sm-5">
                    <div class="row">
                        <div class="col-md-6 align-self-center">
                            <img src="images/p3.png" class="img-fluid" alt="login_image" />
                        </div>
                        <div class="col-md-6">
                            <form action="#" method="post">
                                <div class="form-group">
                                    <label for="recipient-name1" class="col-form-label">Your Name</label>
                                    <input type="text" class="form-control" placeholder=" " name="Name" id="recipient-name1" required="">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-email" class="col-form-label">Email</label>
                                    <input type="email" class="form-control" placeholder=" " name="Email" id="recipient-email" required="">
                                </div>
                                <div class="form-group">
                                    <label for="password1" class="col-form-label">Password</label>
                                    <input type="password" class="form-control" placeholder=" " name="Password" id="password1" required="">
                                </div>
                                <div class="form-group">
                                    <label for="password2" class="col-form-label">Confirm Password</label>
                                    <input type="password" class="form-control" placeholder=" " name="Confirm Password" id="password2" required="">
                                </div>
                                <div class="sub-w3l">
                                    <div class="sub-agile">
                                        <input type="checkbox" id="brand2" value="">
                                        <label for="brand2" class="mb-3">
                                            <span></span>I Accept to the Terms & Conditions</label>
                                    </div>
                                </div>
                                <div class="right-w3l">
                                    <input type="submit" class="form-control" value="Register">
                                </div>
                            </form>
                            <p class="text-center mt-3">Already a member?
                                <a href="#" data-toggle="modal" data-target="#exampleModal1" class="text-dark login_btn">
                                    Login Now</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //signup modal -->
    <!-- signin Modal -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModal1" aria-hidden="true">
        <div class="agilemodal-dialog modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body  pt-3 pb-5 px-sm-5">
                    <div class="row">
                        <div class="col-md-6 align-self-center">
                            <img src="images/p3.png" class="img-fluid" alt="login_image" />
                        </div>
                        <div class="col-md-6">
                            <form action="#" method="post">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Your Name</label>
                                    <input type="text" class="form-control" placeholder=" " name="Name" id="recipient-name" required="">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Password</label>
                                    <input type="password" class="form-control" placeholder=" " name="Password" required="">
                                </div>
                                <div class="right-w3l">
                                    <input type="submit" class="form-control" value="Login">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- signin Modal -->
    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!-- smooth dropdown -->
    <script>
        $(document).ready(function() {
            $('ul li.dropdown').hover(function() {
                $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(200);
            }, function() {
                $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(200);
            });

            
        });
    </script>
   
    <script>
    $(document).ready(function() {
        $("#review").click(function() {
                var msg=$("#msg").val();
                var p_id=$("#p_id").val();
                console.log(p_id);
                $.ajax({
                url: "addreview.php",
                type: "POST",
            data: {p_id:p_id, msg:msg},
            success: function (result) {
            console.log("success");
            // window.location = "welcome.php";
    }
});    
            }); 

    });
    </script>
    <!-- //smooth dropdown -->
    <!-- script for password match -->
    <script>
        window.onload = function() {
            document.getElementById("password1").onchange = validatePassword;
            document.getElementById("password2").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("password2").value;
            var pass1 = document.getElementById("password1").value;
            if (pass1 != pass2)
                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("password2").setCustomValidity('');
            //empty string means no validation error
        }
    </script>
    <!-- script for password match -->

    <!-- FlexSlider -->
    <script src="js/jquery.flexslider.js"></script>
    <script>
        // Can also be used with $(document).ready()
        $(window).load(function() {
            $('.flexslider1').flexslider({
                animation: "slide",
                controlNav: "thumbnails"
            });
        });
    </script>
    <!-- //FlexSlider-->
    <!-- Responsiveslides -->
    <script src="js/responsiveslides.min.js"></script>
    <script>
        // You can also use "$(window).load(function() {"
        $(function() {
            // Slideshow 4
            $("#slider3").responsiveSlides({
                auto: false,
                pager: true,
                nav: false,
                speed: 500,
                namespace: "callbacks",
                before: function() {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function() {
                    $('.events').append("<li>after event fired.</li>");
                }
            });

        });
    </script>
    <!-- // Responsiveslides -->
    <!-- cart-js -->
    <script src="js/minicart.js"></script>
    <script>
        hub.render();

        hub.cart.on('new_checkout', function(evt) {
            var items, len, i;

            if (this.subtotal() > 0) {
                items = this.items();

                for (i = 0, len = items.length; i < len; i++) {}
            }
        });
    </script>
    <!-- //cart-js -->
    <!-- zoom -->
    <script src="js/imagezoom.js"></script>
    <!-- zoom-->

    <!-- start-smooth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function() {
            /*
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
            };
            */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <script src="js/SmoothScroll.min.js"></script>
    <!-- //smooth-scrolling-of-move-up -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>

</html>