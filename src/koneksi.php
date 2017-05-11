<?php 
	$host="127.0.0.1";
	$username="root";
	$password="";
	$db="Lowongan";

	$connect=mysql_connect($host,$username,$password);
	$find=mysql_select_db($db);

	//echo "databses ada";

	if ($find) {
		echo "Database Tersambung";
		mysql_close($connect);
	}
	else{
		echo "Databases tidak tersambung";
		mysql_close($connect);
	}
	//echo "tes";
?>