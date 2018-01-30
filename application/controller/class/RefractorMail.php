<?php

class RefractorMail
{

    /**
     * To use this function, you must call it classically, but by changing 'PARAMS_MAIL' by the email of the sender.
     * You will need for each call of this function, with different addresses e-mails, to have the same password, as well as the same SMTP server.
     * @param $namefrom
     * @param $to
     * @param $subject
     * @param $message
     * @return bool
     */
    public function Mailer($namefrom, $to, $subject, $message, $PARAMS_MAIL)
    {
        require APP . 'core/PHPMailer/PHPMailerAutoload.php';
        define("SERVER_SMTP", "smpt.gmail.com");
        define("USERNAME_SMTP", $PARAMS_MAIL);
        define("PASSWORD_SMTP", "mypassword");
        $mail = new PHPMailer;

        $mail->isSMTP();
        $mail->SMTPOptions = array('ssl' => array('verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true));
        $mail->Host = SERVER_SMTP;
        $mail->SMTPAuth = true;
        $mail->Username = USERNAME_SMTP;
        $mail->Password = PASSWORD_SMTP;
        $mail->SMTPSecure = 'tls';
        $mail->Port = 25;

        $mail->setFrom(USERNAME_SMTP, $namefrom);
        $mail->addAddress($to);
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $message;

        if (!$mail->send()) {
            echo 'The email could not be sent. ';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
            return false;
        } else {
            return true;
        }
    }

}