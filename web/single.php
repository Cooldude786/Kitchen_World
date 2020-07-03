<?php include('header.php'); ?>
	<!-- banner-2 -->
	<div class="page-head_agile_info_w3l">

	</div>
	<!-- //banner-2 -->
	<!-- page -->
			<div class ="services-breadcrumb">
					<div class ="agile_inner_breadcrumb">
							<div class="container">
									<ul class="w3_short">
											<li>
													<a href="index.php">Home</a>
													<i>|</i>
											</li>
											<li>Product Description</li>
									</ul>
							</div>
					</div>
			</div>
	<!-- //page -->
	<!-- Single Page -->
	<div class="banner-bootom-w3-agileits">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Product Detailed View
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<div class="col-md-5 single-right-left ">
				<div class="grid images_3_of_2">
					<div class="flexslider">
						<ul class="slides">


							<?php
							 		if(isset($_GET['pid']))
									{
										$pid=$_GET['pid'];
										$sql="SELECT * FROM `product` WHERE `p_id`='$pid'";
										$res=mysqli_query($conn,$sql);
											while ($row=mysqli_fetch_assoc($res))
											 { ?>

							<li data-thumb="../Kitchen World/upload/<?php  echo $row['image'];?>" style="width:300px;height:350px; list-style: none;">
								<div class="thumb-image">
									<img src="../Kitchen World/upload/<?php  echo $row['image'];?>" data-imagezoom="true" class="img-responsive" alt="" style="width:300px;height:300px;"> </div>
							</li>
									<?php	}
									}?>

						</ul>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<?php
					if(isset($_GET['pid']))
					{
						$pid=$_GET['pid'];
						$sql="SELECT * FROM `product` WHERE `p_id`='$pid'";
						$res= mysqli_query($conn,$sql);
				 		while ($row=mysqli_fetch_assoc($res))
					 {?>
						 <div class="col-md-7 single-right-left simpleCart_shelfItem">
			 				<h3><?php echo $row['p_name'];?></h3>
			  
			 				<p>
			 					<span class="item_price">₹<?php echo $row['offer_price'];?></span>
			 					<del>₹<?php echo $row['price'];?></del>
			 					<label><i class="fa fa-truck" aria-hidden="true">  Free delivery</i></label>
			 				</p>
			 				<div class="single-infoagile">
							 	<div class="product-single-w3l">
									<?php echo $row['detail'];?>
			 				<ul>
			 						<li>
			 							Cash on Delivery Eligible.
			 						</li>

			 					</ul>
			 					</div>
						 </div>
			 				<div class="product-single-w3l">


			 					<p>
			 						<i class="fa fa-refresh" aria-hidden="true"></i>Only 15 day valid for product
			 						<label> returnable.</label>
			 					</p>
			 				</div>
			 				<div class="occasion-cart">
			 					<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
			 					 
			 					   <fieldset id="resdiv<?php echo $row['p_id']; ?>">
									<?php
							     		$pid=$row['p_id'];
						 			$chk=mysqli_query($conn,"SELECT * FROM checkout WHERE p_id='$pid' and email='$page_owner'");
										$chkstock=mysqli_query($conn,"SELECT * FROM product WHERE p_id='$pid'");
					      				$getstock=mysqli_fetch_assoc($chkstock);
		 								$stock=$getstock['P_stocks'];
		 		    					if($stock > 0){
    							     		if(mysqli_num_rows($chk) > 0){ ?>
											   <input type="submit" OnClick="" value="Added to cart" class="button" disabled />
										      <?php } 
										   	else { ?>
									    	<input type="submit" <?php if($page_owner==''){?> OnClick="" value='Add to cart' class='button' data-toggle='modal' data-target='#myModal1'>
									    	<?php }
									    	else{?>OnClick="addtocart('resdiv<?php echo $row['p_id']; ?>','<?php echo $row['p_id'];?>','<?php echo $row['price']; ?>','1','<?php echo $page_owner ?>')" value="Add to cart" class="button" />
									    	 <?php } } } 
									    	 else { ?>
												<input type="submit" OnClick="" value="Out Of Stock" class="button" disabled />
											<?php }?>															
					    				</fieldset>
			 					 
			 					</div>
			 				</div>
			 			</div>
		 <?php }
					} ?>

			<div class="clearfix"> </div>
		</div>
	</div>
	<script type="text/javascript">
											function addtocart(resdiv,p_id,price,qty,email,stock){
												console.log(p_id+"and"+price+"and"+qty+"and"+email+"and"+stock);
												var param='p_id='+p_id+"&price="+price+"&qty="+qty+"&email="+email+"&p_pro="+stock+"&reqID=2";
												if(email==""){

												}
												else
												{
													$.ajax({
														type:'post',
														url:'addtocart.php',
														data:param,
														success:function(response)
														{
															console.log("res",response);
															console.log("res",param);
															$('#'+resdiv).html(response);
														}
													});
												}
											}
										</script>

	<!-- //Single Page -->
	<!-- special offers -->
	<?php
	include('special_offer.php');
	?>
	<!-- //special offers -->
	<?php
	include("footer.php");
	 ?>
</body>

</html>
