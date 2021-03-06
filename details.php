<?php session_start(); ?>
<?php include ("includes/db.php"); ?>
<?php include ("functions/function.php");

	$product_id = $_GET['pro_id'];
	$get_product = "select * from products where product_url='$product_id'";
	$run_product=mysqli_query($con, $get_product);

	$check_product = mysqli_num_rows($run_product);

	if ($check_product == 0) {
		echo "<script>window.open('index.php','_self')</script>";
	}
	else
	{

	$row_product = mysqli_fetch_array($run_product);

	$p_cat_id=$row_product['p_cat_id'];
	$pro_id = $row_product['product_id'];
	$pro_title=$row_product['product_title'];
	$pro_price=$row_product['product_price'];
	$pro_desc=$row_product['product_desc'];
	$pro_img1=$row_product['product_img1'];
	$pro_img2=$row_product['product_img2'];
	$pro_img3=$row_product['product_img3'];
	$pro_label = $row_product['product_label'];
	$pro_psp_price = $row_product['product_psp_price'];

	if ($pro_label == "") {
			
		}
		else
		{
			$product_label = "
			<a class='label sale' href='#' style='color:black;'>
			<div class='thelabel'>$pro_label</div>
			<div class='label-background'></div>
			</a>
			";
		}

	$get_p_cat="select * from product_categories where p_cat_id='$p_cat_id'";
	$run_p_cat = mysqli_query($con, $get_p_cat);
	$row_p_cat = mysqli_fetch_array($run_p_cat);
	$p_cat_title = $row_p_cat['p_cat_title'];

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

						<li>
							<a href="index.php">Home</a>
						</li>

						<li class="active">
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
					<a href="shop.php">Shop</a>
				</li>

				<!--show name of product in nav bar starts-->
				<li>
					<a href="shop.php?p_cat=<?php echo $p_cat_id; ?>"><?php echo $p_cat_title; ?></a>
				</li>

				<li>
					<?php echo $pro_title; ?>
				</li>
				<!--show name of product in nav bar ends-->

			</ul><!-- breadcrumb starts -->
		</div><!-- col md 12 ends -->

<div class="col-md-12"><!--col-md-12 starts -->
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
									<img src="admin_area/product_images/<?php echo $pro_img1; ?>" class="img-responsive" style="padding-top: 1px">	
								</center>
							</div><!--item active ends -->
								<div class="item"><!--item active ends -->
								<center>
									<img src="admin_area/product_images/<?php echo $pro_img2; ?>" class="img-responsive">	
								</center>
							</div>

							<div class="item"><!--item active ends -->
								<center>
									<img src="admin_area/product_images/<?php echo $pro_img3; ?>" class="img-responsive">	
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

			<?php echo $product_label; ?>

		</div><!--col-sm-6 ends -->

		<div class="col-sm-6"><!--col-sm-6 starts -->
			<div class="box"><!--box starts -->
				<h1 class="text-center"><?php echo $pro_title; ?></h1>

				<?php add_cart(); ?>

					<form action="details.php?add_cart=<?php echo $product_id; ?>" method="post" class="form-horizontal">
						<div class="form-group"> <!--form-group starts -->
							<label class="col-md-5 control-label">Product Quantity</label>
								<div class="col-md-7"><!--col-md-7 starts -->
									<select name="product_qty" class="form-control">
										<option>Select Quantity</option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
									</select>	
								</div><!--col-md-7 ends -->
						</div><!--form-group ends -->

<center><!-- center starts -->
<?php

$get_icons = "select * from icons where icon_product='$pro_id'";
$run_icons = mysqli_query($con, $get_icons);

while ($row_icons = mysqli_fetch_array($run_icons)) {
	
$icon_image = $row_icons['icon_image'];

echo "<img src='admin_area/icon_images/$icon_image' width='45' height='45'>
&nbsp; &nbsp; &nbsp;";

}

?>
</center><!-- center ends -->


<?php
if ($pro_label == "Sale" or $pro_label == "Promo!") {
	echo "
<p class='price'>
Product Price: <del>RM $pro_price</del><br>
Promo Price: RM $pro_psp_price
</p>
";
}

else
{
	echo "
	<p class='price'>
	Product Price: RM $pro_price
	</p>
	";
}

?>
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
						<img src="admin_area/product_images/<?php echo $pro_img1; ?>" class="img-responsive">
					</a>
				</div><!--col xs 4 ends -->

				<div class="col-xs-4"><!--col xs 4 starts -->
					<a href="#" class="thumb">
						<img src="admin_area/product_images/<?php echo $pro_img2; ?>" class="img-responsive">
					</a>
				</div><!--col xs 4 ends -->

				<div class="col-xs-4"><!--col xs 4 starts -->
					<a href="#" class="thumb">
						<img src="admin_area/product_images/<?php echo $pro_img3; ?>" class="img-responsive">
					</a>
				</div><!--col xs 4 ends -->				

			</div><!--thumbs ends -->
		</div><!--col-sm-6 ends -->
	</div><!--row ends -->

	<div class="box" id="details"><!--box details ends -->
		<p><!--p starts -->
			<h4>Product Details</h4>
			<p>
				<?php echo $pro_desc; ?>
			
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
		<?php
		$get_products = "select * from products order by rand() LIMIT 0,3";
		$run_products = mysqli_query($con, $get_products);	

		while ($row_products = mysqli_fetch_array($run_products)) {
			$pro_id = $row_products['product_id'];
		$pro_title = $row_products['product_title'];
		$pro_price = $row_products['product_price'];
		$pro_img1 = $row_products['product_img1'];
		$pro_label = $row_products['product_label'];
		$manufacturer_id = $row_products['manufacturer_id'];
		$get_manufacturer = "select * from  manufacturers where manufacturer_id = '$manufacturer_id'";
		$run_manufacturer = mysqli_query($db, $get_manufacturer);
		$row_manufacturer = mysqli_fetch_array($run_manufacturer);
		$manufacturer_name = $row_manufacturer['manufacturer_title'];
		$pro_psp_price = $row_products['product_psp_price'];
		$pro_url = $row_products['product_url'];

		if($pro_label == "Sale" or $pro_label == "Promo!"){
		$product_price = "<del> $pro_price </del>";
		$product_psp_price = "| RM $pro_psp_price";
		}
		else{
		$product_psp_price = "";
		$product_price = "$pro_price";
		}

		if ($pro_label == "") {
			
		}
		else
		{
			$product_label = "
			<a class='label sale' href='#' style='color:black;'>
			<div class='thelabel'>$pro_label</div>
			<div class='label-background'></div>
			</a>
			";
		}

		echo "
		<div class='col-md-3 col-sm-6 center-responsive'>
			<div class='product'>
				<a href='$pro_url''>
					<img src='admin_area/product_images/$pro_img1' class='img-responsive'></img>
				</a>
					<div class='text'>
					<center>
					<hr>

					
					</center>
						<h3><a href='$pro_url'>'$pro_title'</a></h3>
							<p class='price'>RM $product_price $product_psp_price</p>
							<p class='buttons'>
								<a href='$pro_url' class='btn btn-default'>View Details</a>
								<a href='$pro_url' class='btn btn-primary'>
									<i class='fa fa-shopping-cart'></i>Add to cart
								</a>	
							</p>
					</div>
					$product_label


			</div>	
		</div>
		";
		}

		?>
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

<?php } ?>