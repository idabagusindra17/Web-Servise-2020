<html>
<head>
<title>KELUHAN Pelanggan TRAVEL & TOUR</title>
</head>
<body>
	<?php
		if (isset ($_POST['nik'])) {
			$url = 'https://helloidabagus.000webhostapp.com/jsonmhs.php';
			//$data = "[{\"nim\":\".$_POST['nim'].\",\"nama\":\".$_POST['nama'].\",\"prodi\":\".$_POST['progdi'].\"}]";//
			$data="{\"nik\":\"".$_POST['nik']."\",\"nama\":\"".$_POST['nama']."\",\"alamat\":\"".$_POST['alamat']."\",\"keluhan\":\"".$_POST['keluhan']."\"}";
			echo "datanya ".$data;
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
			$response = curl_exec($ch);
			echo "response ".$response;
			curl_close($ch);
		}
	?>
	<form method="POST" action="tambahjson.php">
		<table>
			<tr>
				<td>NIK</td>
				<td><input type="text" name="nik" id="nik"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" id="nama"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" id="alamat"></td>
			</tr>
			<tr>
				<td>Keluhan Pelanggan</td>
				<td><input type="text" name="keluhan" id="keluhan"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" id="submit" value="Tambah"></td>
				<td></td>
			</tr>
		</table>
	</form>
	<a href="https://helloidabagus.000webhostapp.com/pkl.php"> Untuk melihat keluhan pelanggan lain </a>
</body>
</html>