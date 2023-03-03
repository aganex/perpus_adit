<!DOCTYPE html>
<html>
<head>
	<title>Form Tambah Rak</title>
</head>
<body>
	<h1>Form Tambah Rak</h1>

	<form method="POST" action="proses_tambah_stok.php">
		<label>Judul Buku</label>
		<select name="judul_buku">
			<?php
			include '../koneksi.php';
			$query = "SELECT judul_buku FROM daftar_buku";
			$result = mysqli_query($koneksi, $query);

			while ($row = mysqli_fetch_array($result)) {
				echo '<option value="'.$row['judul_buku'].'">'.$row['judul_buku'].'</option>';
			}
			?>
		</select>
            <br>
		<label>Nomor Rak</label>
		<input type="text" name="nomor_rak">
            <br>
		<label>Jumlah Buku</label>
		<input type="text" name="jumlah_buku">
            <br>
		<button type="submit" name="tambah_stok">Tambah stok</button>
	</form>
</body>
</html>
