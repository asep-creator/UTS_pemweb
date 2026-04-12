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

<a href="galeri.php" class="inline-block mb-4 text-blue-500 hover:underline">
← Kembali ke Galeri
</a>

<?php
$nama = pathinfo($m['gambar'], PATHINFO_FILENAME);
$images = [];

for ($i = 0; $i <= 5; $i++) {
    $file = ($i == 0) ? $nama . ".jpg" : $nama . $i . ".jpg";
    $path = "admin/upload/" . $file;

    if (file_exists($path)) {
        $images[] = $path;
    }
}
?>

<!-- SLIDER -->
<div id="carouselExample" class="carousel slide relative" data-bs-interval="false">

  <div class="carousel-inner">
    <?php foreach ($images as $index => $img): ?>
      <div class="carousel-item <?= $index == 0 ? 'active' : '' ?>">
        <img src="<?= $img ?>" 
	class="w-full h-80 object-cover rounded cursor-zoom-in"
	onclick="openZoom(<?= $index ?>)">
      </div>
    <?php endforeach; ?>
  </div>

  <!-- tombol kiri -->
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="absolute top-1/2 -translate-y-1/2 bg-black/50 text-white w-10 h-10 flex items-center justify-center rounded-full text-2xl">
      &#10094;
    </span>
  </button>

  <!-- tombol kanan -->
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="absolute top-1/2 -translate-y-1/2 bg-black/50 text-white w-10 h-10 flex items-center justify-center rounded-full text-2xl">
      &#10095;
    </span>
  </button>

</div>

<!-- THUMBNAIL -->
<div class="flex gap-3 mt-4 justify-center flex-wrap">

<?php foreach ($images as $index => $img): ?>
  <img src="<?= $img ?>"
  class="w-20 h-14 object-cover rounded cursor-pointer border-2 thumbnail <?= $index == 0 ? 'border-red-500' : 'border-transparent' ?> hover:scale-105 transition"
  onclick="goToSlide(<?= $index ?>)">
<?php endforeach; ?>

</div>

<!-- MODAL ZOOM -->
<div id="zoomModal" class="fixed inset-0 bg-black/90 hidden items-center justify-center z-50">

  <!-- tombol close -->
  <span onclick="closeZoom()" 
  class="absolute top-5 right-8 text-white text-3xl cursor-pointer">
  &times;
  </span>

  <!-- SLIDER DALAM MODAL -->
  <div id="zoomCarousel" class="carousel slide w-[90%]" data-bs-interval="false">

    <div class="carousel-inner">

      <?php foreach ($images as $index => $img): ?>
        <div class="carousel-item <?= $index == 0 ? 'active' : '' ?>">
          <img src="<?= $img ?>" class="w-full max-h-[80vh] object-contain mx-auto">
        </div>
      <?php endforeach; ?>

    </div>

    <!-- kiri -->
    <button class="carousel-control-prev" type="button" data-bs-target="#zoomCarousel" data-bs-slide="prev">
      <span class="bg-white/20 text-white w-10 h-10 flex items-center justify-center rounded-full text-2xl">
        &#10094;
      </span>
    </button>

    <!-- kanan -->
    <button class="carousel-control-next" type="button" data-bs-target="#zoomCarousel" data-bs-slide="next">
      <span class="bg-white/20 text-white w-10 h-10 flex items-center justify-center rounded-full text-2xl">
        &#10095;
      </span>
    </button>

  </div>

</div>

<!-- DATA -->
<h2 class="text-2xl font-bold mt-4"><?= $m['nama'] ?></h2>
<p class="mt-2 text-gray-600">Tipe: <?= $m['tipe'] ?></p>
<p class="text-gray-600">Tahun: <?= $m['tahun'] ?></p>

<p class="text-green-600 text-xl font-bold mt-2">
Rp <?= number_format($m['harga'],0,',','.') ?>
</p>

<!-- PESAN -->
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
// klik thumbnail
function goToSlide(index) {
    let carousel = new bootstrap.Carousel(document.getElementById('carouselExample'));
    carousel.to(index);
}

// sync slider ke thumbnail
document.getElementById('carouselExample').addEventListener('slid.bs.carousel', function (event) {

    let index = event.to;

    document.querySelectorAll('.thumbnail').forEach((img, i) => {
        if (i === index) {
            img.classList.add('border-red-500');
            img.classList.remove('border-transparent');
        } else {
            img.classList.remove('border-red-500');
            img.classList.add('border-transparent');
        }
    });

});
</script>
<script>
function openZoom(index) {

    let modal = document.getElementById("zoomModal");
    modal.classList.remove("hidden");
    modal.classList.add("flex");

    let carousel = new bootstrap.Carousel(document.getElementById('zoomCarousel'));
    carousel.to(index);
}

function closeZoom() {
    let modal = document.getElementById("zoomModal");
    modal.classList.add("hidden");
}

// klik luar modal untuk close
document.getElementById("zoomModal").addEventListener("click", function(e) {
    if (e.target.id === "zoomModal") {
        closeZoom();
    }
});
</script>
</body>
</html>
