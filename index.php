<?php
session_start();
if(!isset($_SESSION['uname'])){
	echo '<script>';
	echo 'alert("please login via login form");location.href="login.php"';
	echo '</script>';
}
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Electro - HTML Ecommerce Template</title>

 		<!-- Google font -->
 		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

 		<!-- Bootstrap -->
 		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

 		<!-- Slick -->
 		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
 		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

 		<!-- nouislider -->
 		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

 		<!-- Font Awesome Icon -->
 		<link rel="stylesheet" href="css/font-awesome.min.css">

 		<!-- Custom stlylesheet -->
 		<link type="text/css" rel="stylesheet" href="css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<style type="text/css">
			body{
    		background-image: url('admin/images/w1.jpg');
    	}
		</style>
    </head>
	<body>
	
		<!-- /HEADER -->

		<nav class="navbar navbar-default" style="background-color: white">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Digital Library</a>
    </div>
    <ul class="nav navbar-nav" style="float: right;">
    	<li><a href="logout.php">Logout</a></li>
      <li><a href="load.php" style="color: black" class="btn btn-primary" >download page</a></li>
      
    </ul>
  </div>
</nav>
		<!-- /NAVIGATION -->

		<!-- BREADCRUMB -->
		
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">



      <div class="row">
        <div class="text-center">
          <div class="well">
            <?php 
           include('do.php');

            
              $q1="select * from booklist";
              $res=mysqli_query($db,$q1);
              $count=0;
              while($row=mysqli_fetch_array($res)){
              	$count++;
              }
            

            ?>
            <h4>Total number of books are &nbsp;&nbsp;:&nbsp;&nbsp;<?php echo $count ?></h4>
          </div>
        </div>
      </div>
				<!-- row -->
				<div class="row">
					<!-- ASIDE -->
				
					<!-- /ASIDE -->

			
							<!-- product -->


							<?php

							$q1="select * from booklist";
							$res=mysqli_query($db,$q1);
							while($row=mysqli_fetch_array($res)){

								?>
							<div class="col-lg-4 col-md-4 col-sm-4">
								<div class="product">
									<div class="product-img" style="height: 100px;overflow: hidden;" >
										<img src="admin/<?php echo $row['path'];?>" >
										<div class="product-label">
											
										</div>
									</div>
									<div class="product-body">
										<p class="product-category">pdf</p>
										<h3 class="product-name"><a href="#"><?php echo $row['book']; ?></a></h3>
										<h3 class="product-name"><a href="#"><?php echo $row['auth']; ?></a></h3>
										<p style="font-weight: bold;color: blue">Total Download : <?php echo $row['download'] ?></p>

										<p class="product-name" style="border: 1px solid black"><?php echo $row['des']; ?></p>

										<div class="product-rating">
										
										</div>
										<div class="product-btns">
											
										</div>
									</div>
									<div class="add-to-cart">

										<a href="admin/read.php?file=<?php echo $row['bpath']; ?>"><button class="add-to-cart-btn">view pdf</button></a>
									</div>
								</div>
							</div>
							<?php
						}

							?>


							<!-- /product -->

							<!-- product -->
							
							<!-- /product -->



					
							<!-- /product -->

							<!-- product -->
							
							<!-- /product -->

						

							<!-- product -->
						
						<!-- /store products -->

						
				
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- NEWSLETTER -->
		<div id="newsletter" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->

				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /NEWSLETTER -->

		<!-- FOOTER -->
		<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<ul class="footer-payments">
								<li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
								<li><a href="#"><i class="fa fa-credit-card"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
							</ul>
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> Dgital library<i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">gov college dharmpauri</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>
						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>
