<?php
include('conn.php');
$main='0';
if(isset($_POST['reqID']) && $_POST['reqID']=="1"){
   $c_id=$_POST['c_id'];
   $quantity=$_POST['qty'];

   $incdec=$_POST['incdec'];
   $sql="";
   $chkPid=mysqli_query($conn,"SELECT * FROM `checkout` WHERE `chk_id`='$c_id'");
   $getPid=mysqli_fetch_assoc($chkPid);
   $pId=$getPid['p_id'];
   $canditon=mysqli_query($conn,"SELECT * FROM `product` WHERE `p_id`='$pId'");
   $stock=mysqli_fetch_assoc($canditon);
   $mantain=$stock['P_stocks'];

   if($incdec=="plus"){
       $price=$_POST['offer_price']+$_POST['poldprice'];
       if($mantain!=0)
       {
          //  $mantain=$mantain-1;
         $sql = "UPDATE `checkout` SET `price`='$price',`quantity`=`quantity`+1   WHERE `chk_id`='$c_id'";
     }
     else{
        echo $mantain;
        return;
    }

} else if($incdec=="minus"){
    $price=$_POST['offer_price']-$_POST['poldprice'];
    if($_POST['qty'] == 1) {
     $sql = "DELETE FROM `checkout` WHERE `chk_id`='$c_id'";
 } else {
     $sql = "UPDATE `checkout` SET `price`='$price',`quantity`=`quantity`-1 WHERE `chk_id`='$c_id'";
 }

} else if($incdec="remove"){
  $stock=$_POST['outof'];
  $qty=$_POST['qty'];
   $main=$stock+$qty+1;
    mysqli_query($conn,"UPDATE `product` SET `P_stocks`='$main' WHERE `p_id`='$pId'");
  $sql = "DELETE FROM `checkout` WHERE `chk_id`='$c_id'";
}



$result=mysqli_query ($conn,$sql);

if($result){
 if($incdec=="minus"){
  $pId=$getPid['p_id'];
  mysqli_query($conn,"UPDATE `product` SET `P_stocks`=`P_stocks`+1 WHERE `p_id`='$pId'");
} else {
  $pId=$getPid['p_id'];
  mysqli_query($conn,"UPDATE `product` SET `P_stocks`=`P_stocks`-1 WHERE `p_id`='$pId'");
}
echo 'Success';
} else {
    echo "Failed";
}
} else if(isset($_POST['reqID']) && $_POST['reqID']=="2") {
    if(isset($_POST['email'])){
        $p_id=$_POST['p_id'];
        $price=$_POST['price'];
        $quantity=$_POST['qty'];
        $email=$_POST['email']; 
	// $total=$_POST['pstock'];
	// $stk=$_POST['p_pro'];
        $sql = "INSERT INTO `checkout`( `p_id`, `email`, `quantity`, `price`) VALUES  ('".$p_id."' ,'".$email."','".$quantity."','".$price."')";
        $result=mysqli_query ($conn,$sql);

        if($result){
         mysqli_query($conn,"UPDATE `product` SET `P_stocks`=`P_stocks`-1 WHERE `p_id`='$p_id'");
         echo '<input type="submit" OnClick="" value="Added to cart" class="button" disabled />';
     } else {
        echo "Failed";
    }

}
}
?>
