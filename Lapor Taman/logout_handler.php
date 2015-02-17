<?php
	setcookie("currentuser","",time()-3600);
	header("Location: index_admin.php");
?>