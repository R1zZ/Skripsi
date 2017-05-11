<?php
session_start(); // Memulai Session
$error=''; // Variabel untuk menyimpan pesan error
if (isset($_POST['register'])) {
	if (empty($_POST['email']) || empty($_POST['nama']) || empty($_POST['password'])) {
			$error = "silahkan cek Kelengkapan data anda";
	}
	else
	{
		// Variabel username dan password
		$status=$_POST['status'];
		$email=$_POST['email'];
		$nama=$_POST['nama'];
		$username=$_POST['username'];
		$passwd=$_POST['passwd'];
		$JK=$_POST['JK'];
		// Membangun koneksi ke database
		$connection = mysql_connect("localhost", "root", "");
		// Mencegah MySQL injection 
		$username = stripslashes($username);
		$passwd = stripslashes($passwd);
		$username = mysql_real_escape_string($username);
		$passwd = mysql_real_escape_string($passwd);
		// Seleksi Database
		$db = mysql_select_db("Lowongan", $connection);
		// SQL query untuk memeriksa apakah karyawan terdapat di database?
		$query = mysql_query("select * from admin where passwd='$password' AND username='$username'", $connection);
		$rows = mysql_num_rows($query);
			if ($rows == 1) {
				$_SESSION['login_user']=$username; // Membuat Sesi/session
				header("location: src/profile.php"); // Mengarahkan ke halaman profil
				} else {
				$error = "Username atau Password belum terdaftar";
				}
				mysql_close($connection); // Menutup koneksi
	}
}
?>