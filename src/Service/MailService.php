<?php

namespace App\Service;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class MailService
{
    private $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    public function sendMail($nom_prenom, $email, $telephone)
    {
        $to = "m.millet@finapole.fr";
        $subject = "Informations client: Prêt travaux";

        ob_start();
        include '../views/email.php';
        $message = ob_get_contents();
        ob_end_clean();

        $email = (new Email())
            ->from('millet.marcalban@gmail.com')
            ->to($to)
            ->subject($subject)
            ->html($message);

        try {
            $this->mailer->send($email);
            return true;
        } catch (\Exception $e) {
            return 'Une erreur est survenue lors de l\'envoi de l\'email: ' . $e->getMessage();
        }
    }
}
