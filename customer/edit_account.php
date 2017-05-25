<h1 align="center">Edit Profile</h1>

<form action="" method="post" enctype="multipart/form-data"><!-- form starts -->
	<div class="form-group"><!-- form group starts -->
		<label>Name</label>
		<input type="text" name="c_name" class="form-control" required>
	</div><!-- form group ends -->

	<div class="form-group"><!-- form group starts -->
		<label>Email</label>
		<input type="text" name="c_email" class="form-control" required>
	</div><!-- form group ends -->

	<div class="form-group"><!-- form group starts -->
		<label>Country</label>
		<input type="text" name="c_country" class="form-control" required>
	</div><!-- form group ends -->

	<div class="form-group"><!-- form group starts -->
		<label>City</label>
		<input type="text" name="c_city" class="form-control" required>
	</div><!-- form group ends -->

	<div class="form-group"><!-- form group starts -->
		<label>Contact Number</label>
		<input type="text" name="c_contact" class="form-control" required>
	</div><!-- form group ends -->

	<div class="form-group"><!-- form group starts -->
		<label>Address</label>
		<input type="text" name="c_address" class="form-control" required>
	</div><!-- form group ends -->

	<div class="form-group"><!-- form group starts -->
		<label>Image</label>
		<input type="file" name="c_image" class="form-control" required><br>
		<img src="customer_images/flag.jpg" width="100" height="100" class="img-responsive">
	</div><!-- form group ends -->
</form><!-- form ends -->

<div class="text-center"><!-- text-center starts -->
<button name="update" class="btn btn-primary">
<i class="fa fa-user-md"></i> Update
</button>
</div><!-- text-center ends -->