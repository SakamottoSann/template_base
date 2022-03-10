<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class SendEmail
{
	protected $mail;

	function __construct()
	{
		$this->mail = new PHPMailer();
	}

	public function enviar($email, $title, $view)
	{
		try {
            $this->mail->isSMTP();
            $this->mail->Host = 'mail.selflog.com.br';
            $this->mail->SMTPAuth = true;
            $this->mail->Username = 'sistema@selflog.com.br';
            $this->mail->Password = '509CRAD15';
            $this->mail->SMTPSecure = '';
            $this->mail->Port = 587;
            
            $this->mail->setFrom('sistema@selflog.com.br', 'Sistema SelfLog');
            $this->mail->addAddress($email);
            
            $this->mail->isHTML(true);
            $this->mail->Subject = utf8_decode($title);
            $this->mail->Body = utf8_decode($view);

            $this->mail->send();

            return true;
        } catch (Exception $e) {
            return false;
        }
	}
}