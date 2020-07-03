<?php
include("conn.php");

include("header.php");?>
<!DOCTYPE html>
<head>
<title>ADMIN</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>
</head>
<body>
<section id="container">

<!--header end-->
<!--sidebar start-->
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<!-- //market-->
		<div class="market-updates">
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-2">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-eye"> </i>
					</div>
					 <div class="col-md-8 market-update-left">
					 	<?php
						$countview=mysqli_query($conn,"SELECT * FROM `visitore`");
						 while($view=mysqli_fetch_assoc($countview))
						{
						 $refrace =$view['visitore_store'];
						}
						 ?>
					 <h4>Visitors</h4>
					<h3><?php echo $refrace;?></h3>
					<p>shows no. of unregistered users have visited a site. </p>
				  </div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-1">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-users" ></i>
					</div>
					<div class="col-md-8 market-update-left">
						<?php
						if($fcount=mysqli_query($conn,"SELECT * FROM `userinfo`"))
						{
						 while($fetchcu=mysqli_fetch_assoc($fcount))
						{
						 $milavat =$fetchcu['id'];
						}
						}else
						{
							echo'not run';
						}?>
					 <a href="customer_info.php"><h4>Users</h4>
						<h3><?php echo  $milavat;?></h3>
						<p>Click here to know Users Information.</p></a>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-3">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-inr fa-5x" style="color:#fff;"></i>
					</div>
					<div class="col-md-8 market-update-left">
						<?php
						if($paycoun=mysqli_query($conn,"SELECT * FROM `payment`"))
						{
						 while($fetchpay=mysqli_fetch_assoc($paycoun))
						{
						 $kuber =$fetchpay['id'];
						}
						}else
						{
							echo'not run';
						}?>
						<a href="payment.php"><h4>Sales</h4>
						<h3><?php echo $kuber;?></h3>
						<p>Orders Seles Click to more About</p></a>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-4">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-shopping-cart" aria-hidden="true"></i>
					</div>
					<div class="col-md-8 market-update-left">
					 <?php if($ordercoun=mysqli_query($conn,"SELECT * FROM `order_table`"))
						{
						 while($fetchor=mysqli_fetch_assoc($ordercoun))
						{
						 $order =$fetchor['id'];
						}
						}else
						{
							echo'not run';
						}?>
						<a href="order.php"><h4>Orders</h4>
						<h3><?php echo $order;?></h3>
						<p>Orders Click to more About</p></a>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
		   <div class="clearfix"> </div>
		</div>
		<!-- //market-->


</section>
 <!-- footer -->

  <!-- / footer -->
</section>
<!--main content end-->
</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
<!-- morris JavaScript -->
<script>
	$(document).ready(function() {
		//BOX BUTTON SHOW AND CLOSE
	   jQuery('.small-graph-box').hover(function() {
		  jQuery(this).find('.box-button').fadeIn('fast');
	   }, function() {
		  jQuery(this).find('.box-button').fadeOut('fast');
	   });
	   jQuery('.small-graph-box .box-close').click(function() {
		  jQuery(this).closest('.small-graph-box').fadeOut(200);
		  return false;
	   });



	});
	</script>

</body>
</html>
