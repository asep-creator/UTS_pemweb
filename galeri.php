<?php include "koneksi.php"; ?>
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

<!-- FILTER -->
<div class="max-w-6xl mx-auto px-4 mt-6 flex gap-4">

<input type="text" id="search" placeholder="Cari mobil..."
class="p-2 border rounded w-1/3">

<select id="tahun" onchange="loadData()" class="p-2 border rounded">
<option value="">Tahun</option>
<option value="2021">2022</option>
<option value="2021">2021</option>
<option value="2020">2020</option>
<option value="2019">2019</option>
<option value="2021">2018</option>
<option value="2021">2017</option>
<option value="2021">2016</option>
</select>

<select id="harga" onchange="loadData()" class="p-2 border rounded">
<option value="">Harga</option>
<option value="100000000">< 100jt</option>
<option value="200000000">< 200jt</option>
<option value="300000000">< 300jt</option>
</select>

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
