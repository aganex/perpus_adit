<html>
	<head>
		<title> HALO USER</title>
	</head>
	<body>
		<h1>HALO USER</h1>
		<h2>SILAHKAN PILIH DAFTAR BUKU YANG KAMU MAU</h2>
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
                        <a href="pinjam_buku.php?judul_buku=<?php echo $row['judul_buku']?>">Pinjam</a>
                        
                    </td>
                    <?php
                        echo "</tr>";
                    }
                    ?>
                </tr>
            </table>

	</body>
</html>