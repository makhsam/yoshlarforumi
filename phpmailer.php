<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once "vendor/autoload.php";

class Mail
{
    const TO_ADDRESS = 'sayidazimahmudov@gmail.com';
    const TO_NAME = 'Sayidazim Mahmudov';

    protected $params = ['name', 'email', 'phone', 'category', 'lang', 'purpose', 'visited'];
    protected $request = []; // POST data

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

    public function send()
    {
        $mail = new PHPMailer(true); // Argument true in constructor enables exceptions

        // From email address and name
        $mail->From = $this->request['email'];
        $mail->FromName = $this->request['name'];

        // To address and name
        $mail->addAddress(self::TO_ADDRESS, self::TO_NAME);
        // $mail->addAddress("sam1997co@mail.ru"); // Recipient name is optional

        // Address to which recipient will reply
        $mail->addReplyTo(self::TO_ADDRESS, "Reply");

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
}
