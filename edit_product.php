<?php
include("aheader.php");
include("connect.php");


$p_id=$_GET['p_id'];
$q="select * from product where p_id=$p_id";
								$rs=mysqli_query($cn,$q);
								$row=mysqli_fetch_array($rs)
?>
<!-- //inner banner -->
    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Edit Product</li>
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
                        <form action="editproduct_code.php" method="post" enctype="multipart/form-data" class="f-color">
						<input type="hidden" name="p_id" value="<?php print $p_id?>">
                            <div class="form-group">
                                <label for="contactusername">Name</label>
                                <input value="<?php print $row['name'];?>" type="text" class="form-control" pattern="[a-zA-Z0-9 ]*$" name="name" id="contactusername" required></div>
							<div class="form-group">
                                <label for="contactemail">c_id</label>
                                <select name="c_id" class="form-control" id="contactemail" required>
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
                                <input value="<?php print $row['photo'];?>" type="file" name="photo" class="form-control" id="contactemail" required>
                            </div>
							
							<div class="form-group">
                                <label for="contactcomment">detail</label>
                                <textarea  class="form-control" name="detail" rows="5" id="contactcomment" required><?php print $row['detail'];?></textarea>
                            </div>
							 <div class="form-group">
                                <label for="contactusername">price</label>
                                <input value="<?php print $row['price'];?>"  type="text" pattern="[0-9]*$" name="price" class="form-control" id="contactusername" required>
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