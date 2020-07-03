<?php
include('conn.php');

if(isset($_POST['otp']))
	{$chk=mysqli_query($conn,"SELECT * FROM `OTP` ");
$ck=mysqli_fetch_assoc($chk);
$email=$ck['email'];
$date=$ck['exp_time'];
date_default_timezone_set('Asia/Kolkata');
$endTime = strtotime("+1 minutes",strtotime($date));
$now= date('H:i:s', time());
$ens=date('H:i:s', $endTime);
print_r($ens);
if($now<$ens)
{ 

	 // $motp=$ck['otp'];
	$chkmail=mysqli_query($conn,"SELECT * FROM `userinfo` WHERE email='$email'");
	if(mysqli_num_rows($chkmail) >0)
	{ 
		$otp=$_POST['otp'];
		$chkotp=mysqli_query($conn,"SELECT * FROM `OTP` WHERE otp='$otp'");
		if(mysqli_num_rows($chkotp) >0)
		{ 
			echo"<i class='fa fa-check'style='font-size:24px;color:green'></i>match";
		}
		else
		{
			echo"Enetr a valid otp";
		}
	}else
	{
		echo"found match";
	}
	
}
else{
	mysqli_query($conn,"UPDATE OTP SET otp='0',email='0',mobile='0' WHERE 1");
	echo"OTP are expired";
	
}
}
else
{
	echo"not";
}


?>