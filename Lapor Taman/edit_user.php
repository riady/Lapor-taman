<?php
	$id = $_POST['id_user'];
	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$alamat = $_POST['alamat'];
	$email = $_POST['email'];
	$telepon = $_POST['telpon'];
	
	mysql_connect("localhost","root","");
	@mysql_select_db("lapor_tamanbdg") or die( "Unable to select database");
	$query = "UPDATE t_admin SET nama='".$nama."',alamat='".$alamat."',email='".$email."',no_tlp='".$telepon."',username='".$username."',password='".$password."' WHERE id_admin='".$id."';";
	mysql_query($query);
	header("Location: manajemenuser.php");
?>