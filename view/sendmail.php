<?php
if (isset($_GET['emailParticipant']) && isset($_GET['idParticipant'])) {
require './PHPMailer/PHPMailerAutoload.php';
require_once     '../eventC/ParticipantC.php';
//require_once     '../model/Participant.php';

$participantc = new ParticipantC();
$a = $participantc->getEmailp($_GET['idParticipant']);
$mailParticipant = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mailParticipant->isSMTP();                                      // Set mailer to use SMTP
$mailParticipant->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mailParticipant->SMTPAuth = true;                               // Enable SMTP authentication
$mailParticipant->Username = 'achref.kacem@esprit.tn';                 // SMTP username
$mailParticipant->Password = '07249614';                           // SMTP password
$mailParticipant->SMTPSecure = 'tls';                            // Enable TLS encryption, ssl also accepted
$mailParticipant->Port = 587;                                    // TCP port to connect to

$mailParticipant->setFrom('noreply@AIM.com', 'no-reply');
$mailParticipant->addAddress($_GET['emailParticipant']);     // Add a recipient
$mailParticipant->addAddress('arbia.sassi@esprit.tn');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mailParticipant->isHTML(true);   



$mailParticipant->Subject = 'Bienvenue';
$mailParticipant->Body = 'salut,<br>
               merci pour la participation a lparticipant '.$a['idParticipant'] .'
                <br><br>
               this message was sent from an unmonitored address . Please do not reply to this address.<br><br>Best regards,<br>the ADRENALINA Team';
               $mailParticipant->AltBody = 'This is the body in plain text for non-HTML mailParticipant clients';

if(!$mailParticipant->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mailParticipant->ErrorInfo;
} else {
    echo 'Message has been sent';
}
//---------------------end sending mail -----------//


header('Location:tables-datatable.php');
}else {
    header('Location:tables-datatable.php');
}
?>