
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
    <link href="css/checkout.css" type="text/css" rel="stylesheet" media="all">
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
<?php include("menu.php");?>

<?php

  

include("connect.php");


$u_id = intval($_SESSION['u_id']); 
if(isset($_GET['a_id']))
{
	$a_id=$_GET['a_id'];
	$qd="delete from addtocart where a_id='$a_id'";
	mysqli_query($cn,$qd);
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
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">My Cart</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->
    <!--checkout-->
    <section class="checkout_wthree py-sm-5 py-3">
        <div class="container">
            <div class="check_w3ls">
                
				<div class="checkout-right">
                <?php
						$c=0;
						$total=1;
						$ordertotal=0;
						$q="select a.*,p.* from addtocart a , product p where p.p_id=a.p_id and a.reg_id=$u_id";	
                        $rs=mysqli_query($cn,$q);		
                        if (mysqli_num_rows($rs) > 0) {	
                            ?>
                    <table class="timetable_sub">
                        <thead>
                            <tr>
                                <th>SL No. 	</th>
                                <th>Product</th>
                                <th>Product Name</th>
                                <th>Quantity</th>

                                <th>Price</th>
								<th>Total</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody>
							<?php 
                        	while($row=mysqli_fetch_array($rs))
								{
									$total=$row['price'] * $row['qty'];
									$ordertotal =$ordertotal + $total;
							$c++;
						?>
                            <tr class="rem1">
                                <td class="invert"><?php print $c;?></td>
                                <td class="invert-image">
                                    <a href="single_product.html">
                                        <img src="<?php print $row['photo']?>" alt=" " class="img-responsive">
                                    </a>
                                </td>
                                <td class="invert"><?php print $row['name']?></td>
                                <td class="invert"><?php print $row['qty']?></td>                                                                            </td>
                               

                                <td class="invert"><?php print $row['price']?></td>
                                <td class="invert"><?php print $total?></td>
                                <td class="invert">
                                    
									<a href="vcart.php?a_id=<?php print $row['a_id'];?>" class="btn btn-danger">  Delete </a>
                                </td>
							</tr>
							
						
						<?php
                        $_SESSION['ordertotal']=$ordertotal;

						}
						?>
						<tr>
							<td colspan="5"></td>
							<td><?php print $ordertotal;?></td>
							<td></td>
						</tr>
                        
						<tr>
							
							<td colspan="7" align="center">
							
							<a href="vorder.php" class="btn btn-primary">order</a>
							</td>
							
							
							</tr>
                            
                      
                        </tbody>
                    </table>
                    <?php
                }
                else{

                                    ?> 
                   <h3 class="text-center">Cart Empty</h3>
                    <?php
                                }
                                ?>                     
                                           
                                           
                       </div>
                <?php
					include("footer.php");
				?>
    <!-- //footer -->
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
        $(document).ready(function () {
            $('ul li.dropdown').hover(function () {
                $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(200);
            }, function () {
                $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(200);
            });
        });
    </script>
    <!-- //smooth dropdown -->
    <!-- script for password match -->
    <script>
        window.onload = function () {
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
    <!-- cart-js -->
    <script src="js/minicart.js"></script>
    <script>
        hub.render();

        hub.cart.on('new_checkout', function (evt) {
            var items, len, i;

            if (this.subtotal() > 0) {
                items = this.items();

                for (i = 0, len = items.length; i < len; i++) {}
            }
        });
    </script>
    <!-- //cart-js -->
    <!--quantity-->
    <script>
        $('.value-plus').on('click', function () {
            var divUpd = $(this).parent().find('.value'),
                newVal = parseInt(divUpd.text(), 10) + 1;
            divUpd.text(newVal);
        });

        $('.value-minus').on('click', function () {
            var divUpd = $(this).parent().find('.value'),
                newVal = parseInt(divUpd.text(), 10) - 1;
            if (newVal >= 1) divUpd.text(newVal);
        });
    </script>
    <!--quantity-->
    <!-- FadeOut-Script -->
    <script>
        $(document).ready(function (c) {
            $('.close1').on('click', function (c) {
                $('.rem1').fadeOut('slow', function (c) {
                    $('.rem1').remove();
                });
            });
        });
    </script>
    <script>
        $(document).ready(function (c) {
            $('.close2').on('click', function (c) {
                $('.rem2').fadeOut('slow', function (c) {
                    $('.rem2').remove();
                });
            });
        });
    </script>
    <script>
        $(document).ready(function (c) {
            $('.close3').on('click', function (c) {
                $('.rem3').fadeOut('slow', function (c) {
                    $('.rem3').remove();
                });
            });
        });
    </script>
    <!--// FadeOut-Script -->

    <!-- start-smooth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
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
        $(document).ready(function () {
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

</html>