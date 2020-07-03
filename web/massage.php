<?php 
$to=8141379057;
$message = urlencode("Your User ID : And Password :");
$url ="http://sms.bulksmsmarg.com/rest/services/sendSMS/sendGroupSms?AUTH_KEY=702263593df9b9a7efa6454e1b04c9b&message=".$message."&senderId=INSPER&routeId=1&mobileNos=".$to."&smsContentType=english";
if($ret = file_get_contents($url))
{
	echo '<script type="text/javascript">alert("Login Successfully");window.location=\'index.php\'</script>';

} else {
	echo '<script type="text/javascript">alert("Check Network");window.location=\'index.php\'</script>';
}																		

?>