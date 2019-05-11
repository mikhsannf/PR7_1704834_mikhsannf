<html>
<head>
	<title>Input Data</title>
</head>
<body>
	<center>
		<h1>Input Data</h1>
		<h3>Tambah data</h3>
	</center>
	<form action="<?php echo 'add'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Nim</td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td><input type="text" name="jenis_kelamin"></td>
			</tr>
			<tr>
				<td>Program Studi</td>
				<td><input type="text" name="program_studi"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>
</body>
</html>
