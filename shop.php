<!DOCTYPE html>
<html>
<head>
<title>Hitech Infinity</title>

<link href="http://fonts.googleapis.com/css?family=Roboto:500,500,700,300,100" rel="stylesheet">
<link href="styles/bootstrap.min.css" rel="stylesheet">
<link href="styles/style.css" rel="stylesheet">
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
<div id="top"><!--top starts -->
	<div class="container"> <!--Container starts -->
		<div class ="col-md-6 offer"> <!-- col md 6 offer starts -->
			<a href="#" class="btn btn-success btn-sm">
			Welcome: Guest!
			</a>

			<a href="#">
			Shopping Cart Total Price: RM 100, Total Items: 2
			</a>

				</div><!--col md 6 offer ends -->
				<div class="col-md-6"> <!--col-md-6 starts -->
				<ul class="menu"><!--menu starts -->
					<li>
						<a href="customer_register.php">
							Register
						</a>
					</li>

					<li>
						<a href="checkout.php">
							My Account
						</a>
					</li>

					<li>
						<a href="cart.php">
							Go To Cart
						</a>
					</li>

					<li>
						<a href="checkout.php">
							Login
						</a>
					</li>

				</ul><!--menu ends -->
				</div><!--col-md-6 offer ends -->
	</div><!--Container ends -->
</div><!--top ends -->

<div class="navbar navbar-default" id="navbar"><!--Navbar default starts -->
	<div class="container"><!--container starts -->
		<div class="navbar-header"> <!--Navbar header starts -->
			<a class="navbar-brand home" href="index.php"> <!--Navbar brand starts -->
				<img src="images/logo.jpg"alt="Hitech" class="hidden-xs">
				<img src="images/logo original-small.jpg"alt="Hitech" class="visible-xs">
				
			</a>  <!--Navbar brand ends -->
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
				<span class="sr-only">Toggle Navigation</span>
				<i class="fa fa-align-justify"></i>
			</button>

			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
				<span class="sr-only">Toggle Search</span>
				<i class="fa fa-search	"></i>
			</button>		

		</div> <!--Navbar header ends -->

			<div class="navbar-collapse collapse" id="navigation"> <!--navbar collapse starts -->

				<div class="padding-nav"><!--padding nav starts -->

					<ul class="nav navbar-nav navbar-left"><!--nav navbar-nav navbar-left starts -->

						<li>
							<a href="index.php">Home</a>
						</li>

						<li class="active">
							<a href="shop.php">Shop</a>
						</li>

						<li>
							<a href="checkout.php">My Account</a>
						</li>

						<li>
							<a href="cart.php">Shopping Cart</a>
						</li>

						<li>
							<a href="contact.php">Contact Us</a>
						</li>

					</ul><!--nav navbar-nav navbar-left ends -->

				</div><!--padding nav ends -->

					<a class="btn btn-primary navbar-btn right" href="cart.php"><!--"btn btn-primary navbar-btn right  starts-->
						<i class="fa fa-shopping-cart"></i>
						<span>4 items in cart</span>
					</a><!--"btn btn-primary navbar-btn right ends-->

					<div class="navbar-collapse collapse right"><!-- navbar collapse right starts-->

						<button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="#search">
							<span class="sr-only">Toggle Search</span>
							<i class="fa fa-search"></i>
						</button>	

					</div><!-- navbar collapse right ends-->

					<div class="collapse clearfix" id="search"><!--collapse clearfix starts -->
						<form class="navbar-form" method="get" action="results.php">
							<div class="input-group"> <!--input-group start -->
								<input class="form-control" type="text" placeholder="Search" name="user_query" required></input>
									<span class="input-group-btn"> <!--input group button starts-->
								<button type="submit" value="Search" name="search" class="btn btn-primary">
									<i class="fa fa-search"></i>
								</button>
									</span><!--input group button ends-->
							</div><!--input group ends -->

						</form>

					</div><!--collapse clearfix ends -->


			</div><!--navbar collapse ends -->		

	</div> <!--Navbar default ends -->	
</div><!--Navbar default ends -->

<!--Content here -->

