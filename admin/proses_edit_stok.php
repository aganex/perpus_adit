<?php
//Include file koneksi ke database
include "../koneksi.php";

//Ambil data yang dikirim dari form

$judul_buku = $_POST['judul_buku'];
$nomor_rak = $_POST['nomor_rak'];
$jumlah_buku = $_POST['jumlah_buku'];

//Update data ke database
$query = "UPDATE stok_buku SET nomor_rak='$nomor_rak', jumlah_buku='$jumlah_buku' 2WHERE judul_buku='$judul_buku'";
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
