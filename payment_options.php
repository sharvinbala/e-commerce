<div class="box"><!-- box starts -->

<?php
	
$session_email = $_SESSION['customer_email'];
$select_customer = "select * from customers where customer_email='$session_email'";
$run_customer = mysqli_query($con, $select_customer);
$row_customer = mysqli_fetch_array($run_customer);
$customer_id = $row_customer['customer_id']; 



?>

<h1 class="text-center">Payment Options</h1>
<p class="lead text-center">

<a href="order.php?c_id=<?php echo $customer_id; ?>">Pay Offline</a>

</p>

<center><!-- center starts -->

<p class="lead">
<a href="#"> <!-- put paypal address here -->
Pay Online With PayPal
<img src="images/paypal.png" width="500" height="270" class="img-responsive">
</a>
</p>
</center><!-- center ends -->

</div><!-- box ends -->