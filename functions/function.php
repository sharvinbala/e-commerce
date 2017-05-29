<?php

$db = mysqli_connect("localhost","root","","ecom_store");

function getPro()
{
	global $db;

	$get_products = "select * from products order by 1 DESC LIMIT 0,8";
	$run_products = mysqli_query($db, $get_products);

	while ($row_products=mysqli_fetch_array($run_products)) 
	{
		$pro_id = $row_products['product_id'];
		$pro_title = $row_products['product_title'];
		$pro_price = $row_products['product_price'];
		$pro_img1 = $row_products['product_img1'];

		echo "
		<div class='col-md-4 col-sm-6 single'>
			<div class='product'>
				<a href='details.php?pro_id=$pro_id'>
					<img src='admin_area/product_images/$pro_img1' class='img-responsive'></img>
				</a>
					<div class='text'>
						<h3><a href='details.php?pro_id=$pro_id'>$pro_title</a></h3>
							<p class='price'>RM $pro_price</p>
							<p class='buttons'>
								<a href='details.php?pro_id=$pro_id' class='btn btn-default'>View Details</a>
								<a href='details.php?pro_id=$pro_id' class='btn btn-primary'>
									<i class='fa fa-shopping-cart'></i>Add to cart
								</a>	
							</p>
					</div>
			</div>	
		</div>
		";
	}

}

/// getPCats function starts ///
function getPCats()
{
	global $db;
	$get_p_cats = "select * from product_categories";
	$run_p_cats = mysqli_query($db, $get_p_cats);

	while ($row_p_cats = mysqli_fetch_array($run_p_cats)) {
			$p_cat_id=$row_p_cats['p_cat_id'];
			$p_cat_title=$row_p_cats['p_cat_title'];

			echo "
				<li><a href='shop.php?p_cat=$p_cat_id'> $p_cat_title</a></li>

			";
	}


}
/// getPCats function ends ///


/// getCats() starts ///
function getCats()
{
	global $db;
	$get_cats = "select * from categories";
	$run_cats = mysqli_query($db, $get_cats);

	while ($row_cats = mysqli_fetch_array($run_cats)) {
		$cat_id = $row_cats['cat_id'];
		$cat_title = $row_cats['cat_title'];

		echo "
			<li><a href='shop.php?cat=$cat_id'> $cat_title</a></li>

		";
	}


}
/// getCats() ends ///

/// getpcatpro() starts ///
function getpcatpro()
{
	global $db;

	if (isset($_GET['p_cat'])) {
		$p_cat_id = $_GET['p_cat'];
		$get_p_cat = "select * from product_categories where p_cat_id ='$p_cat_id'";
		$run_p_cat = mysqli_query($db, $get_p_cat);
		$row_p_cat = mysqli_fetch_array($run_p_cat);
		$p_cat_title = $row_p_cat['p_cat_title'];
		$p_cat_desc = $row_p_cat['p_cat_desc'];
		$get_products = "select * from products where p_cat_id='$p_cat_id'";

		$run_products = mysqli_query($db, $get_products);
		$count = mysqli_num_rows($run_products);

		if ($count == 0) {
			echo "
				<div class='box'>
					<h1>No product found in this product category.</h1>
				</div>
			";
		}
		else
		{
			echo "
			<div class='box'>
				<h1>$p_cat_title</h1>
				<p>$p_cat_desc</p>
			</div>
			";
		}

		while ($row_products = mysqli_fetch_array($run_products)) {
			$pro_id = $row_products['product_id'];
			$pro_title = $row_products['product_title'];
			$pro_price = $row_products['product_price'];
			$pro_img1 = $row_products['product_img1'];

			echo "
			<div class='col-md-4 col-sm-6 center-responsive'>
				<div class='product'>
					<a href='details.php?pro_id=$pro_id'>
					<img src='admin_area/product_images/$pro_img1' class='img-responsive'>
					</a>
					<div class='text'>
						<h3><a href='details.php?pro_id=$pro_id'> $pro_title</a></h3>
						<p class='price'>RM $pro_price</p>
						<p class='buttons'>
							<a href='details.php?pro_id=$pro_id' class='btn btn-default'>View Details</a>
							<a href='details.php?pro_id=$pro_id' class='btn btn-default'>
							<i class='fa fa-shopping-cart'></i>Add to cart
							</a>
						</p>
					</div>
				</div>
			</div>
			";
		}

	}
}

/// getpcatpro() ends ///

/// getcatpro() starts ///
function getcatpro()
{
	global $db;

	if (isset($_GET['cat'])) {
		$cat_id = $_GET['cat'];
		$get_cat = "select * from categories where cat_id='$cat_id'";
		$run_cat = mysqli_query($db, $get_cat);
		$row_cat = mysqli_fetch_array($run_cat);
		$cat_title = $row_cat['cat_title'];
		$cat_desc = $row_cat['cat_desc'];
		$get_products = "select * from products where cat_id='$cat_id'";
		$run_products = mysqli_query($db, $get_products);
		$count = mysqli_num_rows($run_products);

		if ($count==0) {
			echo "
			<div class='box'>
				<h1>No products currently available in this category.</h1>
			</div>
			";
		}
		else
		{
			echo "
				<div class='box'>
				<h1>$cat_title</h1>
				<p>$cat_desc</p>
				</div>
			";
		}

		while ($row_products=mysqli_fetch_array($run_products)) {
			$pro_id = $row_products['product_id'];
			$pro_title = $row_products['product_title'];
			$pro_price = $row_products['product_price'];
			$pro_desc = $row_products['product_desc'];
			$pro_img1 = $row_products['product_img1'];

			echo "
			<div class='col-md-4 col-sm-6 center-responsive'>
				<div class='product'>
					<a href='details.php?pro_id=$pro_id'>
						<img src='admin_area/product_images/$pro_img1' class='img-responsive'>
					</a>
<div class='text'>
<h3><a href='details.php?pro_id=$pro_id'>$pro_title</a></h3>
<p class='price'>RM $pro_price </p>
<p class='buttons'>
<a href='details.php?pro_id=$pro_id' class='btn btn-default'> View Details</a>
<a href='details.php?pro_id=$pro_id' class='btn btn-primary'>
<i class='fa fa-shopping-cart'></i>Add to cart
</a>
</p>
</div>
				</div>
			</div>

			";

		}

	}
}

/// getcatpro() ends ///
?>