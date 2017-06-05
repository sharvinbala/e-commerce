<?php 
if (!isset($_SESSION['admin_email'])) {
	echo "<script>window.open('login.php','_self')</script>";
}
else
{

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Insert Products</title>
		  <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  		  <script>tinymce.init({ selector:'textarea' });</script>
	</head>

	<body>
<div class="row"><!--row starts -->
	<div class="col-lg-12"><!--col lg 12 starts -->
		<ol class="breadcrumb"><!--breadcrumb starts -->
			<li class="active">
				<i class="fa fa-dashboard"></i> Dashboard / Insert Products
			</li>
		</ol><!--breadcrumb ends -->
	</div><!--col lg 12 ends -->
</div><!--row ends -->

<div class="row"><!-- 2 row starts -->
	<div class="col-lg-12"><!--col lg 12 starts -->
		<div class="panel panel-default"><!--row starts --><!--panel default starts -->
			<div class="panel-heading"><!--panel heading starts -->
				<h3 class="panel-title">
					<i class="fa fa-money fa-fw"></i> Insert Products
				</h3>
			</div><!--panel heading ends -->

<div class="panel-body"><!--panel body starts -->
	<form class="form-horizontal" method="post" enctype="multipart/form-data"><!--form horizontal starts -->

		<div class="form-group"><!--form-group starts -->
			<label class="col-md-3 control-label">Products Title</label>
				<div class="col-md-6"><!--col md 6 starts -->
					<input type="text" name="product_title" class="form-control" required> 
				</div><!--col md 6 ends -->
		</div><!--form-group ends -->

		<div class="form-group"><!--form-group starts -->
			<label class="col-md-3 control-label">Products URL</label>
				<div class="col-md-6"><!--col md 6 starts -->
					<input type="text" name="product_url" class="form-control" required> 
					<br>
					<p style="font-size:15px; font-weight: bold;">
						Product URL Example: disposable-basic-set-254
					</p>
				</div><!--col md 6 ends -->
		</div><!--form-group ends -->
		
		<div class="form-group"><!--form-group starts -->
			<label class="col-md-3 control-label">Select Manufacturer</label>
				<div class="col-md-6"><!--col md 6 starts -->
					<select class="form-control" name="manufacturer">
						<option>Select a manufacturer</option>
						<?php
						$get_manufacturer = "select * from manufacturers";
						$run_manufacturer = mysqli_query($con, $get_manufacturer);
						while ($row_manufacturer = mysqli_fetch_array($run_manufacturer)) {
							$manufacturer_id = $row_manufacturer['manufacturer_id'];
							$manufacturer_title = $row_manufacturer['manufacturer_title'];

							echo "<option value='$manufacturer_id'>
							$manufacturer_title
							</option>";
						}
						?>
					</select>
				</div><!--col md 6 ends -->
		</div><!--form-group ends -->
		


		<div class="form-group"><!--form-group starts -->
			<label class="col-md-3 control-label">Products Category</label>
				<div class="col-md-6"><!--col md 6 starts -->
					<select name="product_cat" class="form-control">
						<option>Select a Product Category</option>
		<?php
			$get_p_cats= "SELECT * FROM product_categories";
			$run_p_cats = mysqli_query($con, $get_p_cats);

			while($row_p_cats=mysqli_fetch_array($run_p_cats))
			{
				$p_cat_id = $row_p_cats['p_cat_id'];
				$p_cat_title = $row_p_cats['p_cat_title'];

				echo "
					<option value='$p_cat_id'> $p_cat_title</option>
				";

			}

		?>
					</select>
				</div><!--col md 6 ends -->
		</div><!--form-group ends -->

		<div class="form-group"><!--form-group starts -->
			<label class="col-md-3 control-label">Category</label>
				<div class="col-md-6"><!--col md 6 starts -->
					<select name="cat" class="form-control">
						<option>Select a category</option>
<?php
			$get_cat= "SELECT * FROM categories";
			$run_cat = mysqli_query($con, $get_cat);

			while($row_cat=mysqli_fetch_array($run_cat))
			{
				$cat_id = $row_cat['cat_id'];
				$cat_title = $row_cat['cat_title'];

				echo "
					<option value='$cat_id'> $cat_title</option>
				";

			}

		?>
					</select>
				</div><!--col md 6 ends -->
		</div><!--form-group ends -->

		<div class="form-group"><!--form-group starts -->
			<label class="col-md-3 control-label">Product Image 1</label>
				<div class="col-md-6"><!--col md 6 starts -->
					<input type="file" name="product_img1" class="form-control" required> 
				</div><!--col md 6 ends -->
		</div><!--form-group ends -->

		<div class="form-group"><!--form-group starts -->
			<label class="col-md-3 control-label">Product Image 2</label>
				<div class="col-md-6"><!--col md 6 starts -->
					<input type="file" name="product_img2" class="form-control" required> 
				</div><!--col md 6 ends -->
		</div><!--form-group ends -->

		<div class="form-group"><!--form-group starts -->
			<label class="col-md-3 control-label">Product Image 3</label>
				<div class="col-md-6"><!--col md 6 starts -->
					<input type="file" name="product_img3" class="form-control" required> 
				</div><!--col md 6 ends -->
		</div><!--form-group ends -->

		<div class="form-group"><!--form-group starts -->
			<label class="col-md-3 control-label">Product Price</label>
				<div class="col-md-6"><!--col md 6 starts -->
					<input type="text" name="product_price" class="form-control" required> 
				</div><!--col md 6 ends -->
		</div><!--form-group ends -->

		<div class="form-group"><!--form-group starts -->
			<label class="col-md-3 control-label">Product Discount</label>
				<div class="col-md-6"><!--col md 6 starts -->
					<input type="text" class="form-control" name="psp_price"></textarea>
				</div><!--col md 6 ends -->
		</div><!--form-group ends -->

		<div class="form-group"><!--form-group starts -->
			<label class="col-md-3 control-label">Product Keywords</label>
				<div class="col-md-6"><!--col md 6 starts -->
					<input type="text" name="product_keywords" class="form-control" required> 
				</div><!--col md 6 ends -->
		</div><!--form-group ends -->

		<div class="form-group"><!--form-group starts -->
			<label class="col-md-3 control-label">Product Description</label>
				<div class="col-md-6"><!--col md 6 starts -->
					<textarea name="product_desc" class="form-control" rows="6" cols="19"></textarea>
				</div><!--col md 6 ends -->
		</div><!--form-group ends -->

		<div class="form-group"><!--form-group starts -->
			<label class="col-md-3 control-label">Product Label</label>
				<div class="col-md-6"><!--col md 6 starts -->
					<input type="text" name="product_label" class="form-control"></textarea>
				</div><!--col md 6 ends -->
		</div><!--form-group ends -->

		<div class="form-group"><!--form-group starts -->
			<label class="col-md-3 control-label"></label>
				<div class="col-md-6"><!--col md 6 starts -->
					<input type="submit" name="submit" value="Insert Product" class="btn btn-primary form-control">
				</div><!--col md 6 ends -->
		</div><!--form-group ends -->

	</form><!--form horizontal ends -->
</div><!--panel body ends -->			

		</div><!--panel default ends -->
	</div><!--col lg 12 ends -->
</div><!-- 2 row ends -->

		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>

<?php
	if(isset($_POST['submit']))
	{
		$product_title = $_POST['product_title'];
		$product_cat = $_POST['product_cat'];
		$cat= $_POST['cat'];
		$manufacturer_id = $_POST['manufacturer'];
		$product_price = $_POST['product_price'];
		$psp_price = $_POST['product_psp_price'];
		$product_desc = $_POST['product_desc'];
		$product_keywords = $_POST['product_keywords'];
		$product_label = $_POST['product_label'];
		$product_url = $_POST['product_url'];

		$product_img1 = $_FILES['product_img1']['name'];
		$product_img2 = $_FILES['product_img2']['name'];
		$product_img3 = $_FILES['product_img3']['name'];

		$temp_name1 = $_FILES['product_img1']['tmp_name'];
		$temp_name2 = $_FILES['product_img2']['tmp_name'];
		$temp_name3 = $_FILES['product_img3']['tmp_name'];

		move_uploaded_file($temp_name1, "product_images/$product_img1");
		move_uploaded_file($temp_name2, "product_images/$product_img2");
		move_uploaded_file($temp_name3, "product_images/$product_img3");

		$insert_product = "INSERT INTO products (p_cat_id, cat_id, manufacturer_id, date, product_title,
			product_url, product_img1, product_img2, product_img3,product_price, product_psp_price, product_desc, 
			product_keywords, product_label) 
			values ('$product_cat','$cat','$manufacturer_id', NOW(),'$product_title',
				'$product_url','$product_img1',
			'$product_img2','$product_img3',
			'$product_price', '$psp_price', '$product_desc', '$product_keywords', '$product_label')";

			$run_product = mysqli_query($con, $insert_product);

			if($run_product)
			{
				echo "<script>alert('Product has been inserted successfully');</script>";
				echo "<script>window.open('index.php?view_products','_self')</script>";
				
			}
	}

?>
<?php } ?>