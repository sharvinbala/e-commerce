<?php
$customer_session = $_SESSION['customer_email'];
$get_customer = "select * from customers where customer_email='$customer_session'";
$run_customer = mysqli_query($con, $get_customer);
$row_customer = mysqli_fetch_array($run_customer);

$customer_id = $row_customer['customer_id'];
$customer_name = $row_customer['customer_name'];
$customer_email = $row_customer['customer_email'];
$customer_country = $row_customer['customer_country'];
$customer_city = $row_customer['customer_city'];
$customer_contact = $row_customer['customer_contact'];
$customer_address = $row_customer['customer_address'];
$customer_image = $row_customer['customer_image'];

?>

<h1 align="center">Edit Profile</h1>

<form action="" method="post" enctype="multipart/form-data"><!-- form starts -->
	<div class="form-group"><!-- form group starts -->
		<label>Name</label>
		<input type="text" name="c_name" class="form-control" required value="<?php echo $customer_name; ?>">
	</div><!-- form group ends -->

	<div class="form-group"><!-- form group starts -->
		<label>Email</label>
		<input type="text" name="c_email" class="form-control" required value="<?php echo $customer_email; ?>">
	</div><!-- form group ends -->

	<div class="form-group"><!-- form group starts -->
		<label>Country</label>
		<input type="text" name="c_country" class="form-control" required value="<?php echo $customer_country; ?>">
	</div><!-- form group ends -->

	<div class="form-group"><!-- form group starts -->
		<label>City</label>
		<input type="text" name="c_city" class="form-control" required value="<?php echo $customer_city; ?>">
	</div><!-- form group ends -->

	<div class="form-group"><!-- form group starts -->
		<label>Contact Number</label>
		<input type="text" name="c_contact" class="form-control" required value="<?php echo $customer_contact; ?>">
	</div><!-- form group ends -->

	<div class="form-group"><!-- form group starts -->
		<label>Address</label>
		<input type="text" name="c_address" class="form-control" required value="<?php echo $customer_address; ?>">
	</div><!-- form group ends -->

	<div class="form-group"><!-- form group starts -->
		<label>Image</label>
		<input type="file" name="c_image" class="form-control" required><br>
		<img src="customer_images/<?php echo $customer_image; ?>" width="100" height="100" class="img-responsive">
	</div><!-- form group ends -->
</form><!-- form ends -->

<div class="text-center"><!-- text-center starts -->
<button name="update" class="btn btn-primary">
<i class="fa fa-user-md"></i> Update
</button>
</div><!-- text-center ends -->