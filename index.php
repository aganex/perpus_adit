<!DOCTYPE html>
<html>
<head>
    <title>Form Login</title>
    <link rel="stylesheet" href="style.css" class="rel">
</head>
<body>
    <center><h2>SELAMAT DATANG DI PERPUSTAKAAN</h2>
<h3>Silahkan Masukan Akun Anda</h3></center>
    <form class="login-form" method="POST" action="proses_login.php">
        <label for="username">Username</label>
        <input type="text" placeholder="Masukkan Username" name="username" required>
        <br>

        <label for="password">Password</label>
        <input type="password" placeholder="Masukkan Password" name="password" required>
        <br>
        <button type="submit">Login</button>

        <div class="register-link">
            Belum punya akun? <a href="register.php">Daftar</a>
        </div>
    </form>
</body>
</html>
