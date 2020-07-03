 
 <?php
 require 'mailer\class.phpmailer.php';
require 'mailer\PHPMailerAutoload.php';

 
$mail = new PHPMailer;

$mail->SMTPDebug =0;                               
 
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
$mail->addAddress("chiragkumar7691@gmail.com");      
 

                               // Set email format to HTML

$mail->Subject = 'Registeration';
$mail->Body    = "Hello You have successfully created your account on Kitchen World.";
// $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if($mail->send())
{
	echo "Registration Succesfully";
}
else{
	echo "place check connection";
} ?>