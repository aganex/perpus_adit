<?php 
    include '../koneksi.php';

    $judul_buku = $_GET['judul_buku'];

    $input = mysqli_query($koneksi, "delete from stok_buku where judul_buku='$judul_buku'");

    if($input){
        ?>
        <script>
            alert("Data Berhasil Dihapus!!");
            window.location = "index.php";
        </script>
        <?php
    }else {
        ?>
        <script>
            alert("Data Gagal Dihapus!!");
            window.location = "index.php";
        </script>
        <?php
    }
?>