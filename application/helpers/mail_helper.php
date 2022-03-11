<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function sendMail($subject, $message, $email)
{      
	try {
		$mail = new PHPMailer(true);
		$mail->CharSet = 'UTF-8';
		$mail->SetLanguage("br", "libs/"); // Linguagem
		$mail->Port = 587; // Porta do SMTP
		$mail->SMTPSecure = ""; // Tipo de comunicação segura
		$mail->IsSMTP();
		$mail->Host = "mail.trackdata.com.br"; // Endereço do servidor SMTP
		$mail->SMTPAuth = true; // Requer autenticação?
		$mail->Username = "sistema@trackdata.com.br"; // Usuário SMTP
		$mail->Password = "2375TR11"; // Senha do usuário SMTP
		$mail->setFrom("sistema@trackdata.com.br", "Sistema Trackdata"); // E-mail do remetente
		$mail->IsHTML(true);
		
		$mail->AddAddress($email); // E-mail do destinatário
		$mail->Subject = $subject;
		$mail->Body = $message;
		$mail->Send();

		return true;
	}
	catch(Exception $e) {
		return false;
	}   
}
