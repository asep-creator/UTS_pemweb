<?php
include "koneksi.php";

$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM mobil WHERE id=$id");
$m = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Detail Mobil</title>

<script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-gray-100">

<!-- NAVBAR -->
<nav class="bg-white shadow">
<div class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">

<div class="flex items-center space-x-2">
<img src="assets/logo.png" class="w-14 md:w-20">
<h1 class="ml-3 flex font-bold">
<span class="text-black text-xl md:text-3xl">Teras</span>
<span class="text-red-500 text-lg md:text-2xl ml-1">Mobil 99</span>
</h1>
</div>

<div class="hidden md:flex space-x-6 items-center">
<a href="index.php">Beranda</a>
<a href="galeri.php" class="text-red-500 border-b-2 border-red-500 pb-1">Galeri</a>
<a href="tentang.php">Tentang</a>

<?php if (!isset($_SESSION['login'])): ?>
<a href="login.php" class="bg-blue-500 text-white px-4 py-2 rounded">Masuk</a>
<?php else: ?>
<span><?= $_SESSION['username'] ?></span>
<a href="logout.php" class="text-red-500">Logout</a>
<?php endif; ?>
</div>

</div>
</nav>

<!-- DETAIL -->
<div class="max-w-4xl mx-auto mt-10 bg-white p-6 rounded shadow">

<!-- 🔙 Tombol Kembali -->
<a href="galeri.php" 
class="inline-block mb-4 text-blue-500 hover:underline">
← Kembali ke Galeri
</a>

<img src="admin/upload/<?= $m['gambar'] ?>" 
class="w-full h-80 object-cover rounded">

<h2 class="text-2xl font-bold mt-4"><?= $m['nama'] ?></h2>

<p class="mt-2 text-gray-600">Tipe: <?= $m['tipe'] ?></p>
<p class="text-gray-600">Tahun: <?= $m['tahun'] ?></p>

<p class="text-green-600 text-xl font-bold mt-2">
Rp <?= number_format($m['harga'],0,',','.') ?>
</p>

<!-- TOMBOL PESAN -->
<?php if (!isset($_SESSION['login'])): ?>
<a href="login.php"
class="inline-block mt-4 bg-red-500 text-white px-5 py-2 rounded hover:bg-red-600">
Pesan Sekarang
</a>
<?php else: ?>
<a href="formulir.php?id=<?= $m['id'] ?>"
class="inline-block mt-4 bg-green-500 text-white px-5 py-2 rounded hover:bg-green-600">
Pesan Sekarang
</a>
<?php endif; ?>

</div>

<!-- FOOTER -->
<footer class="bg-gray-900 text-gray-300 pt-10 pb-6 mt-10">
<div class="max-w-6xl mx-auto px-6 grid md:grid-cols-3 gap-8">

<div>
<h2 class="text-white font-bold">Teras Mobil 99</h2>
<p>Platform jual beli mobil terpercaya</p>
</div>

<div>
<h2 class="text-white font-bold">Menu</h2>
<a href="index.php">Beranda</a><br>
<a href="galeri.php">Galeri</a>
</div>

<div>
<h2 class="text-white font-bold">Kontak</h2>
<p>08123456789</p>
</div>

</div>
</footer>

</body>
</html>