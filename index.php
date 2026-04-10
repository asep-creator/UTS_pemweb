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

<!-- Navbar -->
<nav class="bg-white shadow">

<div class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">

<!-- Logo -->
<div class="flex items-center space-x-2">

<img src="assets/logo.png" class="w-14 md:w-20 bg-white p-1 rounded">

<h1 class="ml-3 flex font-bold">
<span class="text-black text-xl md:text-3xl self-center">Teras</span>
<span class="text-red-500 text-lg md:text-2xl self-center ml-1">Mobil 99</span>
</h1>

</div>

<!-- Menu Desktop -->
<div class="hidden md:flex space-x-6 text-gray-700 font-medium">

<a href="index.php"
class="text-red-500 border-b-2 border-red-500 pb-1">
Beranda
</a>

<a href="Galeri.html"
class="hover:text-red-500">
Galeri
</a>

<a href="#tentang"
class="hover:text-red-500">
Tentang
</a>

</div>

<!-- Hamburger Button -->
<button id="menu-btn" class="md:hidden text-2xl text-gray-700">
<i class="fa-solid fa-bars"></i>
</button>

</div>

<!-- Mobile Menu -->
<div id="mobile-menu"
class="hidden md:hidden px-6 pb-4 space-y-3 text-gray-700 font-medium">

<a href="index.php" class="block hover:text-red-500">
Beranda
</a>

<a href="formulir.html" class="block hover:text-red-500">
Formulir
</a>

<a href="#tentang" class="block hover:text-red-500">
Tentang
</a>

</div>

</nav>


<!-- Hero Section -->
<section class="relative min-h-[500px] flex items-end md:items-center">

<img src="assets/mobil.jpg"
class="absolute inset-0 w-full h-full object-cover">

<div class="absolute inset-0 bg-black/50"></div>

<div class="relative max-w-6xl px-6 md:pl-16 text-white mb-16 md:mb-0">

<h2 class="text-2xl sm:text-3xl md:text-5xl font-bold leading-tight">
JUAL BELI <br>
<span class="text-red-500">MOBIL BEKAS</span> <br>
TERPERCAYA
</h2>

<p class="mt-4 text-gray-200 max-w-md">
Temukan mobil impian anda dengan harga terbaik.
Proses pembelian mudah dan aman.
</p>

<a href="formulir.html"
class="inline-block mt-6 bg-red-500 hover:bg-red-600 hover:scale-105 px-6 py-3 rounded-full font-semibold transition">
Ajukan Pembelian →
</a>

</div>

</section>


<!-- Keunggulan -->
<section class="py-16 bg-white">

<div class="max-w-6xl mx-auto px-6">

<h3 class="text-2xl md:text-3xl font-bold text-center mb-10">
Kenapa Memilih Teras Mobil 99
</h3>

<div class="grid gap-8 md:grid-cols-3 text-center">

<div class="p-6 bg-red-100 rounded-lg">
<h4 class="font-bold text-lg mb-2">
Mobil Berkualitas
</h4>

<p class="text-grey-600">
Semua mobil telah melalui proses pengecekan kualitas sebelum dijual.
</p>
</div>

<div class="p-6 bg-red-100 rounded-lg">
<h4 class="font-bold text-lg mb-2">
Harga Terbaik
</h4>

<p class="text-gray-600">
Kami memberikan harga yang kompetitif dan transparan.
</p>
</div>

<div class="p-6 bg-red-100 rounded-lg">
<h4 class="font-bold text-lg mb-2">
Proses Mudah
</h4>

<p class="text-gray-600">
Pengajuan pembelian mobil bisa dilakukan secara online.
</p>
</div>

</div>

</div>

</section>


<!-- Tentang -->
<section id="tentang" class="py-16 bg-gray-100">

<div class="max-w-4xl mx-auto text-center px-6">

<h3 class="text-2xl md:text-3xl font-bold mb-6">
Tentang Kami
</h3>

<p class="text-gray-600">
Teras Mobil 99 adalah showroom mobil bekas terpercaya
yang menyediakan berbagai pilihan kendaraan berkualitas.
Kami fokus pada transparansi harga, kondisi mobil yang
terjamin, dan layanan ramah untuk semua pelanggan.
Dengan pengalaman kami, setiap transaksi menjadi
lebih aman dan nyaman.
</p>

</div>

</section>


<!-- Footer -->
<footer class="bg-gray-900 text-gray-300 pt-10 pb-6">

<div class="max-w-6xl mx-auto px-6 grid gap-8 md:grid-cols-3">

<div>
<h2 class="text-xl font-bold text-white mb-3">
Teras Mobil 99
</h2>

<p class="text-sm leading-relaxed">
Teras Mobil 99 adalah platform jual beli mobil terpercaya
yang menyediakan berbagai pilihan mobil berkualitas
dengan harga terbaik serta proses pembelian yang
mudah dan aman.
</p>
</div>

<div>
<h2 class="text-xl font-bold text-white mb-3">
Navigasi
</h2>

<ul class="space-y-2 text-sm">

<li>
<a href="index.php" class="hover:text-white">
Beranda
</a>
</li>

<li>
<a href="formulir.html" class="hover:text-white">
Form Pembelian
</a>
</li>

<li>
<a href="#tentang" class="hover:text-white">
Tentang Kami
</a>
</li>

</ul>

</div>

<div>

<h2 class="text-xl font-bold text-white mb-3">
Kontak Kami
</h2>

<p class="text-sm">
📍 Jl. Raya Mobil No.99, Surabaya
</p>

<p class="text-sm mt-1">
📞 0812-3456-7890
</p>

<p class="text-sm mt-1">
✉ info@terasmobil99.com
</p>

<div class="flex space-x-6 mt-4 text-xl">

<a href="#" class="hover:text-blue-500">
<i class="fab fa-facebook"></i>
</a>

<a href="https://www.instagram.com/terasmobil99?igsh=ZnBmbzVyNGhpMGdi" class="hover:text-pink-500">
<i class="fab fa-instagram"></i>
</a>

<a href="#" class="hover:text-green-500">
<i class="fab fa-whatsapp"></i>
</a>

</div>

</div>

</div>

<div class="border-t border-gray-700 mt-8 pt-4 text-center text-sm">
<p>© 2026 Teras Mobil 99. All Rights Reserved.</p>
</div>

</footer>


<script>

const btn = document.getElementById("menu-btn");
const menu = document.getElementById("mobile-menu");

btn.addEventListener("click", function(){
menu.classList.toggle("hidden");
});

</script>

</body>
</html>
