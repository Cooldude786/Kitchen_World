<?php include('conn.php');
if(isset($_POST['orderid']))
	{   $ordid=$_POST['orderid'];
$pid=$_POST['pid'];
$amount=$_POST['amount'];
$qty=$_POST['quantity'];
date_default_timezone_set('ASIA/KOLKATA');
if($cod=mysqli_query($conn,"SELECT * FROM `order_table`WHERE `ord_id`='$ordid'"))
	{$fetchcod=mysqli_fetch_assoc($cod);
		$methord=$fetchcod['payment_type'];
		$give=$fetchcod['address_id'];
		$email=$fetchcod['email'];
		if(mysqli_query($conn,"INSERT INTO `return_order`(`order_id`,`amount`,`quantity`,`payment_type`,`address`,`status`,`date`) VALUE('$ordid','$amount','$qty','$methord','$give','Return','".date('Y-m-d')."')"))
		{
			echo"success";
			if(mysqli_query($conn,"UPDATE `order_table` SET `order_status`='Return' ,`date`='".date('Y-m-d')."' WHERE ord_id='$ordid'"))
			{
				echo"success";
				mysqli_query($conn,"DELETE FROM  payment WHERE order_id='$ordid'");
				mysqli_query($conn,"DELETE FROM  order_re WHERE order_id='$ordid'");
		  
			}
$usern=mysqli_query($conn,"SELECT * FROM userinfo WHERE email='$email'"); 
 $first=mysqli_fetch_assoc($usern);
 $addusern=mysqli_query($conn,"SELECT * FROM address WHERE id='$give'"); 
 $addr=mysqli_fetch_assoc($addusern);
 $address=$addr['address'];
 $mobile=$first['mobile'];
 $mb=trim($mobile);
$to=$mb;  
		$message = urlencode(" ".$email."
			Your order return 
			order id=>".$ordid."
			quantity=>".$qty."
			Total price=>".$amount."
			address=>".$address."
			");
		$url ="http://sms.bulksmsmarg.com/rest/services/sendSMS/sendGroupSms?AUTH_KEY=702263593df9b9a7efa6454e1b04c9b&message=".$message."&senderId=INSPER&routeId=1&mobileNos=".$to."&smsContentType=english";


		if($ret = file_get_contents($url)) {

			echo"send Email";
			include('return_mail.php');
		}
		else{
			echo"not send";
		}

			
		}
		else
		{
			echo"faild";
		}
	}
	else
	{
		echo"not connect";
	}
}else
{
	echo"not connect";
}
?>