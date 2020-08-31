<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once "phpmailer/PHPMailer.php";
require_once "phpmailer/SMTP.php";
require_once "phpmailer/Exception.php";

$mail = new PHPMailer(true);
$alert='';
if(isset($_POST['submit'])){

$nom= $_POST['nom'];
$email= $_POST['email'];
$adresse= $_POST['adresse'];
$msg= $_POST['msg'];
$code= $_POST['code'];
$ville= $_POST['ville'];
$tel= $_POST['tel'];
$societe= $_POST['societe'];
$suis= $_POST['suis'];
//$mail->SMTPDebug = 4;                               // Enable verbose debug output

try{
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'info@winwats.com';                 // SMTP username
$mail->Password = 'winwats@rachid2018';                           // SMTP password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('info@winwats.com');
$mail->addAddress('info@winwats.com');     // Add a recipient
               // Name is optional
//$mail->addReplyTo(EMAIL);

        // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Winwats(Contact Page)';
$mail->Body    = "<h3>Nom: $nom <br> Adresse: $adresse <br> Code postal: $code <br> Ville: $ville <br> Email: $email <br> Téléphone: $tel<br> Société: $societe <br> Je suis: $suis <br> Message: $msg </h3>";


$mail->send();
$alert='<div class="alert-success text-center">
            <span>Message envoyé! Merci de nous avoir contacté.</span>
        </div>';


} catch(Exception $e){
$alert='<div class="alert-error">
            <span>'.$e->getMessage().'</span>
        </div>';}


}
?>