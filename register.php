<?php
include "koneksi.php";

if (isset($_POST['register'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm  = $_POST['confirm'];

    // validasi password
    if ($password != $confirm) {
        echo "<script>alert('Password tidak sama!');</script>";
    } else {

        mysqli_query($conn, "INSERT INTO users 
        VALUES ('','$username','$password','user')");

        echo "<script>alert('Registrasi berhasil! Silakan login');window.location='login.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Register</title>

<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<body class="bg-gradient-to-br from-red-100 via-white to-red-400 min-h-screen flex items-center justify-center">

<div class="bg-white shadow-xl rounded-2xl p-8 w-96">

<!-- LOGO -->
<div class="text-center mb-6">
<img src="assets/logo.png" class="w-20 mx-auto mb-2">
<h2 class="text-2xl font-bold">Daftar Akun</h2>
<p class="text-gray-500 text-sm">Buat akun baru</p>
</div>

<form method="POST">

<input type="text" name="username"
placeholder="Username"
class="w-full p-3 border rounded-lg mb-3 focus:outline-red-400" required>

<input type="password" name="password"
placeholder="Password"
class="w-full p-3 border rounded-lg mb-3 focus:outline-red-400" required>

<input type="password" name="confirm"
placeholder="Konfirmasi Password"
class="w-full p-3 border rounded-lg mb-4 focus:outline-red-400" required>

<button name="register"
class="w-full bg-green-500 text-white py-3 rounded-lg font-semibold hover:bg-green-600 transition">
Daftar
</button>

</form>

<!-- LOGIN LINK -->
<p class="text-center text-sm mt-4">
Sudah punya akun?
<a href="login.php" class="text-red-500 font-semibold hover:underline">
Login
</a>
</p>

<!-- DIVIDER -->
<div class="flex items-center my-5">
<hr class="flex-grow border-gray-300">
<span class="mx-2 text-gray-400 text-sm">atau</span>
<hr class="flex-grow border-gray-300">
</div>

<!-- GOOGLE LOGIN (UI) -->
<button class="w-full border py-3 rounded-lg flex items-center justify-center gap-3 hover:bg-gray-50 transition mb-2">

<img src="https://www.svgrepo.com/show/475656/google-color.svg" class="w-5 h-5">

<span class="font-medium">Daftar dengan Google</span>

</button>

<button class="w-full border py-3 rounded-lg flex items-center justify-center gap-3 hover:bg-gray-50 transition">

<i class="fa-solid fa-envelope"></i>
<span class="font-medium">Daftar dengan Email</span>

</button>

</div>

</body>
</html>
