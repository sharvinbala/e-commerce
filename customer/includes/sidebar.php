<div class="panel panel-default sidebar-menu"><!--sidebar menu starts -->
	<div class="panel-heading"><!--panel heading starts -->
		<center>
			<img src="customer_images/flag.jpg" class="img-responsive">
		</center>
		<br>
		<h3 align="center" class="panel-title">Name: Sharvin</h3>
	</div><!--panel heading ends -->

		<div class="panel-body"><!-- panel body starts-->
			<ul class="nav nav-pills nav-stacked"><!--nav staced starts -->
				<li class="<?php if (isset($_GET['my_orders'])) { echo "active"; }?>">
					<a href="my_account.php?my_orders"><i class="fa fa-list"></i> My Orders</a>
				</li>

				<li class="<?php if (isset($_GET['pay_offline'])) { echo "active"; }?>">
					<a href="my_account.php?pay_offline"><i class="fa fa-bolt"></i> Pay Offline</a>
				</li>	

				<li class="<?php if (isset($_GET['edit_account'])) { echo "active"; }?>">
					<a href="my_account.php?edit_account"><i class="fa fa-pencil"></i> Edit Account</a>
				</li>

				<li class="<?php if (isset($_GET['change_password'])) { echo "active"; }?>">
					<a href="my_account.php?change_password"><i class="fa fa-user"></i> Change Password</a>
				</li>

				<li class="<?php if (isset($_GET['delete_account'])) { echo "active"; }?>">
					<a href="my_account.php?delete_account"><i class="fa fa-trash-o"></i> Delete Account</a>
				</li>

				<li href="logout.php">
					<a href="my_account.php?logout"><i class="fa fa-sign-out"></i> Logout</a>
				</li>

			</ul><!--nav staced ends -->
		</div><!-- panel body ends-->

</div><!--sidebar menu ends -->