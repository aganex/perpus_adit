<!DOCTYPE html>
<html>
<head>
	<title>Form Pinjam Buku</title>
</head>
<body>
	<h1>Form Pinjam Buku</h1>
	<?php
	//Include file koneksi ke database
	include "../koneksi.php";

	$judul_buku = $_GET['judul_buku'];
	$status_peminjam = $_GET['status_peminjam']
	
	
	$query = "SELECT judul_buku FROM daftar_buku where judul_buku='$judul_buku' JOIN peminjaman where status_peminjam='$status_peminjam'";
	$result = mysqli_query($koneksi, $query);

	
	if (mysqli_num_rows($result) > 0) {
		$data = mysqli_fetch_assoc($result);
	} else {
		echo "Data tidak ditemukan";
		exit;
	}
	?>
	<form method="POST" action="proses_peminjaman.php">
		<label>Nama Peminjam</label>
		<input type="text" name="nama_peminjam">
        <br>
		<label>Alamat Peminjam</label>
		<input type="text" name="alamat_peminjam">
        <br>
		<label>Judul Buku</label>
		<input type="text" name="judul_buku" value="<?php echo $data['judul_buku']; ?>" DISABLEd>
        <br>
		<label>Tanggal Pinjam</label>
		<input type="date" name="Tanggal_peminjam">
        <br>
		<label>Status Peminjam</label>
		<input type="text" name="status_peminjam" value="<?php echo $data['status_peminjam']; ?>" DISABLEd>
        <br>
		<button type="submit" name="tambah_stok">Tambah stok</button>
	</form>
</body>
</html>
