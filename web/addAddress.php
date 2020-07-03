<?php
include('conn.php');
if(isset($_POST['userid']))
{
    $userid=$_POST['userid'];
    $name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $addresstype=$_POST['addresstype'];
    $sql = "INSERT INTO `address`(`email`,`name`,`mobile`,`address`,`city`,`address_type`) VALUES ('".$userid."','".$name."', '".$mobile."','".$address."','".$city."','".$addresstype."')";
	  $result=mysqli_query ($conn,$sql);

    if($result){
        echo "Success";
    } else {
        echo "Failed";
}
}
 ?>
