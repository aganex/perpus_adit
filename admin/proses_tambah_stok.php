<?php
// memanggil file koneksi.php
include '../koneksi.php';

// mengecek apakah tombol 'tambah_stok' pada form sudah di-submit atau belum
if(isset($_POST['tambah_stok'])) {
  
  // mengambil data dari form
  $judul_buku = $_POST['judul_buku'];
  $nomor_rak = $_POST['nomor_rak'];
  $jumlah_buku = $_POST['jumlah_buku'];

  // query untuk memeriksa apakah data buku sudah ada di tabel stok_buku
  $cek_query = "SELECT * FROM stok_buku WHERE judul_buku='$judul_buku'";
  $cek_result = mysqli_query($koneksi, $cek_query);

  if(mysqli_num_rows($cek_result) > 0) {
    // jika data buku sudah ada, keluarkan notifikasi
    echo "<script>alert('Stok barang dengan judul buku $judul_buku sudah ada');</script>";
    echo "<script>window.location.replace('stok_barang.php');</script>";
  } else {
    // query untuk memasukkan data ke dalam tabel stok_buku
    $query = "INSERT INTO stok_buku (judul_buku, nomor_rak, jumlah_buku) VALUES ('$judul_buku', '$nomor_rak', '$jumlah_buku')";

    // mengeksekusi query dan mengecek apakah berhasil atau tidak
    if(mysqli_query($koneksi, $query)) {
      echo "Data rak berhasil ditambahkan";
      // mengarahkan pengguna ke halaman atau link tertentu
      header("Location: index.php");
      exit();
    } else {
      echo "Data rak gagal ditambahkan: " . mysqli_error($koneksi, $query);
    }
  }

  // menutup koneksi database
  mysqli_close($koneksi);
}

?>
