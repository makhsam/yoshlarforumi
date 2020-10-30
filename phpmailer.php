<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require_once "vendor/autoload.php";

class Mail
{
    const TO_ADDRESS = 'sayidazimahmudov@gmail.com';
    const TO_NAME = 'Sayidazim Mahmudov';
    const MAIL_USERNAME = 'napaautomative@gmail.com';
    const MAIL_PASSWORD = 'TDMcXXDlHsJjR0EL';

    protected $params = ['name', 'email', 'phone', 'category', 'lang', 'purpose', 'visited'];
    protected $request = []; // POST data

    /**
     * Validate the incoming request
     */
    public function validate(array $request)
    {
        // Extract data
        foreach ($request as $key => $value) {
            $this->request[$key] = $this->filterInput($value);
        }

        // Validate keys
        if (count(array_intersect($this->params, array_keys($this->request))) !== count($this->params)) {
            return false;
        }

        return true;
    }

    /**
     * Send the email
     */
    public function send()
    {
        // Create a new PHPMailer instance
        $mail = new PHPMailer(true);

        $mail->isSMTP();
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 465;
        $mail->SMTPSecure = 'ssl';
        $mail->SMTPAuth = true;

        $mail->Username = self::MAIL_USERNAME;
        $mail->Password = self::MAIL_PASSWORD;

        // Set who the message is to be sent from
        $mail->setFrom($this->request['email'], $this->request['name']);

        // Set an alternative reply-to address
        $mail->addReplyTo($this->request['email'], $this->request['name']);

        // Set who the message is to be sent to
        $mail->addAddress(self::TO_ADDRESS, self::TO_NAME);

        // Send HTML or Plain Text email
        $mail->isHTML(true);

        $mail->Subject = "Yoshlar forumi - Yangi ishtirokchi";
        $mail->Body = '<ul><li>' . implode('</li><li>', $this->request) . '</li></ul>';

        try {
            $mail->send();
        } catch (Exception $e) {
            return $mail->ErrorInfo;
        }

        return true;
    }

    /**
     * Filter the given input
     */
    protected function filterInput($value)
    {
        $value = trim($value);
        $value = stripslashes($value);
        $value = htmlspecialchars($value);
        return $value;
    }

    /**
     * Display message in window alert
     * 
     * @param string $message
     */
    public function showAlert($message = '')
    {
        echo '<script>';
        echo 'alert("So\'rovingiz qabul qilindi!");';
        echo '</script>';
    }
}
