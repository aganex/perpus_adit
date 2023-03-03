<html>
    <head>
        <title>ADMIN</title>
    </head>
    <body>
        <h1>HALO ADMIN</h1>
        <a href="tambah_barang.php">Tambah buku</a>
        <br>
        <table border="1">
            <tr>
                <th>Kode Buku</th>
                <th>Judul Buku</th>
                <th>Pengarang</th>
                <th>Kategori</th>
                <th>Aksi</th>
                
                <?php
                    include '../koneksi.php';
                    $kode_buku = mysqli_query($koneksi, "select * from daftar_buku");
                    foreach ($kode_buku as $row) {
                        echo "<tr>";
                        echo "<td>" . $row['kode_buku'] . "</td>";
                        echo "<td>" . $row['judul_buku'] . "</td>";
                        echo "<td>" . $row['pengarang'] . "</td>";
                        echo "<td>" . $row['kategori'] . "</td>";
                        ?>
                    <td>
                        <a href="edit_buku.php?judul_buku=<?php echo $row['judul_buku']?>">EDIT</a>
                        <a href="proses_hapus.php?judul_buku=<?php echo $row['judul_buku']; ?>" onclick="return confirm('Yakin Mau di hapus Deck??')"> Hapus</a>
                    </td>
                    <?php
                        echo "</tr>";
                    }
                    ?>
                </tr>
            </table>
            <a href="stok_barang.php">Tambah Stok</a>
            <br>
        <table border="1">
            <tr>
                <th>Judul Buku</th>
                <th>Nomor Rak</th>
                <th>Jumlah Buku</th>
                <th>Aksi</th>

                
                <?php
                    include '../koneksi.php';
                    $judul_buku = mysqli_query($koneksi, "select * from stok_buku");
                    foreach ($judul_buku as $row) {
                        echo "<tr>";
                        echo "<td>" . $row['judul_buku'] . "</td>";
                        echo "<td>" . $row['nomor_rak'] . "</td>";
                        echo "<td>" . $row['jumlah_buku'] . "</td>";
                        ?>
                    <td>
                        <a href="edit_stok.php?judul_buku=<?php echo $row['judul_buku']?>">EDIT</a>
                        <a href="proses_hapus_stok.php?judul_buku=<?php echo $row['judul_buku']; ?>" onclick="return confirm('Yakin Mau di hapus Deck??')"> Hapus</a>
                    </td>
                    <?php
                        echo "</tr>";
                    }
                    ?>
                </tr>
            </table>
            <a href="../logout.php">Logout</a>
    </body>
</html>

