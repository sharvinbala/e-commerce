<?php

include("includes/db.php");

if (!isset($_SESSION['admin_email'])) {
	echo "<script>window.open('login.php','_self')</script>";
}
else
{

?>

<div class="row"><!-- 1 row starts -->
<div class="col-lg-12"><!-- col lg 12 starts -->

<ol class="breadcrumb"><!-- 1 breadcrumb starts -->
<li class="active">
<i class="fa fa-dashboard"></i> Dashboard / View Products

</li>
</ol><!-- 1 breadcrumb ends -->

</div><!-- col lg 12 ends -->
</div><!-- 1 row ends -->

<div class="row"><!-- 2 row starts -->
<div class="col-lg-12"><!-- col lg 12 starts -->
<div class="panel panel-default"><!-- panel default starts -->
<div class="panel-heading"><!-- panel-heading starts -->

<h3 class="panel-title"><!-- panel title starts -->
<i class="fa fa-money fa-fw"></i> View Products
</h3><!-- panel title ends -->
</div><!-- panel-heading ends -->
<div class="panel-body"><!-- panel body starts -->
<div class="table-responsive"><!-- table responsive starts -->

<table class="table table-bordered table-hover table-striped"><!-- 1 table bordered starts -->
<thead>
<tr>
<th>Product ID</th>
<th>Product Title</th>
<th>Product Image</th>
<th>Product Price</th>
<th>Product Sold</th>
<th>Product Keywords</th>
<th>Product Date</th>
<th>Product Delete</th>
<th>Product Edit</th>

</tr>
</thead>

<tbody>
<?php

$i=0;
$get_pro = "select * from products";
$run_pro = mysqli_query($con, $get_pro);
while ($row_pro=mysqli_fetch_array($run_pro)) {

$pro_id = $row_pro['product_id'];
$pro_title = $row_pro['product_title'];
$pro_image = $row_pro['product_img1'];
$pro_price = $row_pro['product_price'];
$pro_keywords = $row_pro['product_keywords'];
$pro_date = $row_pro['date'];



?>


<?php } ?>
</tbody>

</table><!-- table bordered ends -->

</div><!-- table responsive ends -->
</div><!-- panel body ends -->
</div><!-- panel default ends -->
</div><!-- col lg 12 ends -->
</div><!-- 2 row ends -->

<?php } ?>