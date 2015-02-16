<?php
	
	$toAdress = $_POST["email"];
	$subject = $_POST["subjek"];
	require_once '/Swift-5.1.0/lib/swift_required.php';
	// Create the Transport
	$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl");
	$transport->setUsername('vladsaurus@gmail.com');
	$transport->setPassword('telurarab');

	/*
	You could alternatively use a different transport such as Sendmail or Mail:

	// Sendmail
	$transport = Swift_SendmailTransport::newInstance('/usr/sbin/sendmail -bs');

	// Mail
	$transport = Swift_MailTransport::newInstance();
	*/

	// Create the Mailer using your created Transport
	$mailer = Swift_Mailer::newInstance($transport);
	$message = Swift_Message::newInstance();
	$message->setSubject($subject);
	$message->setFrom(array('riadysastrak@gmail.com' => 'Riady'));
	$message->setTo($toAdress);
	$message->setBody('
	Hi, tes
	konten
');
	$result = $mailer->send($message);
	echo $result;
	    

    
?>