<div id="footer"><!-- Footer starts -->
	<div class="container"><!-- container starts -->
		<div class="row"><!-- row starts -->
			<div class="col-md-3 col-sm-6"><!-- col-md-3 col-sm-6 starts -->
				<h4>Pages</h4>
				<ul><!-- ul starts-->
					<li><a href="cart.php">Shopping Cart</a></li>
					<li><a href="contact.php">Contact Us</a></li>
					<li><a href="shop.php">Shop</a></li>
					<li><a href="checkout.php">My Account</a></li>
				</ul><!-- ul end-->
				<hr>
				<h4>User Section</h4>
				<ul><!-- ul starts -->
					<li><a href="checkout.php">Login</a></li>
					<li><a href="customer_register.php">Register</a></li>
				</ul><!-- ul ends -->
				<hr class="hidden-md hidden-lg hidden-sm">

			</div><!-- col-md-3 col-sm-6 ends -->

			<div class="col-md-3 col-sm-6"><!--col-md-3 col-sm-6 starts -->
				<h4>Top Products Categories</h4>
					<ul><!--ul starts -->
						<?php
							$get_p_cats = "select * from product_categories";
							$run_p_cats = mysqli_query($con, $get_p_cats);

							while ($row_p_cats = mysqli_fetch_array($run_p_cats)) {
								$p_cat_id = $row_p_cats['p_cat_id'];
								$p_cat_title = $row_p_cats['p_cat_title'];
								echo "
									<li><a href='shop.php?p_cat=$p_cat_id'> $p_cat_title</a></li>
								";
							}
						?>				
					</ul><!--ul ends -->
						<hr class="hidden-md hidden-lg">

			</div><!--col-md-3 col-sm-6 ends -->

			<div class="col-md-3 col-sm-6"><!--col-md-3 col-sm-6 starts -->
				<h4>Where To Find Us</h4>
				<p>
					<strong>Hitech Infinity</strong>
					<br>Subang Jaya
					<br>Selangor.					
				</p>

				<a href="contact.php">Contact Us Page.</a>
				<hr class="hidden-md hidden-lg">
			</div><!--col-md-3 col-sm-6 ends -->

			<div class="col-md-3 col-sm-6"><!--col-md-3 col-sm-6 starts -->

				<h4>Get The News</h4>
				<p class="text-muted">
					We update new products every week!
				</p>

				<form action="" method="post"> <!--form starts -->
					<div class="input-group"><!--input group starts -->
						<input type="text" class="form-control" name="email">
							<span class="input-group-btn">
								<input type="submit" value="subscribe" class="btn btn-default">
							</span>	

					</div><!--input group ends -->

				</form><!--form ends -->

				<hr>

				<h4>Stay In Touch</h4>

				<p class="social"><!--social starts -->
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
					<a href="#"><i class="fa fa-google-plus"></i></a>

				</p><!-- social ends -->

			</div><!--col-md-3 col-sm-6 ends -->

		</div><!-- row ends -->
	</div><!-- container starts -->
</div><!-- Footer ends -->

<div id="copyright"><!--copyright starts -->
	<div class="container"><!--container starts -->
		<div class="col-md-6"><!--col md 6 starts -->
			<p class="pull-left">&copy; 2017 Hitech Infinity</p>
		</div><!--col md 6 ends -->
			<div class="col-md-6"><!--col md 6 starts -->
				<p class="pull-right">
					Template by <a href="#">Hitech Infinity</a>
				</p>
			</div><!--col md 6 ends -->
	</div><!--container ends -->
</div><!--copyright ends -->