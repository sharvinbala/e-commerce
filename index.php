<?php session_start(); ?>
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

							if(!isset($_SESSION['customer_email'])){

							echo "<a href='checkout.php'> Login </a>";

							}else {

							echo "<a href='logout.php'> Logout </a>";

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

<div class="container-fluid" id="slider" style= "max-width:900px;" ><!-- container Starts -->

<div class="col-md-12" ><!-- col-md-12 Starts -->

<div id="myCarousel" class="carousel slide" data-ride="carousel"><!-- carousel slide Starts --->

<ol class="carousel-indicators"><!-- carousel-indicators Starts -->

<li data-target="#myCarousel" data-slide-to="0" class="active"></li>

<li data-target="#myCarousel" data-slide-to="1"></li>

<li data-target="#myCarousel" data-slide-to="2"></li>


</ol><!-- carousel-indicators Ends -->

<div class="carousel-inner"><!-- carousel-inner Starts -->

<?php

$get_slides = "select * from slider LIMIT 0,1";

$run_slides = mysqli_query($con,$get_slides);

while($row_slides=mysqli_fetch_array($run_slides)){

$slide_name = $row_slides['slide_name'];
$slide_image = $row_slides['slide_image'];
$slide_url = $row_slides['slide_url'];

echo "

<div class='item active'>

<a href='$slide_url'><img src='admin_area/slides_images/$slide_image'></a>

</div>

";
}

?>

<?php

$get_slides = "select * from slider LIMIT 1,3 ";

$run_slides = mysqli_query($con,$get_slides);

while($row_slides = mysqli_fetch_array($run_slides)) {


$slide_name = $row_slides['slide_name'];
$slide_image = $row_slides['slide_image'];
$slide_url = $row_slides['slide_url'];

echo "

<div class='item'>

<a href='$slide_url'><img src='admin_area/slides_images/$slide_image'></a>

</div>

";


}



?>

</div><!-- carousel-inner Ends -->

<a class="left carousel-control" href="#myCarousel" data-slide="prev"><!-- left carousel-control Starts -->

<span class="glyphicon glyphicon-chevron-left"> </span>

<span class="sr-only"> Previous </span>

</a><!-- left carousel-control Ends -->

<a class="right carousel-control" href="#myCarousel" data-slide="next"><!-- right carousel-control Starts -->

<span class="glyphicon glyphicon-chevron-right"> </span>

<span class="sr-only"> Next </span>

</a><!-- right carousel-control Ends -->

</div><!-- carousel slide Ends --->

</div><!-- col-md-12 Ends -->

</div><!-- container Ends -->

<div id="advantages"> <!--advantages starts -->

	<div class="container"><!--container starts-->

		<div class="same-height-row"><!--same-height starts -->

			<?php

$get_boxes = "select * from boxes_section";
$run_boxes = mysqli_query($con, $get_boxes);

while ($run_boxes_section=mysqli_fetch_array($run_boxes)) {
$box_id = $run_boxes_section['box_id'];
$box_title = $run_boxes_section['box_title'];
$box_desc = $run_boxes_section['box_desc'];
$box_image = $run_boxes_section['box_image'];
$box_url = $run_boxes_section['box_url'];
?>

			<div class="col-sm-4"><!--col sm 4 starts -->

												
					<p>
						<?php echo "
						<a href='$box_url'>
						<img src='admin_area/box_image/$box_image' width='300 height='250'> 
						</a>
						";

						?>
					</p>

				

			</div><!--col sm 4 ends -->

			<?php } ?>

		</div><!--same-height ends -->

	</div><!--container ends -->

</div><!--advantages ends -->

<div id="hot"><!-- hot Starts -->
<div class="box"><!-- box Starts -->
<div class="container"><!-- container Starts -->
<div class="col-md-12"><!-- col-md-12 Starts -->
<h2 align="center">Latest this week</h2>
</div><!-- col-md-12 Ends -->
</div><!-- container Ends -->
</div><!-- box Ends -->
</div><!-- hot Ends -->

<div id="content" class="container"><!-- container Starts -->
<div class="row"><!-- row Starts -->
<?php
getPro();
?>
</div><!-- row Ends -->
</div><!-- container Ends -->
<?php
include("includes/footer.php");
?>
<script src="js/jquery.min.js"> </script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>