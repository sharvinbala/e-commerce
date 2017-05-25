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

<div class="col-md-9"><!--col-md-9 starts -->
	<div class="row" id="productMain"><!--row starts -->
		<div class="col-sm-6"><!--col-sm6 starts -->
			<div id="mainImage"><!--mainImage starts -->
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators"><!-- carousel indicators starts -->
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"</li>
						<li data-target="#myCarousel" data-slide-to="2"</li>
						<li data-target="#myCarousel" data-slide-to="3"</li>
					</ol> <!-- carousel indicators ends -->
						<div class="carousel-inner"><!--carousel inner starts -->
							<div class="item active"><!--item active ends -->
								<center>
									<img src="admin_area/product_images/cat set.jpg" class="img-responsive">	
								</center>
							</div><!--item active ends -->
								<div class="item"><!--item active ends -->
								<center>
									<img src="admin_area/product_images/dental examination set.jpg" class="img-responsive">	
								</center>
							</div>

							<div class="item"><!--item active ends -->
								<center>
									<img src="admin_area/product_images/ofs1.jpg" class="img-responsive">	
								</center>
							</div>							

						</div><!--carousel inners ends -->
							<a class="left carousel-control" href="#myCarousel" data-slide="prev"><!--left carousel control starts -->
					<span class="glyphicon glyphicon-chevron-left"></span>
					<span class="sr-only">Previous</span>
				</a><!--left carousel control ends -->

				<a class="right carousel-control" href="#myCarousel" data-slide="next"><!--right carousel control starts -->
					<span class="glyphicon glyphicon-chevron-right"></span>
					<span class="sr-only">Next</span>
				</a><!--right carousel control ends -->
				</div><!--carousel inner ends -->
			</div><!--mainImage ends -->
		</div><!--col-sm-6 ends -->

		<div class="col-sm-6"><!--col-sm-6 starts -->
			<div class="box"><!--box starts -->
				<h1 class="text-center">Basic Disposable Set</h1>
					<form action="details.php" method="post" class="form-horizontal">
						<div class="form-group"> <!--form-group starts -->
							<label class="col-md-5 control-label">Product Quantity</label>
								<div class="col-md-7"><!--col-md-7 starts -->
									<select name="product_qty" class="form-control">
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
									</select>	
								</div><!--col-md-7 ends -->
						</div><!--form-group ends -->
						<p class="price">RM 50</p> 
							<p class="text-center buttons"><!--text-center buttons starts -->
								<button class="btn btn-primary" type=submit>
									<i class="fa fa-shopping-cart"></i>Add To Cart
								</button>
							</p><!--text-center buttons ends -->
					</form> <!--form horizontal ends -->
			</div><!--box ends -->

			<div class="row" id="thumbs"><!--thumbs starts -->
				<div class="col-xs-4"><!--col xs 4 starts -->
					<a href="#" class="thumb">
						<img src="admin_area/product_images/ofs1.jpg" class="img-responsive">
					</a>
				</div><!--col xs 4 ends -->

				<div class="col-xs-4"><!--col xs 4 starts -->
					<a href="#" class="thumb">
						<img src="admin_area/product_images/ofs1.jpg" class="img-responsive">
					</a>
				</div><!--col xs 4 ends -->

				<div class="col-xs-4"><!--col xs 4 starts -->
					<a href="#" class="thumb">
						<img src="admin_area/product_images/ofs1.jpg" class="img-responsive">
					</a>
				</div><!--col xs 4 ends -->				

			</div><!--thumbs ends -->
		</div><!--col-sm-6 ends -->
	</div><!--row ends -->

	<div class="box" id="details"><!--box details ends -->
		<p><!--p ends -->
			<h4>Product Details</h4>
			<p>
				Product Code: BDS-254-Premium

				Packing: 100 sets

				Contents:
			<ol>
				<li>1pc Hard Tray</li>
				<li>2pcs Forceps</li>
				<li>5pcs Cotton Balls</li>
				<li>4pcs Gauze Swabs</li>
				<li>1pc Limpet Bag</li>
				<li>1pc Hand Towel</li>
				<li>1pc 450mm Patient Drape</li>
				<li>1pc 450mm Sterile Field</li>
			</ol>
			</p>

		</p><!--p ends -->
		<hr>
	</div><!--box details ends -->

	<div id="row same-height-row"><!--row same-height-row ends -->
		<div class="col-md-3 col-sm-6"><!--col-md-3 col-sm-6 stards -->
			<div class="box same-height headline"><!--box same-height headline stards -->
				<h3 class="text-center">You may also like these products.</h3>
			</div><!--box same-height headline ends -->
		</div><!--col-md-3 col-sm-6 ends -->

		<div class="center-responsive col-md-3 col-sm-6"><!--center-responsive col-md-3 col-sm-6 starts-->
			<div class="product same-height"><!--product same-height starts -->
				<a href="details.php">
					<img src="admin_area/product_images/dental examination set.jpg" class="img-responsive">
				</a>
					<div class="text"><!--text starts -->
						<h3><a href="details.php">Dental Examination Set</a></h3>
						<p class="price">RM 50</p>
					</div><!--text ends -->
			</div><!--product same-height ends -->
		</div><!--center-responsive col-md-3 col-sm-6 ends-->

		<div class="center-responsive col-md-3 col-sm-6"><!--center-responsive col-md-3 col-sm-6 starts-->
			<div class="product same-height"><!--product same-height starts -->
				<a href="details.php">
					<img src="admin_area/product_images/ofs1.jpg" class="img-responsive">
				</a>
					<div class="text"><!--text starts -->
						<h3><a href="details.php">Basic Disposable Set 254</a></h3>
						<p class="price">RM 50</p>
					</div><!--text ends -->
			</div><!--product same-height ends -->
		</div><!--center-responsive col-md-3 col-sm-6 ends-->

		<div class="center-responsive col-md-3 col-sm-6"><!--center-responsive col-md-3 col-sm-6 starts-->
			<div class="product same-height"><!--product same-height starts -->
				<a href="details.php">
					<img src="admin_area/product_images/wound dressing.jpg" class="img-responsive">
				</a>
					<div class="text"><!--text starts -->
						<h3><a href="details.php">Wound Dressing Set</a></h3>
						<p class="price">RM 50</p>
					</div><!--text ends -->
			</div><!--product same-height ends -->
		</div><!--center-responsive col-md-3 col-sm-6 ends-->

	</div><!--row same-height-row ends -->
</div><!--col-md-9 ends -->

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