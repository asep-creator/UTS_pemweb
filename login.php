<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include "koneksi.php";

// 🔥 AMBIL COOKIE UNTUK AUTO ISI USERNAME
$username_cookie = "";

if (isset($_COOKIE['remember']) && $_COOKIE['remember'] == "1") {
    $username_cookie = $_COOKIE['username'];
}

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $data = mysqli_query($conn, "SELECT * FROM users 
        WHERE username='$username' AND password='$password'");

    $user = mysqli_fetch_assoc($data);

    if ($user) {

        $_SESSION['login'] = true;
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role'];

        // 🔥 REMEMBER ME
        if (isset($_POST['remember'])) {
            setcookie("username", $user['username'], time() + (86400 * 7), "/");
            setcookie("role", $user['role'], time() + (86400 * 7), "/");
            setcookie("remember", "1", time() + (86400 * 7), "/");
        } else {
            setcookie("username", "", time() - 3600, "/");
            setcookie("role", "", time() - 3600, "/");
            setcookie("remember", "", time() - 3600, "/");
        }

        // redirect
        if ($user['role'] == 'admin') {
            header("Location: admin/dashboard.php");
        } else {
            header("Location: index.php");
        }
        exit;

    } else {
        echo "<script>alert('Username atau password salah!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Login</title>

<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<body class="bg-gradient-to-br from-red-100 via-white to-red-400 min-h-screen flex items-center justify-center">

<div class="bg-white shadow-xl rounded-2xl p-8 w-96">

<!-- LOGO -->
<div class="text-center mb-6">
<img src="assets/logo.png" class="w-20 mx-auto mb-2">
<h2 class="text-2xl font-bold">Masuk</h2>
<p class="text-gray-500 text-sm">Selamat datang kembali</p>
</div>

<form method="POST">

<!-- 🔥 USERNAME AUTO FILL -->
<input type="text" name="username"
value="<?= $username_cookie ?>"
placeholder="Username"
class="w-full p-3 border rounded-lg mb-3 focus:outline-red-400" required>

<input type="password" name="password"
placeholder="Password"
class="w-full p-3 border rounded-lg mb-2 focus:outline-red-400" required>

<!-- 🔥 REMEMBER ME -->
<div class="flex items-center justify-between mb-4">
    <label class="flex items-center text-sm text-gray-600">
        <input type="checkbox" name="remember" class="mr-2">
        Remember Me
    </label>
</div>

<button name="login"
class="w-full bg-red-500 text-white py-3 rounded-lg font-semibold hover:bg-red-600 transition">
Masuk
</button>

</form>

<!-- REGISTER -->
<p class="text-center text-sm mt-4">
Belum punya akun?
<a href="register.php" class="text-red-500 font-semibold hover:underline">
Daftar
</a>
</p>

<!-- DIVIDER -->
<div class="flex items-center my-5">
<hr class="flex-grow border-gray-300">
<span class="mx-2 text-gray-400 text-sm">atau</span>
<hr class="flex-grow border-gray-300">
</div>

<!-- GOOGLE (UI ONLY) -->
<button class="w-full border border-gray-300 py-3 rounded-lg flex items-center justify-center gap-3 hover:shadow-md transition mb-2 bg-white">

<img src="https://www.svgrepo.com/show/475656/google-color.svg" class="w-5 h-5">

<span class="font-medium text-gray-700">Lanjutkan dengan Google</span>

</button>

<button class="w-full border py-3 rounded-lg flex items-center justify-center gap-3 hover:bg-gray-50 transition">
<i class="fa-solid fa-envelope"></i>
Login dengan Email
</button>

</div>

</body>
</html>