<?php 
	$host="127.0.0.1";
	$username="root";
	$password="";
	$db="Lowongan";

	$connect=mysql_connect($host,$username,$password);
	$find=mysql_select_db($db);

if ($_POST['Submit']=="Submit") {
	$NIM=$_POST['NIM'];
	$nama_mhs=$_POST['nama_mhs'];
	$alamt=$_POST['alamt'];
	$no_tlp=$_POST['no_tlp'];
	$email=$_POST['email'];
	$nama_jurusan=$_POST['nama_jurusan'];
	$IPK=$_POST['IPK'];
	$TTL=$_POST['TTL'];
	$th_lulus=$_POST['th_lulus'];
	$minat_bidang=$_POST['minat_bidang'];
	$JK=$_POST['JK'];

	//echo $NIM.$nama_mhs.$alamt.$no_tlp.$email.$nama_jurusan.$IPK.$TTL.$th_lulus.$minat_bidang.$JK;
	$input="INSERT INTO mahasiswa(NIM,nama_mhs,alamt,no_tlp,email,nama_jurusan,IPK,TTL,th_lulus,minat_bidang,JK)VALUES('$NIM','$nama_mhs','$alamt','$no_tlp','$email','$nama_jurusan','$IPK','$TTL','$th_lulus','minat_bidang','$JK')";
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
	  <b><a href="inputlowongan.php">Isikan data kembali</a></b>
	</div>
</body>
</html>