<?php 
	if ((isset($_POST['username']))&&(isset($_POST['password']))&&(isset($_POST['email']))){
	//require_once '/Swift-5.1.0/lib/swift_init.php';
	require_once '/Swift-5.1.0/lib/swift_required.php';
	// Create the Transport
	$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl");
	$transport->setUsername('email_lo@gmail.com');
	$transport->setPassword('your_password');
	$token = $_POST['phone'].$_POST['username'];

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
	$message->setSubject('Tes Kirim Email');
	$message->setFrom(array('destra.bintang.perkasa@gmail.com' => 'Destra'));
	$message->setTo(array($_POST['email'] => $_POST['nama']));
	$message->setBody('
	Hi, '.$_POST['username'].'.
	konten
');
	$result = $mailer->send($message);
	echo $result;
	include "database_connection.php";
		$myusername=$_POST['username'];
		$mypassword=$_POST['password'];
		$mynama = $_POST['nama'];
		$myorganisasi = $_POST['organisasi'];
		$myemail = $_POST['email'];
		$myphone = $_POST['phone'];
		// To protect MySQL injection (more detail about MySQL injection)
		$myusername = stripslashes($myusername);
		$mypassword = stripslashes($mypassword);
		$myusername = mysql_real_escape_string($myusername);
		$mypassword = mysql_real_escape_string($mypassword);
		//cek udah ada username apa belum
		$sql_check="SELECT * FROM penulis WHERE username='$myusername'";
		$result=mysql_query($sql_check);
		//if(!($result)) echo mysql_error();
		// Mysql_num_row is counting table row
		$count=mysql_num_rows($result);
		//kalo udah ada
		if ($count!=0){
			?>
			<script>
				alert("username already exists");
				window.location="register.php";
			</script>
			<?php
		}
		else {
			$sql_add="INSERT INTO penulis (username, password, email, organisasi, nama_lengkap, no_hp, token_verifikasi) values ('$myusername', '$mypassword', '$myemail', '$myorganisasi', '$mynama', '$myphone', '$token')";
			$result=mysql_query($sql_add);
			/*if (!mysqli_query($db,$sql_add))
			{
				die('Error: ' . mysqli_error($db));
			}*/?>
			<script>
				window.location="verify.php";
			</script><?php
		}
	}
	else{
		?>
		<script>
			alert("Please complete required fields.");
			window.location="register.php";
		</script>
		<?php
	}
?>