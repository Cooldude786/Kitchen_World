<?php
include('header.php');

?>


<div class="modal-body modal-body-sub_agile">
	<div class="main-mailposi">
		<span class="" aria-hidden="true"></span>
	</div>
	<a href="index.php"><button type="button" class="close " >&times;</button></a>
	<div class="modal_body_left modal_body_left1">
		<h3 class="agileinfo_sign">Your Order</h3>
	</div>         
</div>      



<?php
// print_r($_SESSION);print_r($page_owner);
$myor=mysqli_query($conn,"SELECT * FROM `order_table` WHERE email='$page_owner'");
while($orfetch=mysqli_fetch_assoc($myor))
{
	$orderid=$orfetch['ord_id'];
	$date=$orfetch['date'];
	$satus=$orfetch['order_status'];
	$orprice=$orfetch['amount'];
	// print_r($orderid);
	?>

	<div class="agileinfo-ads-display col-md-12 container">	
		<div class="wrapper">
			<div class="product-sec1" >
				
					<h4 class="heading-tittle">
						<span class="item_price">ORDERID:</span >
						<a href=#><?php echo $orderid; ?></a>
					</h4>
					<span class="item_price"> Order on:</span><?php echo $date?>
					<span class="item_price">Expected Delived Date:</span><?php echo $date?>
							
					<?php 
					$tablepro=mysqli_query($conn,"SELECT * FROM `order_detail` WHERE `order_id`='$orderid'");
					while($fetchtb=mysqli_fetch_assoc($tablepro))
						{  $id=$fetchtb['p_id'];
					$orqty=$fetchtb['qty'];

					$getpro=mysqli_query($conn,"SELECT * FROM `product` WHERE p_id='$id'");
					$fetchpro=mysqli_fetch_assoc($getpro);
					$pimage=$fetchpro['image'];
					$pname=$fetchpro['p_name']; 
					?>


					<div class="men-pro-item simpleCart_shelfItem " style="height:180px;">
							<img src="../Kitchen World/upload/<?php echo $pimage;?>" alt="" style="width: 120px; height:120px;">
							<span><a href="single.php?pid=<?php echo $pname;?>" class=" "><?php echo $pname;?></a></span>				
						</div>
						 
					<?php }?>
							<span class="item_price">Price:</span><?php echo $orprice;?><span class="item_price">|Qty:</span><?php echo $orqty;?>
							<div class=" "><span>Order Status:- </span><span style="color:#3c763d"><?php echo $satus;?></span>	<button class="submit check_out" name="cancel_or" style="margin-top: 0px;padding: 4px 4px;font-size: 10px;letter-spacing: 0px;"> Cancel Order</button>
							</div>
						
				</div>         

					</div>         
				</div>   








				<?php 
			}
			?>



