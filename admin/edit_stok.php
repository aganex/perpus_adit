<!DOCTYPE html>
<html>
<head>
	<title>Edit STOK Buku</title>
</head>
<body>
	<h1>Edit Stok Buku</h1>

	<?php
	//Include file koneksi ke database
	include "../koneksi.php";

	//Ambil kode buku dari URL
	$judul_buku = $_GET['judul_buku'];

	//Query untuk mengambil data buku dari database
	$query = "SELECT * FROM stok_buku WHERE judul_buku='$judul_buku'";
	$result = mysqli_query($koneksi, $query);

	//Cek apakah data berhasil diambil
	if (mysqli_num_rows($result) > 0) {
		$data = mysqli_fetch_assoc($result);
	} else {
		echo "Data tidak ditemukan";
		exit;
	}
	?>

<form method="POST" action="proses_edit_stok.php">
  <input type="hidden" name="judul_buku" value="<?php echo $data['judul_buku']; ?>">
  <label for="nomor_rak">Nomor Rak</label>
  <input type="text" name="nomor_rak" value="<?php echo $data['nomor_rak']; ?>"><br>
  <label for="jumlah_buku">Jumlah Buku</label>
  <input type="text" name="jumlah_buku" value="<?php echo $data['jumlah_buku']; ?>"><br>
  <input type="submit" name="submit" value="Simpan">
</form>

</body>
</html>
