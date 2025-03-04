<?php
include("aheader.php");
include("connect.php");

if(isset($_GET['f_id']))
{
	$f_id=$_GET['f_id'];
	$qd="delete from feedback where f_id='$f_id'";
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
            <li class="breadcrumb-item active" aria-current="page">Feedback</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->
    <!-- contact -->
    <section class="wthree-row pt-3 pb-sm-5 w3-contact">
        <div class="container py-sm-5 pb-5">
            <h5 class="head_agileinfo text-center text-capitalize pb-5">
                <span>V</span>iew feedback</h5>
            <div class="row contact-form pt-lg-5">
			<div class="col-lg-2"></div>
                <div class="col-lg-8 wthree-form-left">
                    <div class="contact-top1">
                        <table class="table" >
							<tr>
							<td>name</td>
							<td>email</td>
							<td>msg</td>
							<td>date</td>
						
							
							</tr>
							
							
							</tr>
							<?php
								$q="select * from feedback";
								$rs=mysqli_query($cn,$q);
								while($row=mysqli_fetch_array($rs))
								{
							?>
							
														
							<tr>
								<td><?php print $row['name'];?></td>
								<td><?php print $row['email'];?></td>
								<td><?php print $row['msg'];?></td>
								<td><?php print $row['date'];?></td>
								

								
								
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