<?php

$db = mysqli_connect("localhost","root","","ecom_store");

/// IP address code starts ///
function getRealUserIp()
{
	switch(true)
	{
		case (!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
		case (!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
		case (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
		default : return $_SERVER['REMOTE_ADDR'];
	}
}
/// IP address code ends ///

/// add_cart function starts///
function add_cart()
{
	global $db;

	if (isset($_GET['add_cart'])) {
		$ip_add = getRealUserIp();
		$p_id =$_GET['add_cart'];
		$product_qty = $_POST['product_qty'];		

		$check_product = "select * from cart where ip_add='$ip_add' AND p_id=$p_id";
		$run_check = mysqli_query($db, $check_product);

		if (mysqli_num_rows($run_check)>0) {
		

			echo "<script>alert('This Product is already added in cart')</script>";

			echo "<script>window.open('details.php?pro_id=$p_id','_self')</script>";
		}
		else
		{
			$get_price = "select * from products where product_id
			='$p_id'";
			$run_price = mysqli_query($db, $get_price);
			$row_price = mysqli_fetch_array($run_price);

			$pro_price = $row_price['product_price'];
			$pro_psp_price = $row_price['product_psp_price'];
			$pro_label = $row_price['product_label'];

			if ($pro_label == "Sale" or $pro_label == "Promo!")
			{
				$product_price = $pro_psp_price;
			}
			else
			{

				$product_price = $pro_price;
			}			

			$query = "insert into cart (p_id, ip_add, qty, p_price) values 
			('$p_id','$ip_add','$product_qty', '$product_price')";
			$run_query = mysqli_query($db, $query);
			echo "<script>window.open('details.php?pro_id=$p_id','_self')</script>";
		}
	}
}

/// add_cart function ends///

/// items function starts///

function total_price()
{
	global $db;
	$ip_add = getRealUserIp();
	$total = 0;
	$select_cart = "select * from cart where ip_add='$ip_add'";
	$run_cart = mysqli_query($db, $select_cart);

	while ($record=mysqli_fetch_array($run_cart)) {
		$pro_id=$record['p_id'];
		$pro_qty = $record['qty'];
		$sub_total = $record['p_price'] * $pro_qty;
		$total += $sub_total;
		
	}

	echo "RM" . $total;
}

function items(){

global $db;

$ip_add = getRealUserIp();

$get_items = "select * from cart where ip_add='$ip_add'";

$run_items = mysqli_query($db,$get_items);

$count_items = mysqli_num_rows($run_items);

echo $count_items;

}


/// items function ends///


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
		<div class='col-md-4 col-sm-6 single'>
			<div class='product'>
				<a href='$pro_url'>
					<img src='admin_area/product_images/$pro_img1' class='img-responsive'></img>
				</a>
					<div class='text'>
					<center>
					<hr>					
					</center>
						<h3><a href='$pro_url'>$pro_title</a></h3>
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

/// getCats() ends ///

/// getpcatpro() starts ///

/// getpcatpro() ends ///

/// getcatpro() starts ///


/// getcatpro() ends ///


function getProducts()
{
/// getProducts function Code Starts ///

global $db;

$aWhere = array();

/// Manufacturers Code Starts ///

if(isset($_REQUEST['man'])&&is_array($_REQUEST['man'])){

foreach($_REQUEST['man'] as $sKey=>$sVal){

if((int)$sVal!=0){

$aWhere[] = 'manufacturer_id='.(int)$sVal;

}

}

}

/// Manufacturers Code Ends ///

/// Products Categories Code Starts ///

if(isset($_REQUEST['p_cat'])&&is_array($_REQUEST['p_cat'])){

foreach($_REQUEST['p_cat'] as $sKey=>$sVal){

if((int)$sVal!=0){

$aWhere[] = 'p_cat_id='.(int)$sVal;

}

}

}

/// Products Categories Code Ends ///

/// Categories Code Starts ///

if(isset($_REQUEST['cat'])&&is_array($_REQUEST['cat'])){

foreach($_REQUEST['cat'] as $sKey=>$sVal){

if((int)$sVal!=0){

$aWhere[] = 'cat_id='.(int)$sVal;

}

}

}

/// Categories Code Ends ///

$per_page=6;

if(isset($_GET['page'])){

$page = $_GET['page'];

}else {

$page=1;

}

$start_from = ($page-1) * $per_page ;

$sLimit = " order by 1 DESC LIMIT $start_from,$per_page";

$sWhere = (count($aWhere)>0?' WHERE '.implode(' or ',$aWhere):'').$sLimit;

$get_products = "select * from products  ".$sWhere;

$run_products = mysqli_query($db,$get_products);

while($row_products=mysqli_fetch_array($run_products)){

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
		<div class='col-md-4 col-sm-6 center-responsive'>
			<div class='product'>
				<a href='$pro_url'>
					<img src='admin_area/product_images/$pro_img1' class='img-responsive'></img>
				</a>
					<div class='text'>
					<center>
					<hr>					
					</center>
						<h3><a href='$pro_url'>$pro_title</a></h3>
							<p class='price'>RM $product_price $product_psp_price</p>
							<p class='buttons'>
								<a href='pro_url' class='btn btn-default'>View Details</a>
								<a href='pro_url' class='btn btn-primary'>
									<i class='fa fa-shopping-cart'></i>Add to cart
								</a>	
							</p>
					</div>
					$product_label


			</div>	
		</div>
		";

}
/// getProducts function Code Ends ///
}

function getPaginator()
{
/// getPaginator Function Code Starts ///

$per_page = 6;

global $db;

$aWhere = array();

$aPath = '';

/// Manufacturers Code Starts ///

if(isset($_REQUEST['man'])&&is_array($_REQUEST['man'])){

foreach($_REQUEST['man'] as $sKey=>$sVal){

if((int)$sVal!=0){

$aWhere[] = 'manufacturer_id='.(int)$sVal;

$aPath .= 'man[]='.(int)$sVal.'&';

}

}

}

/// Manufacturers Code Ends ///

/// Products Categories Code Starts ///

if(isset($_REQUEST['p_cat'])&&is_array($_REQUEST['p_cat'])){

foreach($_REQUEST['p_cat'] as $sKey=>$sVal){

if((int)$sVal!=0){

$aWhere[] = 'p_cat_id='.(int)$sVal;

$aPath .= 'p_cat[]='.(int)$sVal.'&';

}

}

}

/// Products Categories Code Ends ///

/// Categories Code Starts ///

if(isset($_REQUEST['cat'])&&is_array($_REQUEST['cat'])){

foreach($_REQUEST['cat'] as $sKey=>$sVal){

if((int)$sVal!=0){

$aWhere[] = 'cat_id='.(int)$sVal;

$aPath .= 'cat[]='.(int)$sVal.'&';

}

}

}

/// Categories Code Ends ///

$sWhere = (count($aWhere)>0?' WHERE '.implode(' or ',$aWhere):'');

$query = "select * from products ".$sWhere;

$result = mysqli_query($db,$query);

$total_records = mysqli_num_rows($result);

$total_pages = ceil($total_records / $per_page);

echo "<li><a href='shop.php?page=1";

if(!empty($aPath)){ echo "&".$aPath; }

echo "' >".'First Page'."</a></li>";

for ($i=1; $i<=$total_pages; $i++){

echo "<li><a href='shop.php?page=".$i.(!empty($aPath)?'&'.$aPath:'')."' >".$i."</a></li>";

};

echo "<li><a href='shop.php?page=$total_pages";

if(!empty($aPath)){ echo "&".$aPath; }

echo "' >".'Last Page'."</a></li>";

/// getPaginator Function Code Ends ///
}

?>