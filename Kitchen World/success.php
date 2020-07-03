<?php  include("conn.php");
$status=$_POST['Status'];
if($status=='confome')
{
  if(isset($_POST['orderid']))
  {
   $ords=$_POST['orderid'];
   date_default_timezone_set('ASIA/Kolkata');
   $date=date("Y-m-d");
   if(mysqli_query($conn,"UPDATE `order_table` SET `order_status`='Success',`date`='$date' WHERE `ord_id`='$ords'"))
   {

     if($sq=mysqli_query($conn,"SELECT * FROM `order_table`WHERE `ord_id`='$ords'"))
     {
      $payfetch=mysqli_fetch_assoc($sq);

      $am=$payfetch['amount'];
      $st=$payfetch['order_status'];
      $qty=$payfetch['quantity'];
      $add=$payfetch['address_id'];
      $type=$payfetch['payment_type'];
      $email=$payfetch['email'];
      date_default_timezone_set('Asia/Kolkata');
      if($re=mysqli_query($conn,"INSERT INTO `order_re`(`order_id`,`amount`,`quantity`,`address_id`,`payment_type`, `order_status`, `email`, `date`) VALUES('$ords','$am','$qty','$add','$type','$st','$email','$date')"))
      {

        if($payment=mysqli_query($conn,"INSERT INTO `payment`( `order_id`, `amount`, `qty`, `payment status`, `date`) VALUES('$ords','$am','$qty','$st','".date('Y-m-d')."')") )
        {
         echo"sucess";

       }
       else
       {
        echo"query not INSERT";
      }
    }
  }

  else
  {
    echo"query not working";
  }

}
else
{
  echo"query not working";
}
}
}
else if ($status=='return')
 {     $ords=$_POST['orderid'];
if(mysqli_query($conn,"DELETE FROM `order_table` WHERE `ord_id`='$ords'"))
{
 echo"sucess";
 mysqli_query($conn,"DELETE FROM `order_detail` WHERE `order_id`='$ords'");
}
else
{
 echo"failde";
}

}
else
{
	echo'not cancel';
}


?>