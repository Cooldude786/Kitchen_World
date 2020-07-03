 <?php
 include('header.php');

 ?>

 <script src="js/jquery-2.1.4.min.js"></script>
 <div class="modal-body modal-body-sub_agile">
 	<div class="main-mailposi">
 		<span class="" aria-hidden="true"></span>
 	</div><a href="index.php"><button type="button" class="close " style="font-size: 50px;color: #ff5722;
	">&times;</button></a>
 	<div class="modal_body_left modal_body_left1">
 		<h3 class="agileinfo_sign">Your Order</h3>
 	</div>         
 </div>      

 <div id="reload">

 	<?php
// print_r($_SESSION);print_r($page_owner);

 	$myor=mysqli_query($conn,"SELECT * FROM `order_table` WHERE email='$page_owner'ORDER BY id DESC");
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
 				<div class="product-sec1"  style="border-radius: 10px; padding-bottom:80px;">
 					<table >
 						<tbody>
 							<tr>
 								<tr>
 									<td>
 										<h4 class="heading-tittle">
 											<span class="item_price">ORDERID:</span >
 											<a href=#><?php echo$orderid;?></a>
 										</h4>
 									</td>
 								</tr>
 								<tr>
 									<td>
 										<span class="item_price"> Order Date:</span><?php echo $date?></br>

 									</td>
 								</tr>
 								<?php 
 								$totalqty='0';

 								$tablepro=mysqli_query($conn,"SELECT * FROM `order_detail` WHERE `order_id`='$orderid'");

 								while($fetchtb=mysqli_fetch_assoc($tablepro))
 								{ 
 									$id=$fetchtb['p_id'];
 									$orqty=$fetchtb['qty'];
 									$oneprice=$fetchtb['price'];

 									$getpro=mysqli_query($conn,"SELECT * FROM `product` WHERE p_id='$id'");
 									$fetchpro=mysqli_fetch_assoc($getpro);
 									$pimage=$fetchpro['image'];
 									$pname=$fetchpro['p_name']; 
 									$P_stocks=$fetchpro['P_stocks'];
 									?>

 								</tr>
 							</tbody>
 						</table>
 						<div class="col-md-6 " style="height:150px;">
 							<table><tbody>
 								<tr>
 									<td>	
 										<img src="../Kitchen World/upload/<?php echo $pimage;?>" alt="" style="width: 120px; height:120px;"></div>
 										<td><span style="padding-left:35px;"><a href="single.php?pid=<?php echo $pname;?>" ><?php echo $pname;?></a></span></br>
 											<span class="item_price" style="padding-left:35px;">Qty: </span><span><?php echo $orqty;?></span>
 											<span class="item_price">Price: </span>
 											<span><b>₹<?php echo $oneprice;?></b></span>
 										</td>
 									</td> 
 								</tr>
 							</tbody>
 						</table>
 					</div>

 					<div></div>

 					<?php $totalqty +=$fetchtb['qty'];
 				}?>

 				<table >
 					<tbody>
 						<tr>
 							<tr>

 								<td>

 									<span class="item_price">Total Price:</span><span><b>₹<?php echo $orprice;?></b></span>
 									<span class="item_price"> | Total Qty: </span><span><?php echo $totalqty;?></span></br>


 									<?php

 									if($satus=='Success')
 										{?>
 											<span class="item_price">Recived on: </span> <?php echo $date;?>     
 											<span class="item_price ">Order Status:- </span><span style="color:#3c763d" class="fa fa-check-circle-o" aria-hidden="true"><?php echo $satus;?></span></br>

 											<?php  
 											$ex=date ("Y-m-d", strtotime("$date, + 1day"));
 											$today=date("Y-m-d");
 										    
 											if($ex>$today)
 												{ echo"Return Valid:$ex";
 													?>	 <button class="submit check_out" name="cancel_or" style="margin-top: 0px;padding: 5px 5px;font-size: 15px;letter-spacing: 0px;background: #ff5722;border-radius: 5px;"  onClick="success('<?php echo $orderid;?>','<?php echo $orprice;?>','<?php echo $totalqty;?>','<?php echo$id;?>')"> Return Order</button>

 										<?php }
 										else{
 											echo"time of";}?>
 											<?php
 										}
 										elseif ($satus=='Return') {?>
 											<span class="item_price">Recived no:</span><?php echo $date;?>     
 											<span class="item_price ">Order Status:- </span><span style="color:#3c763d" ><h4 class="fa fa-check-circle-o" aria-hidden="true "><?php echo $satus;?></h4></span></br>
 										<?php }
 										else  
 											{?>
 												<span class="item_price">Expected Delived Date:</span><?php echo date ("Y-m-d", strtotime("$date, +3 day"));?>     
 												<span class="item_price">Order Status:- </span><span style="color:#3c763d"><?php echo $satus;?></span></br>
 												<a onclick="if (confirm('Are you really want to cancel order')){href='plorder.php?id=<?php echo $orderid;?>'}else{ return false;}"><button class="submit check_out" name="cancel_or" style="margin-top: 0px;padding: 5px 5px;font-size: 15px;letter-spacing: 0px;border-radius: 5px;"> Cancel Order</button></a>

 											<?php }?>
 										</td>

 									</tr>
 								</tr>
 								<script type="text/javascript">
 									function success(orderid,amount,quantity,pid)
 									{ console.log(orderid+"and"+amount+"and"+quantity+"and"+pid);
 									var sure='orderid='+orderid+'&amount='+amount+'&quantity='+quantity+'&pid='+pid;  


 									$.ajax({
 										type:'post',
 										url:'ReturnP.php',
 										data:sure,
 										success:function(response)
 										{
 											console.log("res",response);
 											console.log("res",sure);
 											$(' #reload').load(' #reload');

 										}
 									});
 								}

 							</script>

 						</tbody>
 					</table>


 				</div>
 			</div>         
 		</div>   

 		<?php 

 		if(isset($_GET['id']))
 		{

 			$ordid=$_GET['id'];
 			$query="DELETE FROM `order_table` WHERE ord_id='$ordid'";
 			$detail=mysqli_query($conn,"DELETE FROM `order_detail` WHERE order_id='$ordid'");
 			$result=mysqli_query($conn,$query);
           	echo '<script type="text/javascript">window.location=\'plorder.php\'</script>';
   // $main=$P_stocks+$orqty;
   //     mysqli_query($conn,"UPDATE `product` SET `P_stocks`='$main' WHERE `p_id`='$id'");
 			 
 		}


 }
 ?>
</div>


<div class="col-md-12">

<?php
include("footer.php");
	?>
</div>