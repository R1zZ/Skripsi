<link href="css/Menu/styles/home.css" rel="stylesheet" type="text/css">
	<form action="src/action-input-data.php" method="post" name="form-input-data">
		<table cellpadding="5" cellspacing="0">
			<tr>
				<td>ID JOB</td>
				<td><input type="text" name="id_job" maxlength="6" placeholder="ID"></td>
				
				<td>Kuota</td>
				<td><input type="text" name="qty" placeholder="--Dalam Hari--"></td>
			</tr>
			<tr>
					<td>ID Perusahaan</td>
					<td><select name="id_persh">
						<option value="-">--pilih Perusahaan--</option>
					<?php
						mysql_connect("127.0.0.1","root","");
						mysql_select_db("Lowongan");
						$sql=mysql_query("SELECT * FROM perusahaan ORDER BY id_persh ASC");
						if (mysql_num_rows($sql) !=0) {
							while ($row=mysql_fetch_assoc($sql)) {
								echo '<option value='.$row['id_persh'].'>'.$row['nama_persh'].'</option>';
							}
						}
					?>					</select>
				<td>Batas Waktu</td>
				<td><input type="date" name="closing_date" placeholder="dd/mm/yyyy"></td>
			</tr>
			<tr>
				<td>Spesifikasi Lowongan</td>
			</tr>
			<tr>
				<td>Nama Jabatan/Pekerjaan</td>
				<td><input type="text" name="jabatan" maxlength="100" placeholder="Jabatan"></td>
			</tr>
			<tr>
				<td>Usia</td>
				<td>
					<input type="radio" name="usia" value="1" checked>20-30
					<input type="radio" name="usia" value="2">30-35
					<input type="radio" name="usia" value="3">>35
				</td>
			</tr>	
			<tr>
				<td>Pengalaman Di Bidang</td>
				<td><select name="pengalaman">
					<option value="-">--Pilih Bidang--</option>
					<option value="website">Website</option>
					<option value="mobile">Mobile</option>
					<option value="jaringan">Network</option>
					<option value="AI">Artificial Intelegent</option>
					<option value="analisi">Analysist</option>
					<option value="SofwareEngineering">Software Engineering</option>
				</select></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>
					<input type="radio" name="JK" value="P">Pria
					<input type="radio" name="JK" value="L">Wanita
					<input type="radio" name="JK" value="PL">Pria & Wanita
				</td>
			</tr>
			<tr>
				<td>Pendidikan Minimal</td>
				<td>
					<input type="radio" name="pendidikan" value="D3">D3
					<input type="radio" name="pendidikan" value="S1">S1
					<input type="radio" name="pendidikan" value="S2">S2
				</td>
			</tr>
			<tr>
				<td>IPK Min</td>
				<td>
					<input type="radio" name="IPK" value="1">2.0-3.0
					<input type="radio" name="IPK" value="2">3.0-3.5
					<input type="radio" name="IPK" value="3">>3.5
				</td>
			</tr>
			<tr>
				<td>Spesifikasi Lain</td>
				<td><textarea name="lainnya" placeholder="max character 250" cols="30" rows="5" maxlength="250"></textarea></td>
			</tr>
			<tr>
				<td> </td>
				<td><input type="submit" name="Submit" value="Submit">
				<input type="reset" name="reset" value="reset"></td>
			</tr>
		</table>	
	</form>