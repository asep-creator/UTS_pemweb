<?php
include "../koneksi.php";

if (!isset($_SESSION['login']) || $_SESSION['role'] != 'admin') {
    header("Location: ../login.php");
    exit;
}

// statistik
$total_mobil = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM mobil"));
$total_transaksi = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM pesanan"));

$total_penjualan = mysqli_query($conn, "SELECT SUM(total_harga) as total FROM pesanan");
$tp = mysqli_fetch_assoc($total_penjualan);
$total_uang = $tp['total'] ?? 0;
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Dashboard Admin</title>

<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<body class="bg-gray-100">

<!-- NAVBAR -->
<nav class="bg-white shadow">
<div class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">

<div class="flex items-center">
<img src="../assets/logo.png" class="w-14 md:w-20">
<h1 class="ml-3 font-bold">
<span class="text-black text-xl md:text-3xl">Teras</span>
<span class="text-red-500 text-lg md:text-2xl ml-1">Mobil 99</span>
</h1>
</div>

<div class="flex items-center space-x-6">
<a href="../index.php">Beranda</a>
<a href="../galeri.php">Galeri</a>
<a href="#" class="text-red-500 border-b-2 border-red-500 pb-1">Dashboard</a>
<span><?= $_SESSION['username'] ?></span>
<a href="../logout.php" class="text-red-500">Logout</a>
</div>

</div>
</nav>

<!-- CONTENT -->
<div class="max-w-6xl mx-auto px-4 mt-8">

<h2 class="text-2xl font-bold mb-6">Dashboard Admin</h2>

<!-- STATISTIK -->
<div class="grid md:grid-cols-3 gap-6">

<div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
<p class="text-gray-500">Jumlah Mobil</p>
<p class="text-3xl font-bold mt-2"><?= $total_mobil ?></p>
</div>

<div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
<p class="text-gray-500">Total Transaksi</p>
<p class="text-3xl font-bold mt-2"><?= $total_transaksi ?></p>
</div>

<div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
<p class="text-gray-500">Total Penjualan</p>
<p class="text-3xl font-bold mt-2 text-green-600">
Rp <?= number_format($total_uang,0,',','.') ?>
</p>
</div>

</div>

<!-- TABEL PESANAN -->
<div class="mt-10 bg-white p-6 rounded-xl shadow">

<h3 class="font-bold text-lg mb-4">Data Pesanan</h3>

<div class="overflow-x-auto">

<table class="w-full text-sm text-left border">

<thead class="bg-gray-100">
<tr>
<th class="p-3">Nama</th>
<th>Mobil</th>
<th>Tahun</th>
<th>Pembelian</th>
<th>Status</th>
<th>Aksi</th>
</tr>
</thead>

<tbody>

<?php
$data = mysqli_query($conn, "SELECT * FROM pesanan ORDER BY id DESC");

while ($p = mysqli_fetch_assoc($data)) {
?>

<tr class="border-t hover:bg-gray-50">

<td class="p-3"><?= $p['nama'] ?></td>
<td><?= $p['mobil'] ?></td>
<td><?= $p['tahun'] ?></td>
<td><?= $p['pembelian'] ?></td>

<td>
<?php if ($p['status']=='Pending'): ?>
<span class="bg-yellow-100 text-yellow-700 px-2 py-1 rounded text-xs">
Pending
</span>
<?php else: ?>
<span class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs">
Selesai
</span>
<?php endif; ?>
</td>

<td>
<?php if ($p['status']=='Pending'): ?>
<a href="update_status.php?id=<?= $p['id'] ?>"
class="bg-green-500 text-white px-3 py-1 rounded text-xs hover:bg-green-600">
Selesai
</a>
<?php else: ?>
<span class="text-gray-400 text-xs">✔</span>
<?php endif; ?>
</td>

</tr>

<?php } ?>

</tbody>

</table>

</div>

</div>

</div>

</body>
</html>