<!DOCTYPE html>
<html>
<head>
	<title>Input Lowongan Pekerjaan</title>
	<link rel="stylesheet" href="css/loker.css">
</head>
<body>
	<div class="hanya">
		<form action="action-input-data.php" method="post" name="form-input-data">
		<table cellpadding="10" cellspacing="0">
			<tr>
				<td> </td>
				<td>ID JOB</td>
				<td> </td>
				<td><input type="text" name="id_job" maxlength="6" placeholder="ID"></td>
				<td> </td>
				<td> Kuota Lowongan Pekerjaan</td>
				<td> </td>
				<td><input type="text" name="qty" placeholder="--Dalam Hari--"></td>			</tr>
			<tr>
				<td> </td>
				<td>ID Perusahaan</td>
				<td> </td>
				<td><input type="text" name="id_pers" maxlength="10" placeholder="ID Perusahaan"></td>
				<td> </td>
				<td>Batas Lowongan</td>
				<td> </td>
				<td><input type="date" name="closing_date" ></td>
			</tr>
			<tr>
				<td> </td>
				<td>Spesifikasi Lowongan</td>
				<td> </td>
			</tr>
			<tr>
				<td> </td>
				<td>Usia</td>
				<td> </td>
				<td><input type="radio" name="usia" value="1" checked>20-30</td>
				<td><input type="radio" name="usia" value="2">30-35</td>
				<td><input type="radio" name="usia" value="3">>35</td>
			</tr>
			<tr>
				<td> </td>
				<td>Pengalaman Di Bidang</td>
				<td> </td>
				<td><select name="pengalaman">
					<option value="-">--Pilih Bidang--</option>
					<option value="website">Website</option>
					<option value="mobile">Mobile</option>
					<option value="jaringan">Network</option>
					<option value="AI">Artificial Intelegent</option>
					<option value="analisi">Analysist</option>
				</select></td>
			</tr>
			<tr>
				<td> </td>
				<td>Jenis Kelamin</td>
				<td> </td>
				<td><input type="radio" name="JK" value="P">Pria</td>
				<td><input type="radio" name="JK" value="L">Wanita</td>
				<td><input type="radio" name="JK" value="PL">Pria dan Wanita</td>
			</tr>
			<tr>
				<td> </td>
				<td>Pendidikan Minimal</td>
				<td> </td>
				<td><input type="radio" name="pendidikan" value="D3">D3</td>
				<td><input type="radio" name="pendidikan" value="S1">S1</td>
				<td><input type="radio" name="pendidikan" value="S2">S2</td>
			</tr>
			<tr>
				<td> </td>
				<td>IPK Min</td>
				<td> </td>
				<td><input type="radio" name="IPK" value="1">2.0-3.0</td>
				<td><input type="radio" name="IPK" value="2">3.0-3.5</td>
				<td><input type="radio" name="IPK" value="3">>3.5</td>
			</tr>
			<tr>
				<td> </td>
				<td>Spesifikasi Lain</td>
				<td> </td>
				<td><input type="text" name="lainnya" max="100" placeholder="lainnya"></td>
			</tr>
			<tr>
				<td> </td>
				<td> </td>
				<td><input type="submit" name="Submit" value="Submit">
				<input type="reset" name="reset" value="reset"></td>
			</tr>
		</table>	
		</form>
	</div>
</body>
</html>