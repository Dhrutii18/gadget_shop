<?php
include("aheader.php");
include("connect.php");

if(isset($_GET['c_id']))
{
	$c_id=$_GET['c_id'];
	$qd="delete from category where c_id='$c_id'";
	mysqli_query($cn,$qd);
}
?>
<!-- //inner banner -->
    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Category</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->
    <!-- contact -->
    <section class="wthree-row pt-3 pb-sm-5 w3-contact">
        <div class="container py-sm-5 pb-5">
            <h5 class="head_agileinfo text-center text-capitalize pb-5">
                <span>A</span>dmin Home</h5>
            <div class="row contact-form pt-lg-5">
		       <div class="col-lg-3 wthree-form-left">
                    Total Category
                    <br>
                    <?php 
                    $q="Select * from category";
                    $rs=mysqli_query($cn,$q);
                    $cat=mysqli_num_rows($rs);
                    print $cat;
                    ?>
                </div>
                <div class="col-lg-3 wthree-form-left">
                    Total Product
                    <br>
                    <?php 
                    $qp="Select * from category";
                    $rsp=mysqli_query($cn,$qp);
                    $product=mysqli_num_rows($rsp);
                    print $product;
                    ?>
                </div>
                <div class="col-lg-3 wthree-form-left">
                    Total User
                    <br>
                    <?php 
                    $qu="Select * from user";
                    $rsu=mysqli_query($cn,$qu);
                    $user=mysqli_num_rows($rsu);
                    print $user;
                    ?>
                </div>
                <div class="col-lg-3 wthree-form-left">
                    Total Order
                    <br>
                    <?php 
                    $qo="Select * from ordermaster";
                    $rso=mysqli_query($cn,$qo);
                    $order=mysqli_num_rows($rso);
                    print $order;
                    ?>
                </div>
                <!-- contact details -->
                
            </div>
            <!-- //contact details container -->
        </div>
       <?php
	   include("footer.php")
	   ?>