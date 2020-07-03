<?php include('header.php');?>
<!-- banner -->
 
<div id="myCarousel" class="carousel slide col-md-12	" data-ride="carousel"style="padding-right: 10px; padding-left: 10px;margin-right: auto;margin-left: auto;">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.2.6/dist/css/uikit.min.css" />

<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.2.6/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.2.6/dist/js/uikit-icons.min.js"></script>
		<div class="uk-position-relative uk-visible-toggle uk-light uk-slideshow=autoplay: true " tabindex="-1" uk-slideshow="min-height: 300; max-height: 500; animation: push ">

    <ul class="uk-slideshow-items ">
		<?php 
		            $chkbanner=mysqli_query($conn,"select * from slider");
	 	                    $numrows=mysqli_num_rows($chkbanner); 
		                      while($row=mysqli_fetch_assoc($chkbanner)){
								    
		                        ?>
								 <li>
            <img src="images/<?php echo $row['slide_image'];?>" alt="" uk-cover style=" height:100px;">
			 
        </li>
		
			 <?php } ?>
       
       
    </ul>

    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

</div>
 </div>

 


  <div class="ads-grid">
  <div class="container">
  				<!-- tittle heading -->
	<h3 class="tittle-w3l">Our Top Products
	<span class="heading-style">
		<i></i>
		<i></i>
		<i></i>
		</span>
		</h3>
				<!-- //tittle heading -->
				<!-- product right -->
  <div class="agileinfo-ads-display col-md-12">
	<div class="wrapper">
	<?php
    	$chkcategory=mysqli_query($conn,"SELECT * FROM `sub_category`");
		while ($getcategory=mysqli_fetch_assoc($chkcategory)) {
			$subcatid=$getcategory['s_id'];
			?>
							<!-- first section  -->
			<div class="product-sec1">
			<h3 class="heading-tittle"><?php echo $getcategory['s_name'];?></h3>
			<?php
			$chkproduct=mysqli_query($conn,"SELECT * FROM `product` WHERE `s_name`='$subcatid' limit 4");
		 	while ($getproduct=mysqli_fetch_assoc($chkproduct))
			{  ?>
				<div class="col-md-3 product-men">
				<div class="men-pro-item simpleCart_shelfItem" style="height:400px;">
				<div class="men-thumb-item">
				<img src="../Kitchen World/upload/<?php echo $getproduct['image'];?>" alt="" style="width: 200px; height:200px;">
					<div class="men-cart-pro">
				  	<div class="inner-men-cart-pro">
					<a href="single.php?pid=<?php echo $getproduct['p_id'];?>" class="link-product-add-cart">Quick View</a>
					</div>
					</div>
				</div>
				<div class="item-info-product ">
			     	<h4 >
					 <a href="single.php?pid=<?php echo $getproduct['p_id'];?>"><?php echo substr($getproduct['p_name'],0,20);?></a>
					</h4>
					<div class="info-product-price">
						<span class="item_price">₹<?php echo $getproduct['offer_price']?></span>
							<del>₹<?php echo $getproduct['price']?></del>

					</div>
					<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
						<fieldset id="resdiv<?php echo $getproduct['p_id']; ?>">
						 <?php
							$pid=$getproduct['p_id'];
							$chk=mysqli_query($conn,"SELECT * FROM checkout WHERE p_id='$pid' and email='$page_owner'");
							$chkstock=mysqli_query($conn,"SELECT * FROM product WHERE p_id='$pid'");
							$getstock=mysqli_fetch_assoc($chkstock);
							   $stock=$getstock['P_stocks'];
			 				if($stock > 0){
							   if(mysqli_num_rows($chk) > 0){ ?>
									<input type="submit" OnClick="" value="Added to cart" class="button" disabled />
							    <?php } else {?>
											<input type="submit" 	
											<?php if($page_owner==''){?>
												OnClick="" value='Add to cart' class='button' data-toggle='modal' data-target='#myModal1'>
												 <?php }
												 else{?>
												 	OnClick="addtocart('resdiv<?php echo $getproduct['p_id']; ?>','<?php echo $getproduct['p_id'];?>','<?php echo $getproduct['offer_price']; ?>','1','<?php echo $page_owner ?>') " value="Add to cart" class="button" /> 
									<?php } } } else { ?>
													<input type="submit" OnClick="" value="Out Of Stock" class="button" disabled />
					  				<?php }?>
								</fieldset>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
											<div class="clearfix"></div>
										</div>
									<?php } ?>
									<!-- //first section (nuts) -->
									<!-- Ajax Add-to-cart -->
									<script type="text/javascript">
										function addtocart(resdiv,p_id,price,qty,email,stock){				
											console.log(p_id+"and"+price+"and"+qty+"and"+email+"and"+stock);
											var param='p_id='+p_id+"&price="+price+"&qty="+qty+"&email="+email+"&p_pro="+stock+"&reqID=2";
											if(email==""){

                                                alert("Successfully Registered");
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

									<!-- //Ajax Add-to-cart -->
									<!--Middle Page banner -->
									<div class="product-sec1 product-sec2">
										<div class="col-xs-7 effect-bg">
											<h3 class="">Premium Quality</h3>
											<h6>Enjoy our all Products</h6>
											<p>Get Extra 10% Off</p>
										</div>
										<h3 class="w3l-nut-middle">Kitchen Appliance</h3>
										<div class="col-xs-5 bg-right-nut">
											<img src="images/nut1.png" alt="">
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
							<!-- //Midde Page banner -->
						</div>
					</div>
					<!-- //top products -->
					<!-- special offers -->
					<?php
					include('special_offer.php');
					?>
					<!-- //special offers -->
					<?php
					include("footer.php");
					?>
