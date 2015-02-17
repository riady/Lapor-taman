<?php
	$sum = $_POST['sum'];
	
	mysql_connect("localhost","root","");
	@mysql_select_db("lapor_tamanbdg") or die( "Unable to select database");
	for($i=0 ; $i<$sum ; $i++){
		if (isset($_POST['id_adu'.$i])){
			$id=$_POST['id_adu'.$i];
			$query = "UPDATE t_adu SET status=".$_POST['stats'.$i]." WHERE id_pengaduan='".$id."';";
			mysql_query($query);
			echo "\n";
		}
	}
	header("Location: daftarpengaduan.php");
?>