<?php
include("aheader.php");
include("connect.php");
?>
<!-- //inner banner -->
    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Order</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->
    <!-- contact -->
    <section class="wthree-row pt-3 pb-sm-5 w3-contact">
        <div class="container py-sm-5 pb-5">
            <h5 class="head_agileinfo text-center text-capitalize pb-5">
                <span>V</span>iew Order</h5>
            <div class="row contact-form pt-lg-5">
			<div class="col-lg-2"></div>
                <div class="col-lg-8 wthree-form-left">
                    <div class="contact-top1">
                        <table class="table">
							<tr>
							<td>Product Details</td>
							<td>Quntity</td>
							<td>name</td>
							<td>city</td>
							<td>address</td>
							
							
							
							</tr>
							<?php
								$q="select o.*,u.*,p.name as pname from ordermaster o, user u,product p where u.u_id=o.u_id and p.p_id=o.p_id";
								$rs=mysqli_query($cn,$q);
								while($row=mysqli_fetch_array($rs))
								{
							?>
							
														
							<tr>
								<td><?php print $row['pname'];?></td>
								<td><?php print $row['qty'];?></td>
								<td><?php print $row['name'];?></td>
								<td><?php print $row['city'];?></td>
								<td><?php print $row['address'];?></td>
								
				
				
								
								
							</tr>
							<?php
								}
								?>
						
						</table>
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