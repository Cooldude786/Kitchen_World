 <?php include('header.php'); ?>
	<!-- banner-2 -->
	<div class="page-head_agile_info_w3l">

	</div>
	<!-- //banner-2 -->
	<!-- page -->
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="index.html">Home</a>
						<i>|</i>
					</li>
					<li>Terms of Use</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<!-- Terms of use-section -->
	<section class="terms-of-use">
		<!-- terms -->
		<div class="terms">
			<div class="container">
				<!-- tittle heading -->
				<h3 class="tittle-w3l">Terms of Use
					<span class="heading-style">
						<i></i>
						<i></i>
						<i></i>
					</span>
				</h3>
				<!-- //tittle heading -->
				<h5>PLEASE READ THESE TERMS AND CONDITIONS CAREFULLY .</h5>
				<?php
				 $query=mysqli_query($conn,"SELECT * FROM `terms`");
				 while($row=mysqli_fetch_assoc($query))
				 { $id=$row['id'];
			        $detail=$row['detail'];
			        $ans=$row['detail2'];
				 ?>
				<h6><?php echo $row['detail'];?></h6>
				<div>
				<?php echo $row['detail2'];?>	
					 
				</div>
				 <?php } ?>
			</div>
		</div>
		<!-- /terms -->
	</section>
	<!-- //Terms of use-section -->
	<!-- footer -->
	 <?php include('footer.php');?>

</body>

</html>
