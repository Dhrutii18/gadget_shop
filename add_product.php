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
            <li class="breadcrumb-item active" aria-current="page">Add Product</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->
    <!-- contact -->
    <section class="wthree-row pt-3 pb-sm-5 w3-contact">
        <div class="container py-sm-5 pb-5">
            <h5 class="head_agileinfo text-center text-capitalize pb-5">
                <span>P</span>roduct</h5>
            <div class="row contact-form pt-lg-5">
			<div class="col-lg-2"></div>
                <div class="col-lg-8 wthree-form-left">
                    <div class="contact-top1">
                        <form action="addproduct_code.php" method="post" enctype="multipart/form-data" class="f-color">
                            <div class="form-group">
                                <label for="contactusername">Name</label>
                                <input type="text" pattern="[a-zA-Z0-9 ]*$" name="name" class="form-control" id="contactusername" required>
                            </div>
							<div class="form-group">
                                <label for="contactemail">c_id</label>
                                <select class="form-control" id="contactemail" name="c_id" required>
										<?php
								$q1="select * from category";
								$rs1=mysqli_query($cn,$q1);
								while($row1=mysqli_fetch_array($rs1))
								{
									?>
								
									<option value="<?php print $row1[0];?>"><?php print $row1[1];?></option>
								<?php
								}
								
								?>
								</select>
                            </div>
                            
                            <div class="form-group">
                                <label for="contactemail">Photo</label>
                                <input type="file" class="form-control" id="contactemail" name="photo" required>
                            </div>
							
							<div class="form-group">
                                <label for="contactcomment">detail</label>
                                <textarea class="form-control" rows="5" pattern="[a-zA-Z0-9]*$" id="contactcomment" name="detail" required></textarea>
                            </div>
							 <div class="form-group">
                                <label for="contactusername">price</label>
                                <input type="text" class="form-control"  pattern="[0-9]*$" id="contactusername" name="price" required>
                            </div>
                            <div class="form-group">
                                <label for="rent">Rent</label>
                                <input type="text" class="form-control"  pattern="[0-9]*$" id="rent" name="rent" required>
                            </div>
                            <button type="submit" class="btn btn-info btn-block">add</button>
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