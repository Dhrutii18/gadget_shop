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
                <span>V</span>iew Rent</h5>
            <div class="row contact-form pt-lg-5">
			<div class="col-lg-2"></div>
                <div class="col-lg-8 wthree-form-left">
                    <div class="contact-top1">
                        
                        <table class="table table-resposive table-bordered">
							<tr>
							<th>Product Name</th>
							<th>name</th>
							<th>city</th>
							<th>address</th>
							<th>Start Date</th>
							<th>End Date</th>
                           
							</tr>
							<?php
								$q="select r.*,u.*,p.name as pname from rentmaster r, user u,product p where u.u_id=r.u_id and p.p_id=r.p_id";
								$rs=mysqli_query($cn,$q);
								while($row=mysqli_fetch_array($rs))
								{
							?>
							
														
							<tr>
								<td><?php print $row['pname'];?></td>
								<td><?php print $row['name'];?></td>
								<td><?php print $row['city'];?></td>
								<td><?php print $row['address'];?></td>
								
                                <td><?php print $row['start_date'];?></td>
                                <td><?php print $row['end_date'];?></td>
                                							
								
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