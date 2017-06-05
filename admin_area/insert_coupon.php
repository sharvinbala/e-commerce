<?php

include("includes/db.php");

if (!isset($_SESSION['admin_email'])) {
	echo "<script>window.open('login.php','_self')</script>";
}
else
{

?>

<div class="row"><!-- 1 row starts -->
<div class="col-lg-12"><!-- col lg 12 row starts -->
<ol class="breadcrumb">
<li class="active">
<i class="fa fa-dashboard"></i> Dashboard / Insert Coupon

</li>
</ol>
</div><!-- col lg 12 ends -->
</div><!-- 1 row ends -->

<div class="row "><!-- 2 row starts -->
<div class="col-lg-12"><!-- col lg 12 starts -->
<div class="panel panel-default"><!-- panel default starts -->
<div class="panel-heading"><!-- panel heading starts -->
<h3 class="panel-title"><!-- panel title starts -->
<i class="fa fa-money fa-fw"></i> Insert Coupon

</h3><!-- panel title ends-->
</div><!-- panel heading ends -->
<div class="panel-body"><!-- panel body starts -->

<form class="form-horizontal" method="post" enctype="multipart/form-data" action="">

<div class="form-group"><!-- form group starts -->
<label class="col-md-3 control-label"> Coupon Title</label>
<div class="col-md-6">
<input type="text" name="coupon_title" class="form-control">
</div>
</div><!-- form group ends -->

<div class="form-group"><!-- form group starts -->
<label class="col-md-3 control-label"> Coupon Price</label>
<div class="col-md-6">
<input type="text" name="coupon_price" class="form-control">
</div>
</div><!-- form group ends -->

<div class="form-group"><!-- form group starts -->
<label class="col-md-3 control-label"> Coupon Code</label>
<div class="col-md-6">
<input type="text" name="coupon_code" class="form-control">
</div>
</div><!-- form group ends -->

<div class="form-group"><!-- form group starts -->
<label class="col-md-3 control-label"> Coupon Limit</label>
<div class="col-md-6">
<input type="number" name="coupon_limit" value="1" class="form-control">
</div>
</div><!-- form group ends -->

<div class="form-group"><!-- form group starts -->
<label class="col-md-3 control-label"> Select Coupon Product</label>
<div class="col-md-6">
<select name="product_id" class="form-control">
<option>Select a product</option>
<?php
$get_p = "select * from products";
$run_p = mysqli_query($con, $get_p);

while ($row_p = mysqli_fetch_array($run_p)) {
	$p_id = $row_p['product_id'];
	$p_title = $row_p['product_title'];

	echo "<option value='$p_id'>$p_title</option>";
}

?>
</select>
</div>
</div><!-- form group ends -->

<div class="form-group"><!-- form group starts -->
<label class="col-md-3 control-label"></label>
<div class="col-md-6">
<input type="submit" name="submit" class="btn btn-primary form-control"
value="Insert Coupon">
</div>
</div><!-- form group ends -->


</form>

</div><!-- panel body ends -->
</div><!-- panel default ends -->
</div><!-- col lg 12 ends -->
</div><!-- 2 row ends -->


<?php } ?>