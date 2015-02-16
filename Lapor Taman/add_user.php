<?php
	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$alamat = $_POST['alamat'];
	$email = $_POST['email'];
	$telepon = $_POST['telpon'];
	
	mysql_connect("localhost","root","");
	@mysql_select_db("lapor_tamanbdg") or die( "Unable to select database");
	$query = "INSERT INTO t_admin (nama,alamat,email,no_tlp,username,password) Values ('".$nama."','".$alamat."','".$email."','".$telepon."','".$username."','".$password."')";
	mysql_query($query);
	header("Location: manajemenuser.php");
?>