 <?php
include('header.php');
 
?>
 <!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Kitchen World</title>
 
</head>

<body>
       <?php 
				 $query="select * from userinfo WHERE  email='$page_owner'";
				$result=mysqli_query($conn,$query);
				while($row=mysqli_fetch_array($result))
				{		
			     $id=$row['id']; 
				$name=$row['name'];
				
				$email=$row['email'];
				$password=$row['password'];
				$mobile=$row['mobile'];
	             $address=$row['address'];
				}
				
			?>
          
			<div class="modal-content"id="myModal1 " tabindex="-1" role="dialog">
				<div class="modal-header">
					<a href="index.php"><button type="button" class="close " >&times;</button></a>
				</div>
				<div class="modal-body modal-body-sub_agile">
					<div class="main-mailposi">
						<span class="fa fa-envelope-o" aria-hidden="true"></span>
					</div>
					<div class="modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Your Account</h3>
		 <br/>
						 
 <?php
// print_r($_SESSION);print_r($page_owner);
$myor=mysqli_query($conn,"SELECT * FROM `order_detail` WHERE email='$page_owner'");
while($orfetch=mysqli_fetch_assoc($myor))
{
$orderid=$orfetch['order_id'];
$id=$orfetch['p_id'];
$orqty=$orfetch['qty'];
$orprice=$orfetch['price'];
$date=$orfetch['date'];

$getpro=mysqli_query($conn,"SELECT * FROM `product` WHERE p_id='$id'");
$fetchpro=mysqli_fetch_assoc($getpro);
$pimage=$fetchpro['image'];
$pname=$fetchpro['p_name']; 
?>

   
								 
										<h4 class="heading-tittle">
									<span class="item_price">
									<?php 
                                        $tablepro=mysqli_query($conn,"SELECT * FROM `order_table` WHERE ord_id='$orderid'");
                                           while($fetchtb=mysqli_fetch_assoc($tablepro))
										   {  
                                             $satus=$fetchtb['order_status'];
											 $ord_id=$fetchtb['ord_id'];
											 if($orfetch['order_id']==$fetchtb['ord_id'])
                                        { ?>
								 			ORDERID:</span ><a href=#><?php echo $ord_id; ?> </a></h4>
										   <?php } }?>
												<div class="men-pro-item simpleCart_shelfItem" style="height:200px;">
													<table ><tbody>
														<td><img src="../Kitchen World/upload/<?php echo $pimage;?>" alt="" style="width: 180px; height:160px;"></td>
													<td style="padding-left: 200px;"><span class="item_price"> Order on:</span><?php echo $date?>           <span class="item_price">Expected Delived Date:</span><?php echo $date?></td></tbody></table>
												          <div class=" "><span>Order Status:- </span><span style="color:#3c763d"><?php echo $satus;?></span>
                                                             <button class="submit check_out" name="cancel_or" style="margin-top: 0px;padding: 4px 4px;font-size: 10px;letter-spacing: 0px;"> Cancel Order</button>
														</div>
														</div>
																<div class=""  ><span><a href="single.php?pid=<?php echo $pname;?>" class=" "><?php echo $pname;?></a></span>
				                                                 <span class="item_price">Price:</span><?php echo $orprice;?><span class="item_price">|Qty:</span><?php echo $orqty;?>
														</div>
   
													</div>         
												         
													</div>         
													</div>   
 
					 													
<?php } ?>
				 
				     <?php
			
				if(isset($_POST['submit']))
				{
					//$id=$_POST['id'];
					$name=$_POST['name'];
					$mobile=$_POST['mobile'];
					$email=$_POST['email'];
					
						$query="UPDATE `userinfo` SET `name`='$name',`mobile`='$mobile',`email`='$email' WHERE email='$page_owner'";
					$result=mysqli_query($conn,$query);
				echo '<script type="text/javascript">alert("Updated Succesfully");window.location=\'profile.php\';</script>';
					 
				}
			?>
					</div>
				</div>
			</div>
			 
		</div>
	</div>
<body>
</html>
