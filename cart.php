<?php include ("includes/db.php"); ?>
<?php include ("functions/function.php"); ?>

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
			Shopping Cart Total Price: RM 100, Total Items: <?php items(); ?>
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

						<li>
							<a href="shop.php">Shop</a>
						</li>

						<li>
							<a href="checkout.php">My Account</a>
						</li>

						<li class="active">
							<a href="cart.php">Shopping Cart</a>
						</li>

						<li>
							<a href="contact.php">Contact Us</a>
						</li>

					</ul><!--nav navbar-nav navbar-left ends -->

				</div><!--padding nav ends -->

					<a class="btn btn-primary navbar-btn right" href="cart.php"><!--"btn btn-primary navbar-btn right  starts-->
						<i class="fa fa-shopping-cart"></i>
						<span><?php items(); ?> items in cart</span>
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
					<a href="index.php">Cart</a>
				</li>
			</ul><!-- breadcrumb starts -->
		</div><!-- col md 12 ends -->
		<div class="col-md-9" id="cart"><!-- col md 9 start -->
			<div class="box"><!-- box start -->
				<form action="cart.php" method="post" enctype="multipart-form-data"><!--form starts -->
					<h1>Shopping Cart</h1>
					<p class="text-muted">You currently have 4 items in your cart.</p>
						<div class="table-responsive"><!--table responsive starts -->
							<table class="table"><!--table starts -->
								<thead><!-- thead starts -->
									<tr>
										<th colspan="2">Product</th>
										<th>Quantity</th>
										<th>Unit Price</th>										
										<th colspan="1">Delete</th>
										<th colspan="2">Sub Total</th>
									</tr>
								</thead><!-- thead ends -->
									<tbody><!--tbody starts -->
										<tr><!--tr starts -->
											<td>
												<img src="admin_area/product_images/cat set.jpg" class="img-responsive">
											</td>
											<td>
												<a href="#">Basic Disposable Set 254</a>
											</td>	
											<td>
												2
											</td>
											<td>
												RM 50.00
											</td>		
											 <td>
												<input type="checkbox" name="remove[]">
											</td>								
											<td>
												<a href="#">RM 100.00</a>
											</td>
										</tr><!--tr ends -->
										<tr><!--tr starts -->
											<td>
												<img src="admin_area/product_images/cat set.jpg" class="img-responsive">
											</td>
											<td>
												<a href="#">Basic Disposable Set 254</a>
											</td>	
											<td>
												2
											</td>
											<td>
												RM 50.00
											</td>		
											 <td>
												<input type="checkbox" name="remove[]">
											</td>								
											<td>
												<a href="#">RM 100.00</a>
											</td>
										</tr><!--tr ends -->

									</tbody><!--tbody ends -->
									<tfoot><!--tfoot starts -->
										<tr>
											<th colspan="5">Total</th>
											<th colspan="2">RM 100</th>
										</tr>
									</tfoot><!--tfoot ends -->
							</table><!--table ends -->
						</div><!--table responsive ends -->

						<div class="box-footer"><!--box-footer starts -->
							<div class="pull-left"><!--pull-left starts -->
								<a href="index.php" class="btn btn-default">
									<i class="fa fa-chevron-left"></i> Continue Shopping
								</a>
							</div><!--pull left ends	 -->
								<div class="pull-right"><!--pull-right starts -->
									<button class="btn btn-default" type="submit" name="update" value="Update Cart">
										<i class="fa fa-refresh"></i> Update Cart
									</button>

<a href="checkout.php" class="btn btn-primary">
Proceed To Checkout <i class="fa fa-chevron-right"></i>
</a>									

								</div><!--pull-right starts -->
						</div><!--box-footer ends -->
				</form><!--form ends -->
			</div><!-- box ends -->

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
		</div><!-- col-md 9 ends -->

		<div class="col-md-3"><!--col md 3 starts -->
			<div class="box" id="order-summary"><!--box starts -->
				<div class="box-header"><!--box header starts -->
					<h3>Order Summary</h3>
				</div><!--box-header ends -->
					<p class="text-muted">
						Shipping & additional costs are calculated based on the value you have entered.
					</p>
				<div class="table-responsive"><!--table responsive starts -->
					<table class="table"><!--table starts -->
						<tbody>
							<tr>
								<td>Order Subtotal</td>	
								<th>RM 100.00</th>
							</tr>
							<tr>
								<td>Shipping & Handling</td>
								<td>RM 0.00</td>
							</tr>
							<tr>
								<td>Tax</td>
								<th>RM 0.00</th>
							</tr>
							<tr class="total">
								<td>Total</td>
								<th>RM 100.00</th>
							</tr>
						</tbody>
					</table><!--table ends -->
				</div><!--table responsive ends -->
			</div><!--box ends -->
		</div><!--col md 3 ends -->

		<!--Footer starts officially -->
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