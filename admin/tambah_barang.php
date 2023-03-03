<!DOCTYPE html>
<html>
<head>
    <title>Form Tambah Barang</title>
    <style>
        /* styling untuk form dan tombol */
        .tambah-barang-form {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin: 0 auto;
            margin-top: 100px;
            width: 400px;
        }
        .tambah-barang-form label {
            display: block;
            margin-bottom: 5px;
        }
        .tambah-barang-form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        .tambah-barang-form button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        .tambah-barang-form button:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>
    <h2>Form Tambah Barang</h2>
    <form class="tambah-barang-form" method="POST" action="proses_tambah.php">
        <label for="kode_buku">Kode Buku</label>
        <input type="number" placeholder="Masukkan Kode Buku" name="kode_buku">

        <label for="judul_buku">Judul Buku</label>
        <input type="text" placeholder="Masukkan Judul Buku" name="judul_buku" required>

        <label for="pengarang">Pengarang</label>
        <input type="text" placeholder="Masukkan Nama Pengarang" name="pengarang" required>

        <label for="kategori">Kategori</label>
        <input type="text" placeholder="Masukkan Kategori Buku" name="kategori" required>

        <button type="submit" name="tambah_barang">Tambah Barang</button>
    </form>
</body>
</html>
