<?php
session_start();
?>
    <header>
        <div class="container">
            <!-- top nav -->
            <nav class="top_nav d-flex pt-3 pb-1">
                <!-- logo -->
<h1>
                    <a class="navbar-brand" href="#" style="font-size:50px"><span>G</span>adget Shop
                    </a>
                </h1>                <!-- //logo -->
                <div class="w3ls_right_nav ml-auto d-flex">
                    <!-- search form -->
  
  <!-- search form -->
                    
					
                </div>
            </nav>
            <!-- //top nav -->
            <!-- bottom nav -->
            <nav class="navbar navbar-expand-lg navbar-light justify-content-center">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto text-center">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home
                                
                            </a>
                        </li>
						    <li class="nav-item">
                            <a class="nav-link" href="vproduct.php">Product</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="vrent.php">Rent</a>
                        </li>

						<?php
						if(!isset($_SESSION['u_id']))
						{
						?>
	

                        <li class="nav-item">
                            <a class="nav-link" href="register.php">Register</a>
							
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="userlogin.php">Login</a>
						
                        </li>
						<?php
						}
						else
						{
						?>
                        <li class="nav-item">
                            <a class="nav-link" href="vcart.php">My Cart</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="bookrent.php">Rent Cart</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="myorder.php">My Order</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="myrent.php">My Rent</a>
                        </li>
						<li class="nav-item">
                            <a class="nav-link" href="logout.php">Logout</a>
                        </li>
						<?php
						}
						?>
						
                        <li class="nav-item">
                            <a class="nav-link" href="vfeeback.php">Feedback</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- //bottom nav -->
        </div>
        <!-- //header container -->
    </header>
