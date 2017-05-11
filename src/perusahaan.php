<link href="css/Menu/styles/home.css" rel="stylesheet" type="text/css">
	<form action="src/InputPerusahaan.php" method="post" name="InputPerusahaan">
		<table cellpadding="10" cellspacing="0">
			<tr>
				<td> </td>
				<td>ID Perusahaan</td>
				<td> </td>
				<td><input type="text" name="id_persh" maxlength="10" placeholder="ID"></td>
				
			</tr>
			<tr>
				<td> </td>
				<td> Nama Perusahaan</td>
				<td> </td>
				<td><input type="text" name="nama_persh" placeholder="Perusahaan"></td>
			</tr>
			<tr>
				<td> </td>
				<td>Alamat Perusahaan<td>
				<td><textarea name="almt" placeholder="Alamat" cols="30" rows="5" maxlength="150"></textarea></td>
			</tr>
			<tr>
				<td> </td>
				<td>No Telp</td>
				<td> </td>
				<td><input type="text" name="no_tlp" placeholder="6281234xxxxx"></td>
			</tr>
			<tr>
				<td></td>
				<td>Alamat Email</td>
				<td> </td>
				<td><input type="email" name="email" placeholder="example@email.com"></td>
			</tr>
			<tr>
				<td> </td>
				<td><input type="submit" name="Submit" value="Submit">
				<input type="reset" name="reset" value="reset"></td>
			</tr>
		</table>	
	</form>