<div id="content"> <!-- content starts -->
	<div class="container"><!-- container starts -->
		<div class="col-md-12"><!-- col md 12 starts -->
			<ul class="breadcrumb"><!-- breadcrumb starts -->
				<li>
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="index.php">Shop</a>
				</li>
			</ul><!-- breadcrumb starts -->
		</div><!-- col md 12 ends -->

		<div class="col-md-3"><!-- col md 3 starts -->
			<?php
				include("includes/sidebar.php");
			?>
		</div><!-- col md 3 ends -->

			<div class="col-md-9"><!-- col md 9 starts -->
				<div class="box"><!-- box starts -->
					<h1>Shop</h1>
					<p>Browse through our products for good deals!</p>
				</div><!-- box ends -->
					<div class="row"><!-- row starts -->
						<div class="col-md-4 col-sm-6 center-responsive"><!-- center-responsive starts -->
							<div class="product"><!-- product starts -->
								<a href="details.php"></a>
								<img src="admin_area/product_images/cat set.jpg" class="img-responsive">
								<div class="text"><!-- text starts -->
									<h3>
										<a href="details.php">Catherization Set</a>
									</h3>
									<p class="price">RM 35</p>
									<p class="buttons">
										<a href="details.php" class="btn btn-default">View Details</a>
										<a href="details.php" class="btn btn-primary">
											<i class="fa fa-shopping-cart"></i>Add To Cart
										</a>
									</p>
								</div><!-- text ends -->
							</div><!-- product ends -->
						</div><!-- center responsive ends -->


						<div class="col-md-4 col-sm-6 center-responsive"><!-- center-responsive starts -->
							<div class="product"><!-- product starts -->
								<a href="details.php"></a>
								<img src="admin_area/product_images/cat set.jpg" class="img-responsive">
								<div class="text"><!-- text starts -->
									<h3>
										<a href="details.php">Catherization Set</a>
									</h3>
									<p class="price">RM 35</p>
									<p class="buttons">
										<a href="details.php" class="btn btn-default">View Details</a>
										<a href="details.php" class="btn btn-primary">
											<i class="fa fa-shopping-cart"></i>Add To Cart
										</a>
									</p>
								</div><!-- text ends -->
							</div><!-- product ends -->
						</div><!-- center responsive ends -->

						<div class="col-md-4 col-sm-6 center-responsive"><!-- center-responsive starts -->
							<div class="product"><!-- product starts -->
								<a href="details.php"></a>
								<img src="admin_area/product_images/cat set.jpg" class="img-responsive">
								<div class="text"><!-- text starts -->
									<h3>
										<a href="details.php">Catherization Set</a>
									</h3>
									<p class="price">RM 35</p>
									<p class="buttons">
										<a href="details.php" class="btn btn-default">View Details</a>
										<a href="details.php" class="btn btn-primary">
											<i class="fa fa-shopping-cart"></i>Add To Cart
										</a>
									</p>
								</div><!-- text ends -->
							</div><!-- product ends -->
						</div><!-- center responsive ends -->

						<div class="col-md-4 col-sm-6 center-responsive"><!-- center-responsive starts -->
							<div class="product"><!-- product starts -->
								<a href="details.php"></a>
								<img src="admin_area/product_images/cat set.jpg" class="img-responsive">
								<div class="text"><!-- text starts -->
									<h3>
										<a href="details.php">Catherization Set</a>
									</h3>
									<p class="price">RM 35</p>
									<p class="buttons">
										<a href="details.php" class="btn btn-default">View Details</a>
										<a href="details.php" class="btn btn-primary">
											<i class="fa fa-shopping-cart"></i>Add To Cart
										</a>
									</p>
								</div><!-- text ends -->
							</div><!-- product ends -->
						</div><!-- center responsive ends -->

						<div class="col-md-4 col-sm-6 center-responsive"><!-- center-responsive starts -->
							<div class="product"><!-- product starts -->
								<a href="details.php"></a>
								<img src="admin_area/product_images/cat set.jpg" class="img-responsive">
								<div class="text"><!-- text starts -->
									<h3>
										<a href="details.php">Catherization Set</a>
									</h3>
									<p class="price">RM 35</p>
									<p class="buttons">
										<a href="details.php" class="btn btn-default">View Details</a>
										<a href="details.php" class="btn btn-primary">
											<i class="fa fa-shopping-cart"></i>Add To Cart
										</a>
									</p>
								</div><!-- text ends -->
							</div><!-- product ends -->
						</div><!-- center responsive ends -->

						<div class="col-md-4 col-sm-6 center-responsive"><!-- center-responsive starts -->
							<div class="product"><!-- product starts -->
								<a href="details.php"></a>
								<img src="admin_area/product_images/cat set.jpg" class="img-responsive">
								<div class="text"><!-- text starts -->
									<h3>
										<a href="details.php">Catherization Set</a>
									</h3>
									<p class="price">RM 35</p>
									<p class="buttons">
										<a href="details.php" class="btn btn-default">View Details</a>
										<a href="details.php" class="btn btn-primary">
											<i class="fa fa-shopping-cart"></i>Add To Cart
										</a>
									</p>
								</div><!-- text ends -->
							</div><!-- product ends -->
						</div><!-- center responsive ends -->

					</div><!-- row ends -->

					<center><!--center starts -->
						<ul class="pagination"><!--pagination starts -->
							<li><a href="shop.php">First Page</a></li>
							<li><a href="shop.php">1</a></li>
							<li><a href="shop.php">2</a></li>
							<li><a href="shop.php">3</a></li>
							<li><a href="shop.php">4</a></li>
							<li><a href="shop.php">5</a></li>
							<li><a href="shop.php">Last Page</a></li>
						</ul><!--pagination ends -->
					</center><!--center ends -->

			</div><!-- col md 9 ends -->
	</div><!-- container ends -->
</div><!-- content ends -->




<!--content till here -->
<?php
include ("includes/footer.php")
?>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>