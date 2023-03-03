<?php
// include file koneksi.php untuk menghubungkan dengan database
include('../koneksi.php');

// cek apakah tombol "Tambah Barang" sudah ditekan
if(isset($_POST['tambah_barang'])) {

    // ambil nilai dari inputan form
    $kode_buku = $_POST['kode_buku'];
    $judul_buku = $_POST['judul_buku'];
    $pengarang = $_POST['pengarang'];
    $kategori = $_POST['kategori'];

    // buat query untuk menambahkan data barang ke dalam tabel barang
    $query = "INSERT INTO daftar_buku (kode_buku, judul_buku, pengarang, kategori) 
              VALUES ('$kode_buku', '$judul_buku', '$pengarang', '$kategori')";

    // jalankan query untuk menambahkan data barang ke dalam tabel barang
    $result = mysqli_query($koneksi, $query);

    if($result) {
        header('Location: index.php?status=success');
        exit;
    } else {
        header('Location: tambah_barang_form.php?status=failed');
        exit;
    }

}

?>
