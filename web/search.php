<?php 
include('header.php');
?>
 <script src="js/jquery-2.1.4.min.js"></script>
<div class="agileinfo-ads-display col-md-12 w3l-rightpro">

	<div class="container card-group" style="width:auto!important">

		<?php 

		if(isset($_POST['submit']))
		{
			$searchText=$_POST['Search'];
			$str_query = "SELECT * FROM `product` WHERE `p_name` LIKE '%".$searchText."%'";
			$getResult=mysqli_query($conn,$str_query);

			if(mysqli_num_rows($getResult) > 0){

				while($row=mysqli_fetch_assoc($getResult)){
					$p_id=$row["p_id"];
					$c_name=$row["c_name"];
					$s_name=$row["s_name"];


					$p_name=$row["p_name"];
					$price=$row["price"];
					$offer_price=$row["offer_price"];


					$image=$row["image"];

					?>
					<div class="col-xs-3 product-men product-sec1" style="margin-bottom:10px;">
						<div class="men-pro-item simpleCart_shelfItem">
							<div class="men-thumb-item">
								<img src="../Kitchen World/upload/<?php echo $image;?>" alt="" style="width: 200px;height:200px">
								<div class="men-cart-pro">
									<div class="inner-men-cart-pro">
										<a href="single.php?pid=<?php echo $p_id?>" class="link-product-add-cart">Quick View</a>
									</div>
								</div>
							</div>
							<table>
								<tbody>
									<tr>

										<?php
										$sql1="select * from category where `c_id` = ".$c_name." ";
										$result1 = mysqli_query($conn,$sql1);
										while($row1 = mysqli_fetch_array($result1))
										{    $cid=$row1['c_id'];
											$c_name1 =$row1["c_name"];


											?>
											<div class=" item-info-product ">
											<?php }
											$sql1="select * from sub_category where `s_id`= ".$s_name." ";
											$result1 = mysqli_query($conn,$sql1);
											while($row1 = mysqli_fetch_array($result1))
											{   $sub=$row1['s_id'];
												$s_name1 =$row1["s_name"];


												?>
											<span class=" item-info-product"><h4>
												<a href="product.php?subid=<?php echo $row1['s_id'];?>"><?php echo $c_name1 ; ?><span class="item_price">=></span><?php echo $s_name1 ; ?></a>
											</h4></span>
										<?php } ?>



										<h4>
											<a href="single.php?pid=<?php echo $p_id?>"><?php echo $p_name ; ?></a>
										</h4>
										<div class="info-product-price">
											<span class="item_price">₹<?php echo $offer_price; ?></span>
											<del>₹<?php echo $price ; ?></del>
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">

											<fieldset id="resdiv<?php echo $row['p_id']; ?>">
												<?php
												$pid=$row['p_id'];
												$chk=mysqli_query($conn,"SELECT * FROM checkout WHERE p_id='$p_id' AND email='$page_owner'");
												$chkstock=mysqli_query($conn,"SELECT * FROM product WHERE p_id='$p_id'");
												$getstock=mysqli_fetch_assoc($chkstock);
												$stock=$getstock['P_stocks'];
												if($stock > 0){
													if(mysqli_num_rows($chk) > 0){ ?>
														<input type="submit" OnClick="" value="Added to cart" class="button" disabled />
													<?php } else {?>
														<input type="submit"OnClick=" " value='Add to cart' class='button' data-toggle='modal' data-target='#myModal2'>
													   <?php }else{?>addtocart('resdiv<?php echo $row['p_id']; ?>','<?php echo $row['p_id'];?>','<?php echo $row['offer_price']; ?>','1','<?php echo $page_owner ?>')" value="Add to cart" class="button" />
													    <?php } } } else { ?>
															<input type="submit" OnClick="" value="Out Of Stock" class="button" disabled /><?php }?>
														</fieldset>
													</div>
												</div>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
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



							<!-- 	OR `city` LIKE '%".$area."%' OR `state` LIKE '%".$area."%' -->

						<?php } } }?></div>
				</div>
				