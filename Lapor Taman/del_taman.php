<?php
	$sum = $_POST['sum'];
	
	mysql_connect("localhost","root","");
	@mysql_select_db("lapor_tamanbdg") or die( "Unable to select database");
	for($i=0 ; $i<$sum ; $i++){
		if (isset($_POST['check'.$i])){
			$id=$_POST['check'.$i];
			$query = "DELETE FROM t_taman WHERE id_taman='".$id."';";
			mysql_query($query);
		}
	}
	header("Location: manajemenuser.php");
?>