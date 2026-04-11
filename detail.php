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

<!-- Tailwind -->
<script src="https://cdn.tailwindcss.com"></script>

<!-- Bootstrap (UNTUK SLIDER) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

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

<!-- Tombol Kembali -->
<a href="galeri.php" class="inline-block mb-4 text-blue-500 hover:underline">
← Kembali ke Galeri
</a>

<!-- SLIDER GAMBAR -->
<?php
$nama = pathinfo($m['gambar'], PATHINFO_FILENAME);
?>

<div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">

    <?php
    for ($i = 0; $i <= 5; $i++) {
        $file = ($i == 0) ? $nama . ".jpg" : $nama . $i . ".jpg";
        $path = "admin/upload/" . $file;

        if (file_exists($path)) {
    ?>
        <div class="carousel-item <?php echo ($i == 0) ? 'active' : ''; ?>">
            <img src="<?php echo $path; ?>" class="w-full h-80 object-cover rounded">
        </div>
    <?php
        }
    }
    ?>

  </div>

  <!-- tombol kiri -->
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="text-3xl text-black">‹</span>
  </button>

  <!-- tombol kanan -->
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="text-3xl text-black">›</span>
  </button>
</div>

<!-- DATA MOBIL -->
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
<!-- JS BOOTSTRAP -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
