<?php
include("aheader.php");
include("connect.php");

// Define Discount Variables
$discount_type = "percentage"; // Set to "fixed" or "percentage"
$discount_value = 10; 

if(isset($_GET['p_id']))
{
	$p_id=$_GET['p_id'];
	$qd="delete from product where p_id='$p_id'";
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
            <li class="breadcrumb-item active" aria-current="page"Rent</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->
    <!-- contact -->
    <section class="wthree-row pt-3 pb-sm-5 w3-contact">
        <div class="container py-sm-5 pb-5">
            <h5 class="head_agileinfo text-center text-capitalize pb-5">
                <span>V</span>iew product</h5>
            <div class="row contact-form pt-lg-5">
			
                <div class="col-lg-12 wthree-form-left">
                    <div class="contact-top1">
                        <table class="table">
							<tr>
							<td>Name</td>
							<td>Category</td>
							<td>Photo</td>
							<td>Detail</td>
							<td>Price</td>
							<td>Option</td>
			
							</tr>
							<?php
								$q="select c.*,p.* from product p , category c where c.c_id=p.c_id";
								$rs=mysqli_query($cn,$q);
								while($row=mysqli_fetch_array($rs)){
                                    $original_price = $row['price'];
                                    // Apply Discount
                                    if ($discount_type == "percentage") {
                                        $discounted_price = $original_price - ($original_price * $discount_value / 100);
                                    } else { // Fixed discount
                                        $discounted_price = max(0, $original_price - $discount_value);
                                    }
							?>
							
							
							<tr>
								<td><?php print $row['name'];?></td>
								<td><?php print $row['cname'];?></td>
								<td><img src="<?php print $row['photo'];?>" style="width:250px;height:250px"></td>
								<td><?php print $row['detail'];?></td>
								<td><?php print $row['price'];?></td>
								<td>
								<a href="edit_product.php?p_id=<?php print $row['p_id'];?>">edit|</a>
								<a href="viewproduct.php?p_id=<?php print $row['p_id'];?>">Delete </a>
								</td>
								
								
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