<center><!--center starts -->
	<h1>My Orders</h1>
	<p class="lead">Your orders</p>
</center><!--center ends -->
<hr>

<div class="table-responsive"><!--table-resonsive starts -->
	<table class="table table-bordered table-hover"><!--table-bordered starts -->
		<thead><!--thead starts -->
			<tr>
				<th>Order Number:</th>
				<th>Due Amount:</th>
				<th>Invoice Number:</th>
				<th>Quantity:</th>
				<th>Order Date:</th>
				<th>Paid/Unpaid:</th>
				<th>Status: </th>
			</tr>
		</thead><!--thead ends -->
<tbody><!--tbody starts -->

	<?php

$customer_session = $_SESSION['customer_email'];

$get_customer = "select * from customers where customer_email='$customer_session'";

$run_customer = mysqli_query($con,$get_customer);

$row_customer = mysqli_fetch_array($run_customer);

$customer_id = $row_customer['customer_id'];

$get_orders = "select * from customer_orders where customer_id='$customer_id'";

$run_orders = mysqli_query($con,$get_orders);

$i = 0;

while($row_orders = mysqli_fetch_array($run_orders)){

$order_id = $row_orders['order_id'];

$due_amount = $row_orders['due_amount'];

$invoice_no = $row_orders['invoice_no'];

$qty = $row_orders['qty'];

$order_date = substr($row_orders['order_date'],0,11);

$order_status = $row_orders['order_status'];

$i++;

if($order_status=='pending'){

$order_status = "Unpaid";

}
else{

$order_status = "Paid";

}

?>
	<tr>	<!--tr starts -->
		<th><?php echo $i; ?></th>
		<td><?php echo $due_amount ?></td>
		<td><?php echo $invoice_no; ?></td>
		<td><?php echo $qty; ?></td>
		<td><?php echo $order_date; ?></td>
		<td><?php echo $order_status; ?></td>
		<td>
			<a href="confirm.php?order_id=<?php echo $order_id; ?>" target="blank" class="btn btn-primary btn-sm">Confirm if paid</a>
		</td>
	</tr><!--tr ends -->
<?php } ?>
</tbody><!--tbody ends -->

	</table><!--table-bordered ends -->
</div><!--table-resonsive ends -->