<!DOCTYPE html>
<html>
<head>
	<title>Input Lowongan Pekerjaan</title>
	<link rel="stylesheet" href="css/loker.css">
</head>
<body>
	<div class="hanya">
		<form action="actionPelamar.php" method="post">
		<table cellpadding="10" cellspacing="0">
			<tr>
				<td> </td>
				<td>NIM</td>
				<td> </td>
				<td><input type="text" name="NIM" maxlength="10" placeholder="123456789"></td>
			</tr>
			<tr>
				<td> </td>
				<td>Nama Mahasiswa</td>
				<td> </td>
				<td><input type="text" name="nama_mhs" maxlength="10" placeholder="Example Name"></td>
			</tr>
			<tr>
				<td> </td>
				<td>Alamat</td>
				<td> </td>
				<td><textarea rows="5" cols="25" name="alamt" placeholder="Jl.contoh NO...."></textarea></td>
			</tr>
			<tr>
				<td> </td>
				<td>No telp</td>
				<td> </td>
				<td><input type="text" name="no_tlp" placeholder="6281234xxxxxx"></td>
				<td> </td>
				<td>Jurusan</td>
				<td><select name="nama_jurusan">
					<option value="-">--Pilih Jurusan--</option>
					<option value="TI">Teknik Informatika</option>
					<option value="SI">Sistem Informasi</option>
					<option value="MI">Manajemen informatika</option>
					<option value="KA">Komputerisasi Akuntansi</option>
					<option value="TK">Teknik Komputer</option>
				</select></td>
			</tr>
			<tr>
				<td> </td>
				<td>Email</td>
				<td> </td>
				<td><input type="email" name="email" placeholder="Example@gmail.com"></td>
				<td> </td>
				<td>IPK</td>
				<td><input type="text" name="IPK" placeholder="8.88"></td>
			</tr>
			<tr>
				<td> </td>
				<td>Jenis Kelamin</td>
				<td> </td>
				<td><input type="radio" name="JK" value="P">Pria</td>
				<td><input type="radio" name="JK" value="L">Wanita</td>
				<td><input type="radio" name="JK" value="PL">Pria dan Wanita</td>
				<td> </td>
			</tr>
			<tr>
				<td> </td>
				<td>Tanggal Lahir</td>
				<td> </td>
				<td><input type="date" name="TTL"></td>
			</tr>
			<tr>
				<td> </td>
				<td>Minat Bidang</td>
				<td> </td>
				<td><select name="minat_bidang">
					<option value="-">--Pilih Bidang--</option>
					<option value="website">Website</option>
					<option value="mobile">Mobile</option>
					<option value="jaringan">Network</option>
					<option value="AI">Artificial Intelegent</option>
					<option value="analisi">Analysist</option>
					<option value="etc">Lainya</option>
				</select></td>
				<td> </td>
				<td>Tahun Kelulusan</td>
				<td><input type="text" name="th_lulus" placeholder="20xx"></td>
			</tr>
			<tr>
				<td> </td>
				<td> </td>
				<td><input type="submit" name="Submit" value="Submit"></td>
				<td><input type="reset" name="reset" value="reset"></td>
			</tr>
		</table>	
		</form>
	</div>
</body>
</html>