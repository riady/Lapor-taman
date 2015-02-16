<?php
	$id_pengaduan = $_POST["id_pengaduan"];
	mysql_connect("localhost","root","");
	@mysql_select_db("lapor_tamanbdg") or die( "Unable to select database");
	$query = "SELECT * FROM t_adu WHERE id_pengaduan='".$id_pengaduan."'";
	$result = mysql_query($query);
	$id_taman = mysql_result($result,0,"id_mengenai");
	
	$konten = mysql_result($result,0,"konten");
	$query = "SELECT * FROM t_taman WHERE id_taman='".$id_taman."'";
	$result = mysql_query($query);
	$id_instansi = mysql_result($result,0,"id_berwenang");
	
	$query = "SELECT * FROM t_instansi WHERE id_instansi='".$id_instansi."'";
	$result = mysql_query($query);
	$toAdress = mysql_result($result,0,"email");
	
	$subject = "Laporan tentang taman";
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
	$message->setBody($konten);
	$result = $mailer->send($message);
	echo $result;
	    
	header("Location: daftarpengaduan.php");
    
?>