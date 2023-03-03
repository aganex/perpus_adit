<?php
//memanggil file koneksi.php
include '../koneksi.php';

//mengecek apakah tombol 'tambah_rak' pada form sudah di-submit atau belum
if(isset($_POST['submit'])) {

    $nama_peminjam = $_POST['nama_peminjam'];
    $alamat_peminjam = $_POST['alamat_peminjam'];
    $judul_buku = $_POST['judul_buku'];
    $tanggal_pinjam = $_POST['tanggal_pinjam'];

  //query untuk memasukkan data ke tabel rak
  $query = "INSERT INTO peminjaman (nama_peminjam, alamat_peminjam, judul_buku, tanggal_pinjam, status) 
  VALUES ('$nama_peminjam', '$alamat_peminjam', '$judul_buku', '$tanggal_pinjam', $status)";
;

  //mengeksekusi query dan mengecek apakah berhasil atau tidak
  if(mysqli_query($koneksi, $query)) {
  echo "Data rak berhasil ditambahkan";
  // mengarahkan pengguna ke halaman atau link tertentu
  header("Location: index.php");
  exit();
  } else {
    echo "Data rak gagal ditambahkan: " . mysqli_error($koneksi, $query);
  }

  //menutup koneksi database
  mysqli_close($koneksi);
}
?>
