<?php
	$id = $_POST['id_taman'];
	$nama = $_POST['namataman'];
	$alamat = $_POST['alamattaman'];
	$admin = $_POST['instansi'];
	
	mysql_connect("localhost","root","");
	@mysql_select_db("lapor_tamanbdg") or die( "Unable to select database");
	$query = "SELECT id_instansi FROM t_instansi WHERE nama='".$admin."'";
	$result = mysql_query($query);
	$id_admin = mysql_result($result,0,"id_instansi");
	$query = "UPDATE t_taman SET nama='".$nama."',alamat='".$alamat."',id_berwenang='".$id_admin."' WHERE id_taman='".$id."';";
	mysql_query($query);
	header("Location: manajemenuser.php");
?>