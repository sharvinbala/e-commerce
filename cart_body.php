<?php session_start();

include ("includes/db.php"); 
include ("functions/function.php");

?>


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
					<?php
						$ip_add = getRealUserIp();
						$select_cart = "select * from cart where ip_add='$ip_add'";
						$run_cart = mysqli_query($con, $select_cart);
						$count = mysqli_num_rows($run_cart);
					?>
					<p class="text-muted">You currently have <?php echo $count; ?> items in your cart.</p>
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

										<?php
											$total = 0;

											while ($row_cart=mysqli_fetch_array($run_cart)) {
											$pro_id = $row_cart['p_id'];											
											$pro_qty = $row_cart['qty'];
											$only_price = $row_cart['p_price'];
											$get_products = "select * from products where product_id='$pro_id'";
											$run_products = mysqli_query($con, $get_products);

											while ($row_products = mysqli_fetch_array($run_products)) {
												$product_title = $row_products['product_title'];
												$product_img1 = $row_products['product_img1'];												
												$sub_total = $only_price* $pro_qty;
												$_SESSION['pro_qty'] = $pro_qty;

												$total += $sub_total;
										?>

										<tr><!--tr starts -->
											<td>
												<img src="admin_area/product_images/<?php echo $product_img1; ?>" class="img-responsive">
											</td>
											<td>
												<a href="#"><?php echo $product_title; ?></a>
											</td>	
											
											<td>
											<input type="text" name="quantity" value="<?php echo $_SESSION['pro_qty']; ?>" 
											data-product_id="<?php echo $pro_id; ?>" class="quantity form-control">
											</td>

											<td>
												RM <?php echo $only_price; ?>
											</td>		
											 <td>
												<input type="checkbox" name="remove[]" value="<?php echo $pro_id; ?>">
											</td>								
											<td>
												RM <?php echo $sub_total; ?>
											</td>
										</tr><!--tr ends -->
										<?php 
									}
										} 

										?>

									</tbody><!--tbody ends -->
									<tfoot><!--tfoot starts -->
										<tr>
											<th colspan="5">Total</th>
											<th colspan="2">RM <?php echo $total; ?></th>
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

			<?php 
				function update_cart()
				{
					global $con;
					if(isset($_POST['update']))
					{
						foreach ($_POST['remove'] as $remove_id) {
							$delete_product = "delete from cart where p_id='$remove_id'";
							$run_delete = mysqli_query($con, $delete_product);
							if ($run_delete) {
								echo "
									<script>window.open('cart.php','_self')</script>
								";
							}
						}
					}
				}
echo @$up_cart = update_cart();

?>
<div id="row same-height-row"><!--row same-height-row ends -->
	<div class="col-md-3 col-sm-6"><!--col-md-3 col-sm-6 stards -->
		<div class="box same-height headline"><!--box same-height headline stards -->
			<h3 class="text-center">You may also like these products.</h3>
		</div><!--box same-height headline ends -->
	</div><!--col-md-3 col-sm-6 ends -->
<?php
$get_products = "select * from products order by rand() LIMIT 0,3";
$run_products = mysqli_query($con, $get_products);
while ($row_products=mysqli_fetch_array($run_products)) {
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
				<a href='details.php?pro_id=$pro_id'>
					<img src='admin_area/product_images/$pro_img1' class='img-responsive'></img>
				</a>
					<div class='text'>
					<center>
					<hr>

					
					</center>
						<h3><a href='details.php?pro_id=$pro_id'>$pro_title</a></h3>
							<p class='price'>RM $product_price $product_psp_price</p>
							<p class='buttons'>
								<a href='details.php?pro_id=$pro_id' class='btn btn-default'>View Details</a>
								<a href='details.php?pro_id=$pro_id' class='btn btn-primary'>
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
								<th>RM <?php echo $total; ?>.00</th>
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
								<th>RM <?php echo $total; ?>.00</th>
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
	<script>
	$(document). ready(function(data){
	$(document).on('keyup', '.quantity', function () {
		var id = $(this). data("product_id");
		var quantity = $(this). val();
		if (quantity != '') 
		{
			$.ajax ({
				url:"change.php",
				method:"POST",
				data:{id:id, quantity:quantity},
				success: function (data) {
					$("body").load('cart_body.php');
				}
			});
		}

	});

	});


	</script>
	</body>