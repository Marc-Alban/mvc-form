<?php
require '../../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class MailModel {
    public function sendMail($nom_prenom, $email, $telephone) {
        $to = "m.millet@finapole.fr";
        $subject = "Informations client: Prêt travaux";

        ob_start();
        include '../views/email.php';
        $message = ob_get_contents();
        ob_end_clean();

        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'millet.marcalban@gmail.com';
            $mail->Password = 'Kiso7302!';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            $mail->setFrom('millet.marcalban@gmail.com', 'Votre Nom');
            $mail->addAddress($to);

            $mail->isHTML(true);

            $mail->Subject = $subject;
            $mail->Body = $message;

            $mail->send();
            return true;
        } catch (Exception $e) {
            return 'Une erreur est survenue lors de l\'envoi de l\'email: ' . $mail->ErrorInfo;
        }
    }
}
?>
