<?php
include("aheader.php");
include("connect.php");
$c_id=$_GET['c_id'];
$q="select * from category where c_id=$c_id";
								$rs=mysqli_query($cn,$q);
								$row=mysqli_fetch_array($rs);
?>
<!-- //inner banner -->
    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Edit Category</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->
    <!-- contact -->
    <section class="wthree-row pt-3 pb-sm-5 w3-contact">
        <div class="container py-sm-5 pb-5">
            <h5 class="head_agileinfo text-center text-capitalize pb-5">
                <span>C</span>Category</h5>
            <div class="row contact-form pt-lg-5">
			<div class="col-lg-2"></div>
                <div class="col-lg-8 wthree-form-left">
                    <div class="contact-top1">
                        <form action="editcategory_code.php" method="post" class="f-color">
						<input type="hidden" name="c_id" value="<?php print $c_id?>">
                            <div class="form-group">
                                <label for="contactusername"> Category Name</label>
                                <input value="<?php print $row['cname'];?>" type="text" pattern="[a-zA-Z ]*$" class="form-control" name="cname" id="contactusername" required>
                            </div>
                            <button type="submit" class="btn btn-info btn-block">Edit</button>
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