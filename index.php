<?php 
include "koneksi.php"; 
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Teras Mobil 99</title>

<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<body class="bg-gray-100">

<!-- NAVBAR -->
<nav class="bg-white shadow">
<div class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">

<div class="flex items-center space-x-2">
<img src="assets/logo.png" class="w-14 md:w-20 bg-white p-1 rounded">
<h1 class="ml-3 flex font-bold">
<span class="text-black text-xl md:text-3xl">Teras</span>
<span class="text-red-500 text-lg md:text-2xl ml-1">Mobil 99</span>
</h1>
</div>

<div class="hidden md:flex space-x-6 items-center">

<a href="index.php"
class="text-red-500 border-b-2 border-red-500 pb-1">
Beranda
</a>

<a href="galeri.php" class="hover:text-red-500">Galeri</a>
<a href="tentang.php" class="hover:text-red-500">Tentang</a>

<?php if (!isset($_SESSION['login'])): ?>
<a href="login.php" class="bg-blue-500 text-white px-4 py-2 rounded">
Masuk
</a>
<?php else: ?>
<span><?= $_SESSION['username'] ?></span>
<a href="logout.php" class="text-red-500">Logout</a>
<?php endif; ?>

</div>

</div>
</nav>

<!-- HERO -->
<section class="relative min-h-[500px] flex items-end md:items-center">

<img src="assets/mobil1.jpg"
class="absolute inset-0 w-full h-full object-cover">

<div class="absolute inset-0 bg-black/50"></div>

<div class="relative max-w-6xl px-6 md:pl-16 text-white mb-16 md:mb-0">

<h2 class="text-2xl md:text-5xl font-bold">
JUAL BELI <br>
<span class="text-red-500">MOBIL BEKAS</span> <br>
TERPERCAYA
</h2>

<p class="mt-4 max-w-md">
Temukan mobil impian anda dengan harga terbaik.
</p>

<a href="galeri.php"
class="inline-block mt-6 bg-red-500 px-6 py-3 rounded-full">
Lihat Mobil →
</a>

</div>
</section>

<!-- KEUNGGULAN -->
<section class="py-16 bg-white">
<div class="max-w-6xl mx-auto px-6 text-center">

<h3 class="text-3xl font-bold mb-10">
Kenapa Memilih Teras Mobil 99?
</h3>

<div class="grid md:grid-cols-3 gap-8">

<div class="p-6 bg-red-100 rounded-lg">
<h4 class="font-bold">Mobil Berkualitas</h4>
<p>Dijamin berkualitas! Semua mobil telah dicek secara detail untuk memastikan performa dan kenyamanan.</p>
</div>

<div class="p-6 bg-red-100 rounded-lg">
<h4 class="font-bold">Harga Terbaik</h4>
<p>Harga bersaing dengan transparansi penuh, tanpa biaya tersembunyi.</p>
</div>

<div class="p-6 bg-red-100 rounded-lg">
<h4 class="font-bold">Proses Mudah</h4>
<p>Beli mobil jadi lebih mudah! Proses cepat, praktis, dan bisa dilakukan dari mana saja.</p>
</div>

</div>

</div>
</section>

<!-- TENTANG -->
<section id="tentang" class="py-16 bg-gray-100 text-center">
<h3 class="text-3xl font-bold mb-6">Tentang Kami</h3>
<p class="max-w-2xl mx-auto">
Teras Mobil 99 adalah showroom mobil terpercaya.
</p>
</section>

<!-- FOOTER -->
<footer class="bg-gray-900 text-gray-300 pt-10 pb-6">
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
