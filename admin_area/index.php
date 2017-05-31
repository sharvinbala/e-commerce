<?php

session_start();
include("includes/db.php");

if (!isset($_SESSION['admin_email'])) {
	echo "<script>window.open('login.php','_self')</script>";
}
else
{



?>
<!DOCTYPE html>
<html>
<head>
<title>Admin Panel</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
</head>

<body>

<div id="wrapper"><!--wrapper starts -->
<div id="page-wrapper"><!-- page wrapper starts -->
<div class="container-fluid"><!--container fluid starts -->
<?php

if (isset($_GET['dashboard'])) {
include("dashboard.php");
	
}


?>
<?php include ("includes/sidebar.php"); ?>

</div><!--container fluid ends-->
</div><!-- page wrapper ends -->
</div><!--wrapper ends -->

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php } ?>