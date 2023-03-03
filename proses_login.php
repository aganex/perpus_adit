<?php
session_start(); // memulai sesi
include "koneksi.php"; // mengimport file koneksi.php

// mengambil data yang di-submit dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// query untuk mencari pengguna dengan username dan password yang cocok
$sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($koneksi, $sql);

// jika data pengguna ditemukan
if (mysqli_num_rows($result) == 1) {
    // mengambil data pengguna
    $row = mysqli_fetch_assoc($result);
    // menyimpan data pengguna ke sesi
    $_SESSION['username'] = $row['username'];
    $_SESSION['status'] = $row['status'];
    // mengarahkan pengguna ke halaman yang sesuai dengan statusnya
    if ($row['status'] == 'admin') {
        header("Location: admin/index.php");
    } else {
        header("Location: user/index.php");
    }
} else {
    // jika data pengguna tidak ditemukan, mengembalikan pengguna ke halaman login dengan pesan error
    $_SESSION['login_error'] = "Username atau password salah";
    header("Location: index.php");
}

// menutup koneksi
mysqli_close($koneksi);
?>
