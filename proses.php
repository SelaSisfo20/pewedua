<!DOCTYPE html>
<html>
<head>
	<title>Proses Registrasi</title>
</head>
<body>

<h3>Selamat Anda Terdaftar</h3>
<h3>Dengan Identitas Berikut </h3>

<table>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td>
			<?= $_POST['nama'] ?>
		</td>
	</tr>
	<tr>
		<td>Username</td>
		<td>:</td>
		<td>
			<?= $_POST['username'] ?>
		</td>
	</tr>
	<tr>
		<td>No HP</td>
		<td>:</td>
		<td>
			<?= $_POST['no_hp'] ?>
		</td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td>
			<?= $_POST['alamat'] ?>
		</td>
	</tr>
</table>

</body>
</html>