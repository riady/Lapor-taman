<?php
	$user = $_POST['username'];
	$pass = $_POST['password'];
	
	mysql_connect("localhost","root","");
	@mysql_select_db("lapor_tamanbdg") or die( "Unable to select database");
	$query = "SELECT * FROM t_admin WHERE username='".$user."'";
	$result = mysql_query($query);
	$sum = mysql_numrows($result);
	if ($sum==0){
		header("Location: index_admin.php?x=1");
	} else {
		$flag=false;
		for($i=0 ; (($i<$sum)&&($flag==false)) ; $i++){
			$passdb = mysql_result($result,$i,"password");
			if ($passdb==$pass){
				$flag=true;
			}
		}
		if ($flag==true){
			header("Location: daftarpengaduan.php");
		} else {
			header("Location: index_admin.php?x=1");
		}
	}
?>