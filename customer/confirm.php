<?php session_start(); ?>
<?php
if (!isset($_SESSION['customer_email'])) {
	echo "<script>window.open('../checkout.php', '_self')</script>";
}else{

?>
<?php include ("includes/db.php"); ?>
<?php include ("functions/function.php"); ?>
<?php

if (isset($_GET['order_id'])) {
	$order_id = $_GET['order_id'];
}

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
			Shopping Cart Total Price: <?php total_price(); ?>, Total Items: <?php items(); ?>
			</a>

				</div><!--col md 6 offer ends -->
				<div class="col-md-6"> <!--col-md-6 starts -->
				<ul class="menu"><!--menu starts -->
					<li>
						<a href="../customer_register.php">
							Register
						</a>
					</li>

					<li>
						<?php

						if(!isset($_SESSION['customer_email'])){

						echo "<a href='../checkout.php' >My Account</a>";

						}
						else{

						echo "<a href='my_account.php?my_orders'>My Account</a>";

						}

						?>
					</li>

					<li>
						<a href="../cart.php">
							Go To Cart
						</a>
					</li>

					<li>
						<?php
							if (!isset($_SESSION['customer_email'])) {
								echo "<a href='../checkout.php'>Login</a>";
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

						<li>
							<a href="../index.php">Home</a>
						</li>

						<li >
							<a href="../shop.php">Shop</a>
						</li>

						<li class="active">
							<?php

						if(!isset($_SESSION['customer_email'])){

						echo "<a href='../checkout.php' >My Account</a>";

						}
						else{

						echo "<a href='my_account.php?my_orders'>My Account</a>";

						}

						?>
						</li>

						<li>
							<a href="../cart.php">Shopping Cart</a>
						</li>

						<li>
							<a href="../contact.php">Contact Us</a>
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
					<a href="../index.php">Home</a>
				</li>
				<li>
					<a href="../index.php">My Account</a>
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
		<h1 align="center">Please Confirm Your Payment</h1>
			<form action="confirm.php?update_id=<?php echo $order_id; ?>" method="post" enctype="multipart/form-data"><!--- form Starts -->

<div class="form-group"><!-- form-group Starts -->

<label>Invoice No:</label>

<input type="text" class="form-control" name="invoice_no" required>

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label>Amount Sent:</label>

<input type="text" class="form-control" name="amount_sent" required>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label>Select Payment Mode:</label>

<select name="payment_mode" class="form-control"><!-- select Starts -->

<option>Select Payment Mode</option>
<option>Bank Code</option>
<option>Western Union</option>

</select><!-- select Ends -->

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label>Transaction/Reference Id:</label>

<input type="text" class="form-control" name="ref_no" required>

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label>Payment Date:</label>

<input type="text" class="form-control" name="date" required>

</div><!-- form-group Ends -->

<div class="text-center"><!-- text-center Starts -->

<button type="submit" name="confirm_payment" class="btn btn-primary btn-lg">

<i class="fa fa-user-md"></i> Confirm Payment

</button>

</div><!-- text-center Ends -->

</form><!--- form Ends -->


<?php
if (isset($_POST['confirm_payment'])) {
	$update_id = $_GET['update_id'];
	$invoice_no = $_POST['invoice_no'];
	$amount = $_POST['amount_sent'];
	$payment_mode = $_POST['payment_mode'];
	$ref_no = $_POST['ref_no'];	
	$payment_date = $_POST['date'];

	$complete = "Complete";
	$insert_payment = "insert into payments (invoice_no, amount, payment_mode, ref_no, payment_date)
	values ('$invoice_no','$amount','$payment_mode','$ref_no','$payment_date') ";

	$run_payment = mysqli_query($con, $insert_payment);
	$update_customer_order = "update customer_orders set order_status='$complete' where order_id='$update_id'";
	$run_customer_order = mysqli_query($con, $update_customer_order);
	$update_pending_order = "update pending_orders set order_status='$complete' where order_id='$update_id'";

	$run_pending_order = "update pending_orders set order_status='$complete' where order_id='$update_id'";

	if ($run_pending_order) {
		echo "<script>alert('Your payment has been received. Your order will be completed within 24 hours')</script>";
		echo "<script>window.open('my_account.php?my_orders','_self')</script>";
	}
}


?>
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
	<?php } ?>