<?php 
include('conn.php');
if(isset($_POST['email']))
{   $email=$_POST['email'];
	date_default_timezone_set('Asia/Kolkata');
// if(preg_match('/^[0-9]{10}+$/', $mobile))
// 	{
  $genrate='0'; 
  $chk=mysqli_query($conn,"SELECT * FROM `userinfo` WHERE `email`='$email'");

if(mysqli_num_rows($chk) >0)
{
	$genrate=rand(1000,9999);
	mysqli_query($conn,"UPDATE OTP SET otp='$genrate',email='$email',exp_time='".date('Y-m-d H:i:s')."' WHERE 1");
	 // print_r($genrate);
	include('email_php.php');
}

else{
	echo "1";
   }
}
else{
	echo "no invalid";
}

?>