<?php
	$nama = $_POST['namataman'];
	$alamat = $_POST['alamattaman'];
	$admin = $_POST['admin'];
	
	mysql_connect("localhost","root","");
	@mysql_select_db("lapor_tamanbdg") or die( "Unable to select database");
	$query = "SELECT id_admin FROM t_admin WHERE nama='".$admin."'";
	$result = mysql_query($query);
	$id_admin = mysql_result($result,0,"id_admin");
	$query = "INSERT INTO t_taman (nama,alamat,id_berwenang) Values ('".$nama."','".$alamat."','".$id_admin."')";
	mysql_query($query);
	header("Location: manajemenuser.php");
?>