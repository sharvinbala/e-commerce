<?php
session_start();

include ("includes/db.php"); 
include ("functions/function.php"); 

?>

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
			<?php
			if (!isset($_SESSION['customer_email'])) {
				echo "Welcome: Guest";
			}
			else
			{
				echo "Welcome:" .$_SESSION['customer_email'] . "";
			}

			?>
			</a>

			<a href="#">
			Shopping Cart Total Price:<?php total_price(); ?>, Total Items: <?php items(); ?>
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
						<?php

						if(!isset($_SESSION['customer_email'])){

						echo "<a href='checkout.php' >My Account</a>";

						}
						else{

						echo "<a href='customer/my_account.php?my_orders'>My Account</a>";

						}

						?>
					</li>

					<li>
						<a href="cart.php">
							Go To Cart
						</a>
					</li>

					<li>
						<?php
							if (!isset($_SESSION['customer_email'])) {
								echo "<a href='checkout.php'>Login</a>";
							}
							else{							
								echo "<a href='logout.php'>Logout</a>";
							}
						?>
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

						<li class="active">
							<a href="index.php">Home</a>
						</li>

						<li>
							<a href="shop.php">Shop</a>
						</li>

						<li>
							<?php

						if(!isset($_SESSION['customer_email'])){

						echo "<a href='checkout.php' >My Account</a>";

						}
						else{

						echo "<a href='customer/my_account.php?my_orders'>My Account</a>";

						}

						?>
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
					<a href="index.php">Sign Up</a> <!-- change which page are you at here -->
				</li>
			</ul><!-- breadcrumb starts -->
		</div><!-- col md 12 ends -->

<div class="col-md-12"><!-- col md 9 starts -->
	<div class="box"><!-- box starts -->
		<div class="box-header"><!-- box header starts-->
			<center><!-- center starts-->
				<h2>Sign up for a new account</h2>
			</center><!-- center ends -->
		</div><!-- box header ends -->
		<form action="customer_register.php" method="post" enctype="multipart/form-data"><!-- form starts -->
			<div class="form-group"><!-- form-group starts -->
				<label>Name</label>
				<input type="text" class="form-control" name="c_name" required>
			</div><!-- form-group ends -->
			<div class="form-group"><!-- form-group starts -->
				<label>Email</label>
				<input type="text" class="form-control" name="c_email" required>
			</div><!-- form-group ends -->
			<div class="form-group"><!-- form-group starts -->
				<label>Password</label>
				<input type="password" class="form-control" name="c_pass" required>
			</div><!-- form-group ends -->

			<div class="form-group"><!-- form-group starts -->
				<label>Country</label>
				<input type="text" class="form-control" name="c_country" required>
			</div><!-- form-group ends -->

			<div class="form-group"><!-- form-group starts -->
				<label>City</label>
				<input type="text" class="form-control" name="c_city" required>
			</div><!-- form-group ends -->

			<div class="form-group"><!-- form-group starts -->
				<label>Contact</label>
				<input type="text" class="form-control" name="c_contact" required>
			</div><!-- form-group ends -->
			
			<div class="form-group"><!-- form-group starts -->
				<label>Address</label>
				<input type="text" class="form-control" name="c_address" required>
			</div><!-- form-group ends -->

			<div class="form-group"><!-- form-group starts -->
				<label>Profile Picture</label>
				<input type="file" class="form-control" name="c_image" required>
			</div><!-- form-group ends -->

			<div class="text-center"><!-- text-center starts -->
				<button type="submit" name="register" class="btn btn-primary">
					<i class="fa fa-user-md"></i> Register
				</button>
			</div><!-- text-center ends -->
		</form><!-- form ends -->
	</div><!-- box ends -->
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

	<?php
if (isset($_POST['register'])) {
	$c_name = $_POST['c_name'];
	$c_email = $_POST['c_email'];
	$c_pass = $_POST['c_pass'];
	$c_country = $_POST['c_country'];
	$c_city = $_POST['c_city'];
	$c_contact = $_POST['c_contact'];
	$c_address = $_POST['c_address'];
	$c_image = $_FILES['c_image']['name'];
	$c_image_tmp = $_FILES['c_image']['tmp_name'];
	$c_ip = getRealUserIp();
	move_uploaded_file($c_image_tmp, "customer/customer_images/$c_image");

	$insert_customer = "insert into customers (customer_name, customer_email, customer_pass, customer_country,
		customer_city, customer_contact, customer_address, customer_image, customer_ip) values ('$c_name','$c_email','$c_pass','$c_country','$c_city',
	'$c_contact','$c_address','$c_image','$c_ip')";

$run_customer = mysqli_query($con, $insert_customer);
$sel_cart = "select * from cart where ip_add='$c_ip'";
$run_cart = mysqli_query($con,$sel_cart);
$check_cart = mysqli_num_rows($run_cart);

if ($check_cart>0) {
	$_SESSION['customer_email'] = $c_email;

	echo "<script>alert('You have been registerd successfully!')</script>";
	echo "<script>window.open('checkout.php','_self')</script>";
}
else{
$_SESSION['customer_email'] = $c_email;

	echo "<script>alert('You have been registerd successfully!')</script>";
	echo "<script>window.open('index.php','_self')</script>";
}
}


?>