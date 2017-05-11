<?php 
	$host="127.0.0.1";
	$username="root";
	$password="";
	$db="Lowongan";

	$connect=mysql_connect($host,$username,$password);
	$find=mysql_select_db($db);

if ($_POST['Submit']=="Submit") {
	$id_job=$_POST['id_job'];
	$id_persh=$_POST['id_persh'];
	$jabatan=$_POST['jabatan'];
	$usia=$_POST['usia'];
	$pengalaman=$_POST['pengalaman'];
	$JK=$_POST['JK'];
	$pendidikan=$_POST['pendidikan'];
	$IPK=$_POST['IPK'];
	$lainnya=$_POST['lainnya'];
	$qty=$_POST['qty'];
	$closing_date=$_POST['closing_date'];

	//echo $id_job.''.$id_persh.''.$jabatan.''.$usia.''.$pengalaman.''.$JK.''.$pendidikan.''.$IPK.''.$lainnya.''.$qty.''.$closing_date;
	$input="INSERT INTO lowongan(id_job,id_persh,jabatan,usia,pengalaman,JK,pendidikan,IPK,lainnya,qty,closing_date)VALUES('$id_job','$id_persh','$jabatan','$usia','$pengalaman','$JK','$pendidikan','$IPK','$lainnya','$qty','$closing_date')";
			$query_input=mysql_query($input);

			if ($query_input) {
				echo "Data Berhasil dimasukan";
				mysql_close($connect);
			}
			else{
				echo "Data gagal diinput";
				mysql_close($connect);
			}
	}

?>
<!DOCTYPE html>
<html>
	<head>
	  <title>Akakom Career Center</title>
	  <link href="style.css" rel="stylesheet" type="text/css">
	</head>
<body>
	<div>
	  <b><a href="../menu.php">Isikan data kembali</a></b>
	</div>
</body>
</html>