 
 <?php
 require 'mailer\class.phpmailer.php';
require 'mailer\PHPMailerAutoload.php';

 
$mail = new PHPMailer;

$mail->SMTPDebug = 0;                               
 
$mail->isSMTP();       
// $mail->SMTPAuth = false;                                
$mail->Host = 'smtp.gmail.com';   
$mail->SMTPAuth = true;       
           $mail->Debugoutput = 'html';                       
$mail->Username = 'chiragkumar7691@gmail.com';                 
$mail->Password = 'kumar@8141@7691#chk';                            
$mail->SMTPSecure = 'tls';                             
$mail->Port = 587;                                     

$mail->setFrom('chiragkumar7691@gmail.com', 'Kitchen_World');
$mail->addReplyTo('chiragkumar7691@gmail.com', 'Kitchen_World');
$mail->addAddress($usermail);      
 

                               // Set email format to HTML

$mail->Subject = 'place order';
$mail->Body    = " ".$usermail."<br/>
Your order id=> ".$ord_id."<br/> 
quantity=>".$tqty."<br/>
Total price=>".$total."<br/>
address=>".$address."";
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Verification code could not be sent.';
    
} else {
    echo 'Verification code  has been sent';
}?>