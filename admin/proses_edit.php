<?php
//Include file koneksi ke database
include "../koneksi.php";

//Ambil data yang dikirim dari form
$kode_buku = $_POST['kode_buku'];
$judul_buku = $_POST['judul_buku'];
$pengarang = $_POST['pengarang'];
$kategori = $_POST['kategori'];

//Update data ke database
$query = "UPDATE daftar_buku SET kode_buku='$kode_buku', pengarang='$pengarang', kategori='$kategori' WHERE judul_buku='$judul_buku'";
$result = mysqli_query($koneksi, $query);

//Cek apakah proses update berhasil
if ($result) {
    //Jika berhasil, redirect ke halaman utama
    header("Location: index.php");
} else {
    //Jika gagal, tampilkan pesan error
    echo "Update data gagal";
}
?>
