<?php
include('conn.php');
include('session.php');
if(isset($_SESSION['email'])){
	$page_owner=$_SESSION['email'];
	 
} else {
	$page_owner='';
	 }
 				                  
															$name=$_POST['name'];
															$email=$_POST['email'];
															$address=$_POST['address'];
															$mobile=$_POST['mobile'];
															
															$password=$_POST['password'];
															$password1=$_POST['password1'];
															$response="";
							
															date_default_timezone_set('Asia/Kolkata');
															if(preg_match('/^[0-9]{10}+$/',$mobile))
															{
																if($password==$password1){
																	$chkmail=mysqli_query($conn,"SELECT * FROM `userinfo` WHERE `email`='$email'");
																	$chkmobile=mysqli_query($conn,"SELECT * FROM `userinfo` WHERE `mobile`='$mobile'");
																	if(mysqli_num_rows($chkmail) > 0){
																		echo '2';
																	} else if(mysqli_num_rows($chkmobile) > 0){
																		echo "3";
																	}
																	else
																	{
                                                                             if(mysqli_query($conn,"INSERT INTO `userinfo`(`name`, `email`, `mobile`,`address`, `password`, `date`)
																			VALUES ('$name','$email','$mobile','$address','$password','".date('Y-m-d')."')"))
																		    { 
																		    	$mb=trim($mobile);
																		$to=$mb;
																		$message = urlencode("Hello".$email."You have successfully created your account on Kitchen World.");
																		$url ="http://sms.bulksmsmarg.com/rest/services/sendSMS/sendGroupSms?AUTH_KEY=702263593df9b9a7efa6454e1b04c9b&message="
																		.$message."&senderId=INSPER&routeId=1&mobileNos=".$to."&smsContentType=english";
																		error_reporting(0);

																		if($ret = file_get_contents($url))
																		{
																			          $_SESSION['email']=$email;
																			include('create_email.php');
																			echo "1";
																			
																		    }
																		}
																			
																		 
																	}
																} else {
																	echo "4";
																}
															} else {
															 
																echo "5";
															}?>