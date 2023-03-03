<?php
include 'koneksi.php';

if(isset($_POST['register'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $status = 'user';

    $query = "INSERT INTO user (username, password, status) VALUES ('$username', '$password', '$status')";
    $result = mysqli_query($koneksi, $query);

    if($result){
        echo "Pendaftaran berhasil. Silakan <a href='index.php'>login</a>.";
    }
    else {
        echo "Pendaftaran gagal. Silakan coba lagi.";
    }
}
?>
