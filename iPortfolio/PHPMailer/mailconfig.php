<?php 

function sendmail($from,$to,$subject,$message) {

 require 'PHPMailerAutoload.php';

        
       


$mail = new PHPMailer();
    $mail->isSMTP();
   
    $mail->Host = 'smtp.example.com';
    $mail->Port = 587;
 
    $mail->SMTPAuth = true;
    $mail->Username = 'kannankutty221@gmail.com';
    $mail->Password = 'Kannan1809@18';
    $mail->SMTPSecure = 'tls';
    $mail->setFrom($from, 'Kannan Software Developer, Chennai');
    $mail->addReplyTo($from, 'Kannan Software Developer, Chennai');
    $mail->addAddress($to);
    $mail->Subject = $subject;
    $mail->isHTML(true);
    $mailContent = $message;
       
    $mail->Body = $mailContent;
    $output = $mail->send(); 


return $output;

}

?>