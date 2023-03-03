<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran</title>
    <style>
        /* styling untuk form dan tombol */
        .register-form {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin: 0 auto;
            margin-top: 100px;
            width: 300px;
        }
        .register-form label {
            display: block;
            margin-bottom: 5px;
        }
        .register-form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        .register-form button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        .register-form button:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>
    <h2>Form Pendaftaran</h2>
    <form class="register-form" method="POST" action="proses_register.php">
        <label for="username">Username</label>
        <input type="text" placeholder="Masukkan Username" name="username" required>

        <label for="password">Password</label>
        <input type="password" placeholder="Masukkan Password" name="password" required>

        <button type="submit" name="register">Daftar</button>
    </form>
</body>
</html>
