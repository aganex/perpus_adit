<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Buku</title>
</head>
<body>
	<h1>Edit Data Buku</h1>

	<?php
	//Include file koneksi ke database
	include "../koneksi.php";

	//Ambil kode buku dari URL
	$judul_buku = $_GET['judul_buku'];

	//Query untuk mengambil data buku dari database
	$query = "SELECT * FROM daftar_buku WHERE judul_buku='$judul_buku'";
	$result = mysqli_query($koneksi, $query);

	//Cek apakah data berhasil diambil
	if (mysqli_num_rows($result) > 0) {
		$data = mysqli_fetch_assoc($result);
	} else {
		echo "Data tidak ditemukan";
		exit;
	}
	?>

<form method="POST" action="proses_edit.php">
  <input type="hidden" name="judul_buku" value="<?php echo $data['judul_buku']; ?>">
  <label for="kode_buku">Kode Buku</label>
  <input type="text" name="kode_buku" value="<?php echo $data['kode_buku']; ?>"><br>
  <label for="pengarang">Pengarang</label>
  <input type="text" name="pengarang" value="<?php echo $data['pengarang']; ?>"><br>
  <label for="kategori">Kategori</label>
  <input type="text" name="kategori" value="<?php echo $data['kategori']; ?>"><br>
  <input type="submit" name="submit" value="Simpan">
</form>

</body>
</html>
