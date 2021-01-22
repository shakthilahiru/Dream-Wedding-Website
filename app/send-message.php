<?php
session_start();
include '../constants/config.php';

$myfname = ucwords($_GET['name']);
$myemail = $_GET['email'];
$mymessage = $_GET['message'];
$myphone = $_GET['phone'];
$mymessage = "$mymessage<br><hr>Sender Information<br>
Phone : $myphone<br>Email : $myemail<hr>";

require '../mail/PHPMailerAutoload.php';

$mail = new PHPMailer;


$mail->isSMTP();                                      
$mail->Host = $smtp_host;
$mail->SMTPAuth = true;                           
$mail->Username = $smtp_user;               
$mail->Password = $smtp_pass;                       
$mail->SMTPSecure = 'tls';                   
$mail->Port = 587;   

$mail->setFrom($myemail, $myfname);
$mail->addAddress($site_email);           
  
$mail->isHTML(true);

$mail->Subject = 'Contact';
$mail->Body    = $mymessage;
$mail->AltBody = $mymessage;

if(!$mail->send()) {
$_SESSION['reply'] = "012";
header("location:../contact");
} else {
$_SESSION['reply'] = "011";
header("location:../contact");
}

?>