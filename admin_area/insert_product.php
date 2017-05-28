<?php include("includes/db.php"); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Insert Products</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
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
			<label class="col-md-3 control-label">Products Title</label>
				<div class="col-md-6"><!--col md 6 starts -->
					<input type="text" name="product_title" class="form-control" required> 
				</div><!--col md 6 ends -->
		</div><!--form-group ends -->

		<div class="form-group"><!--form-group starts -->
			<label class="col-md-3 control-label">Products Title</label>
				<div class="col-md-6"><!--col md 6 starts -->
					<input type="text" name="product_title" class="form-control" required> 
				</div><!--col md 6 ends -->
		</div><!--form-group ends -->

		<div class="form-group"><!--form-group starts -->
			<label class="col-md-3 control-label">Products Title</label>
				<div class="col-md-6"><!--col md 6 starts -->
					<input type="text" name="product_title" class="form-control" required> 
				</div><!--col md 6 ends -->
		</div><!--form-group ends -->

		<div class="form-group"><!--form-group starts -->
			<label class="col-md-3 control-label">Products Title</label>
				<div class="col-md-6"><!--col md 6 starts -->
					<input type="text" name="product_title" class="form-control" required> 
				</div><!--col md 6 ends -->
		</div><!--form-group ends -->

		<div class="form-group"><!--form-group starts -->
			<label class="col-md-3 control-label">Products Title</label>
				<div class="col-md-6"><!--col md 6 starts -->
					<input type="text" name="product_title" class="form-control" required> 
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
