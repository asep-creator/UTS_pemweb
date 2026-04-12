<?php
include "../koneksi.php";

if (!isset($_SESSION['login']) || $_SESSION['role'] != 'admin') {
    header("Location: ../login.php");
    exit;
}

$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM pesanan WHERE id=$id");
$p = mysqli_fetch_assoc($data);

//  TEMPLATE PESAN (TANPA %0A MANUAL)
$pesan = "Halo " . $p['nama'] . " 

Terima kasih sudah melakukan pemesanan di Teras Mobil 99 

Detail Pesanan Anda:
• Mobil: " . $p['mobil'] . "
• Tahun: " . $p['tahun'] . "
• Pembelian: " . $p['pembelian'] . "
• Harga: Rp " . number_format($p['total_harga'],0,',','.') . "

";

//  KHUSUS KREDIT
if ($p['pembelian'] == 'Kredit') {
    $pesan .= "Untuk proses kredit, mohon siapkan dokumen berikut:
- Fotokopi KTP
- Fotokopi KK

";
}

$pesan .= "Admin akan segera menghubungi Anda...

Terima kasih ";
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Detail Pemesan</title>

<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<body class="bg-gray-100">

<!-- NAVBAR -->
<nav class="bg-white shadow p-4 flex justify-between items-center">
<h2 class="font-bold text-xl">Detail Pemesan</h2>
<a href="dashboard.php" class="text-red-500 hover:underline">← Kembali</a>
</nav>

<div class="max-w-xl mx-auto mt-10 bg-white p-6 rounded-xl shadow">

<h3 class="text-lg font-bold mb-4">Data Pemesan</h3>

<div class="space-y-3 text-sm">

<p><b>Nama:</b> <?= $p['nama'] ?></p>

<!-- WA + BUTTON -->
<div class="flex items-center justify-between">

<p><b>No WhatsApp:</b> <?= $p['nohp'] ?></p>

<a href="https://wa.me/<?= $p['nohp'] ?>?text=<?= urlencode($pesan) ?>"
target="_blank"
class="bg-green-500 text-white px-3 py-1 rounded flex items-center gap-2 hover:bg-green-600 text-sm transition">

<i class="fa-brands fa-whatsapp"></i>
Chat

</a>

</div>

<p><b>Alamat:</b> <?= $p['alamat'] ?></p>

<hr>

<p><b>Mobil:</b> <?= $p['mobil'] ?></p>
<p><b>Tipe:</b> <?= $p['tipe'] ?></p>
<p><b>Tahun:</b> <?= $p['tahun'] ?></p>

<p><b>Pembelian:</b> <?= $p['pembelian'] ?></p>

<p><b>Harga:</b> 
Rp <?= number_format($p['total_harga'],0,',','.') ?>
</p>

<p><b>Status:</b> 
<?php if ($p['status']=='Pending'): ?>
<span class="text-yellow-500 font-semibold">Pending</span>
<?php else: ?>
<span class="text-green-600 font-semibold">Selesai</span>
<?php endif; ?>
</p>

</div>

</div>

</body>
</html>