<?php include('header.php'); ?>
<!-- banner-2 -->
<div class="page-head_agile_info_w3l">

</div>
<!-- //banner-2 -->
<!-- top Products -->
<div class="ads-grid">
	<div class="container">
		<!-- tittle heading -->
		<h3 class="tittle-w3l">Kitchen Products
			<span class="heading-style">
				<i></i>
				<i></i>
				<i></i>
			</span>
		</h3>
		<!-- //tittle heading -->
		<!-- product right -->
		<div class="agileinfo-ads-display col-md-12 w3l-rightpro">
			<div class="wrapper">
				<!-- first section -->
				<div class="">
					<div class="container card-group" style="width:auto!important">
						<?php
						if(isset($_GET['subid']))
						{
							$subid=$_GET['subid'];
							$sql="SELECT * FROM `product` WHERE `s_name`='$subid'";
							$res=mysqli_query($conn,$sql);
							while ($row = mysqli_fetch_assoc($res))
								{	?>
									<div class="col-xs-3 product-men product-sec1" style="margin-bottom:10px;">
										<div class="men-pro-item simpleCart_shelfItem">
											<div class="men-thumb-item">
												<img src="../Kitchen World/upload/<?php echo $row['image'];?>" alt="" style="width: 200px;height:200px">
												<div class="men-cart-pro">
													<div class="inner-men-cart-pro">
														<a href="single.php?pid=<?php echo $row['p_id'];?>" class="link-product-add-cart">Quick View</a>
													</div>
												</div>
											</div>
											<div class="item-info-product ">
												<h4>
													<a href="single.php?pid=<?php echo $row['p_id'];?>"><?php echo $row['p_name'];?></a>
												</h4>
												<div class="info-product-price">
													<span class="item_price">₹<?php echo $row['offer_price'];?></span>
													<del>₹<?php echo $row['price'];?></del>
												</div>
												<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
													<fieldset id="resdiv<?php echo $row['p_id']; ?>">
														<?php
														$pid=$row['p_id'];
														$chk=mysqli_query($conn,"SELECT * FROM checkout WHERE p_id='$pid' AND email='$page_owner'");
														$chkstock=mysqli_query($conn,"SELECT * FROM product WHERE p_id='$pid'");
														$getstock=mysqli_fetch_assoc($chkstock);
														$stock=$getstock['P_stocks'];
														if($stock > 0){
															if(mysqli_num_rows($chk) > 0){ ?>
																<input type="submit" OnClick="" value="Added to cart" class="button" disabled />
															<?php } else {?>
																<input type="submit" OnClick=" <?php if($page_owner==''){?> alert('Login first');<?php }else{?>addtocart('resdiv<?php echo $row['p_id']; ?>','<?php echo $row['p_id'];?>','<?php echo $row['offer_price']; ?>','1','<?php echo $page_owner ?>')<?php } ?>" value="Add to cart" class="button" /> <?php } } else { ?>
																	<input type="submit" OnClick="" value="Out Of Stock" class="button" disabled /><?php }?>
																</fieldset>
															</div>
														</div>
													</div>
												</div>
											<?php }
										} ?>
									</div>
									<div class="clearfix"></div>
								</div>
								<!-- //first section -->

							</div>
						</div>
						<!-- //product right -->
					</div>
				</div>
				<!-- //top products -->
				<!-- Ajax Add-to-cart -->
				<script type="text/javascript">
					function addtocart(resdiv,p_id,price,qty,email){
						console.log(p_id+"and"+price+"and"+qty+"and"+email);
						var param='p_id='+p_id+"&price="+price+"&qty="+qty+"&email="+email+"&reqID=2";
						if(email==""){

						} else {
							$.ajax({
								type:'post',
								url:'addtocart.php',
								data:param,
								success:function (response){
									console.log("Res:",response);
									console.log("Res:",param);
									$(' #'+resdiv).html(response);
												 //window.location='checkout.php';
												}
											});
						}
					}
				</script>
				<!-- //Ajax Add-to-cart -->
				<!-- special offers -->
				<?php
				include('special_offer.php');
				?>
				<!-- //special offers -->
				<?php
				include("footer.php");
				?>
