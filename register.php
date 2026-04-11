<?php
include "koneksi.php";

if (isset($_POST['register'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    mysqli_query($conn, "INSERT INTO users 
    VALUES ('','$username','$password','user')");

    echo "<script>alert('Registrasi berhasil! Silakan login');window.location='login.php';</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex justify-center items-center h-screen">

<div class="bg-white p-8 rounded-xl shadow w-80">

<h2 class="text-xl font-bold mb-4 text-center">Daftar Akun</h2>

<form method="POST">

<input type="text" name="username"
placeholder="Username"
class="w-full p-2 border rounded mb-3" required>

<input type="password" name="password"
placeholder="Password"
class="w-full p-2 border rounded mb-4" required>

<button name="register"
class="w-full bg-green-500 text-white py-2 rounded hover:bg-green-600">
Daftar
</button>

</form>

<p class="text-center text-sm mt-4">
Sudah punya akun?
<a href="login.php" class="text-red-500 font-semibold">
Login
</a>
</p>

</div>

</body>
</html>