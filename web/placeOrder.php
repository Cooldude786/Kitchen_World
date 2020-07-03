<?php 
include('conn.php');
date_default_timezone_set('Asia/Kolkata');
if(isset($_POST['email']) && $_POST['email']!=""){
	$usermail=$_POST['email'];
	$ord_id="ORD".time() . mt_rand();
	$del_address=$_POST['del_add'];
	$date = date("Y-m-d");
	$total=0;
	$res="";
	$chkProduct=mysqli_query($conn,"SELECT * FROM `checkout` WHERE `email`='$usermail'");
	$num_row=mysqli_num_rows($chkProduct);
	if($num_row > 0){
		$tqty='0';
		while($row=mysqli_fetch_assoc($chkProduct)){
			$product_total_price=$row['price'];
			$total+=$product_total_price;
			$p_id=$row['p_id'];
			$chkid=$row['chk_id'];
			$qty=$row['quantity'];
			$tqty+=$qty;
			if(mysqli_query($conn,"INSERT INTO `order_detail`(`email`, `order_id`, `p_id`, `qty`, `price`,`date`) VALUES ('$usermail','$ord_id','$p_id','$qty','$product_total_price','$date')")){
				mysqli_query($conn,"DELETE FROM `checkout` WHERE `chk_id`='$chkid'");
			}	
		}


		if(mysqli_query($conn,"INSERT INTO `order_table`(`ord_id`, `address_id`, `amount`,`quantity`, `payment_type`, `order_status`, `email`,`date`) VALUES ('$ord_id','$del_address','$total','$tqty','COD','Pending','$usermail','$date')")){
			$res.="Placed";
		} else {
			$res.="NotPlaced";
		}
		$usern=mysqli_query($conn,"SELECT * FROM userinfo WHERE email='$usermail'"); 
 $first=mysqli_fetch_assoc($usern);
 $addusern=mysqli_query($conn,"SELECT * FROM address WHERE id='$del_address'"); 
 $addr=mysqli_fetch_assoc($addusern);
 $address=$addr['address'];
 $mobile=$first['mobile'];
 $mb=trim($mobile);
$to=$mb;  
		$message = urlencode(" ".$usermail."
			Your order id".$ord_id." 
			quantity".$tqty."
			Total price".$total."
			address".$address."
			");
		$url ="http://sms.bulksmsmarg.com/rest/services/sendSMS/sendGroupSms?AUTH_KEY=702263593df9b9a7efa6454e1b04c9b&message=".$message."&senderId=INSPER&routeId=1&mobileNos=".$to."&smsContentType=english";


		if($ret = file_get_contents($url)) {
            include('order_mail.php');
			echo'send';
		}
		else{
			echo 'not send';
		}


	} else {
		$res.= "Failed";
	}
	echo $res;

} else {
	echo "Email Empty";
}
 
?>