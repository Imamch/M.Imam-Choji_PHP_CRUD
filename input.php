<!DOCTYPE html>
<html>
<head>
<title>Membuat CRUD Dengan PHP Dan MySQL</title> <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">
		<h2>Menampilkan data dari Database</h2>
	</div>
<br/>
	<a href="index.php">Lihat Semua Data</a>
<br/>
	<h3>Input data baru</h3>
	<form action="input-aksi.php" method="post">
<table>
	<tr>
		<td>Kategori</td>

		<td>
			<input type="text" name="kategori">
		</td>
	</tr>
	<tr>
		<td>Nama</td>
		<td><input type="text" nama="nama">
		</td>
	</tr>
	<tr>
		<td>Harga Beli</td>
		<td><input type="text" nama="beli">
	</tr>
	<tr>
		<td>Harga Jual</td>
		<td><input type="text" nama="jual">
		</td>
	</tr>
	<tr>
		<td>Stok</td>
		<td><input type="text" nama="stok">
	</tr>
	<tr>
	<td></td>
	<td><input type="submit" value="Simpan">

	</td>
</tr>
	</table>
	</form>
</body>
</html>