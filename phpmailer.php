<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require_once "vendor/autoload.php";

class Mail
{
    const TO_ADDRESS = 'sam1997co@mail.ru';
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

        // Tell PHPMailer to use SMTP
        $mail->isSMTP();

        // Enable SMTP debugging
        // SMTP::DEBUG_OFF = off (for production use)
        // SMTP::DEBUG_CLIENT = client messages
        // SMTP::DEBUG_SERVER = client and server messages
        $mail->SMTPDebug = SMTP::DEBUG_OFF;

        // Set the hostname of the mail server
        $mail->Host = 'smtp.gmail.com';

        // Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
        $mail->Port = 587;

        // Set the encryption mechanism to use - STARTTLS or SMTPS
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

        // Whether to use SMTP authentication
        $mail->SMTPAuth = true;

        // Username to use for SMTP authentication
        $mail->Username = self::MAIL_USERNAME;

        // Password to use for SMTP authentication
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
