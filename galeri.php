<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Galeri Mobil</title>

<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body class="bg-gray-100">

<!-- NAVBAR -->
<nav class="bg-white shadow border-b">
  <div class="max-w-6xl mx-auto flex justify-between items-center py-2 px-5">

    <!-- LOGO -->
    <div class="flex items-center">
      <img src="assets/logo.png" alt="logo" class="h-20">
      <h1 class="ml-3 flex font-bold">
        <span class="text-black text-3xl self-center">Teras</span>
        <span class="text-red-500 text-2xl self-center ml-1">Mobil 99</span>
      </h1>
    </div>

    <!-- MENU DESKTOP -->
    <div class="hidden md:flex space-x-6 items-center font-medium">

      <a href="index.php"
      class="<?= basename($_SERVER['PHP_SELF'])=='index.php' ? 'text-red-500 border-b-2 border-red-500 pb-1' : 'text-gray-700 hover:text-red-500' ?>">
      Beranda
      </a>

      <a href="galeri.php"
      class="<?= basename($_SERVER['PHP_SELF'])=='galeri.php' ? 'text-red-500 border-b-2 border-red-500 pb-1' : 'text-gray-700 hover:text-red-500' ?>">
      Galeri
      </a>

      <a href="tentang.php"
      class="<?= basename($_SERVER['PHP_SELF'])=='tentang.php' ? 'text-red-500 border-b-2 border-red-500 pb-1' : 'text-gray-700 hover:text-red-500' ?>">
      Tentang
      </a>

      <?php if (isset($_SESSION['role']) && $_SESSION['role']=='admin'): ?>
      <a href="admin/dashboard.php"
      class="<?= strpos($_SERVER['PHP_SELF'], 'dashboard.php') !== false ? 'text-red-500 border-b-2 border-red-500 pb-1' : 'text-gray-700 hover:text-red-500' ?>">
      Dashboard
      </a>
      <?php endif; ?>

      <?php if (!isset($_SESSION['login'])): ?>
      <a href="login.php" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
        Masuk
      </a>
      <?php else: ?>
      <span class="text-gray-700"><?= $_SESSION['username'] ?></span>
      <a href="logout.php" class="text-red-500 hover:text-red-700">Logout</a>
      <?php endif; ?>

    </div>

    <!-- HAMBURGER -->
    <button id="menu-btn" class="md:hidden text-2xl text-gray-700">
      <i class="fa-solid fa-bars"></i>
    </button>
  </div>

  <!-- MOBILE MENU -->
  <div id="mobile-menu" class="hidden md:hidden px-6 pb-4 space-y-3 text-gray-700 font-medium">
    <a href="index.php"
    class="<?= basename($_SERVER['PHP_SELF'])=='index.php' ? 'text-red-500 border-b-2 border-red-500 pb-1 block' : 'hover:text-red-500 block' ?>">
    Beranda
    </a>

    <a href="galeri.php"
    class="<?= basename($_SERVER['PHP_SELF'])=='galeri.php' ? 'text-red-500 border-b-2 border-red-500 pb-1 block' : 'hover:text-red-500 block' ?>">
    Galeri
    </a>

    <a href="tentang.php"
    class="<?= basename($_SERVER['PHP_SELF'])=='tentang.php' ? 'text-red-500 border-b-2 border-red-500 pb-1 block' : 'hover:text-red-500 block' ?>">
    Tentang
    </a>

    <?php if (isset($_SESSION['role']) && $_SESSION['role']=='admin'): ?>
    <a href="admin/dashboard.php" class="block hover:text-red-500">Dashboard</a>
    <?php endif; ?>

    <?php if (!isset($_SESSION['login'])): ?>
    <a href="login.php" class="block hover:text-red-500">Masuk</a>
    <?php else: ?>
    <a href="logout.php" class="block text-red-500">Logout</a>
    <?php endif; ?>
  </div>
</nav>

</nav>
<!-- FILTER -->
<div class="max-w-6xl mx-auto px-4 mt-6 flex gap-4 items-center">

<input type="text" id="search" placeholder="Cari mobil..."
class="p-2 border rounded w-1/3">

<select id="tahun" onchange="loadData()" class="p-2 border rounded">
<option value="">Tahun</option>
<option value="2021">2021</option>
<option value="2020">2020</option>
<option value="2019">2019</option>
<option value="2019">2018</option>
<option value="2019">2017</option>
<option value="2019">2016</option>
</select>

<select id="harga" onchange="loadData()" class="p-2 border rounded">
<option value="">Harga</option>
<option value="100000000">< 100jt</option>
<option value="200000000">< 200jt</option>
<option value="300000000">< 300jt</option>
</select>

<?php if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin'): ?>
<a href="admin/tambah.php"
class="ml-auto bg-green-500 text-white px-4 py-2 rounded">
+ BARU
</a>
<?php endif; ?>

</div>
<!-- HASIL -->
<div id="hasil" class="max-w-6xl mx-auto px-4 py-6 grid md:grid-cols-3 gap-6"></div>

<script>
function loadData(){
let s = document.getElementById("search").value;
let t = document.getElementById("tahun").value;
let h = document.getElementById("harga").value;

fetch(`search.php?search=${s}&tahun=${t}&harga=${h}`)
.then(res=>res.text())
.then(data=>{
document.getElementById("hasil").innerHTML = data;
});
}

document.getElementById("search").addEventListener("keyup", loadData);
window.onload = loadData;
</script>

<!-- FOOTER -->
  <footer class="bg-gray-900 text-gray-300 pt-10 pb-6">

  <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-3 gap-8">

  <!-- Tentang -->
  <div>
  <h2 class="text-xl font-bold text-white mb-3">Teras Mobil 99</h2>
  <p class="text-sm leading-relaxed">
  Teras Mobil 99 adalah platform jual beli mobil terpercaya yang
  menyediakan berbagai pilihan mobil berkualitas dengan harga terbaik
  serta proses pembelian yang mudah dan aman.
  </p>
  </div>

  <!-- Navigasi -->
  <div>
  <h2 class="text-xl font-bold text-white mb-3">Navigasi</h2>
  <ul class="space-y-2 text-sm">
  <li><a href="index.php" class="hover:text-white">Beranda</a></li>
  <li><a href="galeri.php" class="hover:text-white">Galeri</a></li>
  <li><a href="tentang.php" class="hover:text-white">Tentang Kami</a></li>
  </ul>
  </div>

  <!-- Kontak -->
  <div>
  <h2 class="text-xl font-bold text-white mb-3">Kontak Kami</h2>
  <p class="text-sm">📍 Jl. Raya Mobil No.99, Surabaya</p>
  <p class="text-sm mt-1">📞 0812-3456-7890</p>
  <p class="text-sm mt-1">✉ info@terasmobil99.com</p>
  </div>

  </div>

  <div class="border-t border-gray-700 mt-8 pt-4 text-center text-sm">
  <p>© 2026 Teras Mobil 99. All Rights Reserved.</p>
  </div>

  </footer>

</body>
</html>
