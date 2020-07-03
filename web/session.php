<?php 
session_start();
include('conn.php');

if(isset($_SESSION['email'])){
	$userlogin=$_SESSION['email'];
	if(mysqli_query($conn,"SELECT * `userinfo` WHERE `email`='$userlogin'")){
		$userlogin=$_SESSION['email'];
	} else {
		$userlogin='';
		//echo '<script type="text/javascript">alert("Sesssion Is Expired So Please Login Again");window.location=\'index.php\'</script>';
	}
}
?>