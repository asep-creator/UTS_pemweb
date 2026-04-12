<?php include "koneksi.php"; ?>

<?php
// ambil id mobil dari detail
$id = $_GET['id'] ?? '';
$mobil = null;

if ($id) {
    $q = mysqli_query($conn, "SELECT * FROM mobil WHERE id=$id");
    $mobil = mysqli_fetch_assoc($q);
}

// simpan data
if (isset($_POST['submit'])) {

    $nama = $_POST['nama'];
    $nohp = "+62" . $_POST['nohp'];
    $alamat = $_POST['alamat'];
    $mobil_nama = $_POST['mobil'];
    $tipe = $_POST['tipe'];
    $tahun = $_POST['tahun'];
    $pembelian = $_POST['pembelian'];
    $harga = $_POST['harga'];

    mysqli_query($conn, "INSERT INTO pesanan 
(nama, nohp, alamat, mobil, tipe, tahun, pembelian, total_harga, status)
VALUES
('$nama','$nohp','$alamat','$mobil_nama','$tipe','$tahun','$pembelian','$harga','Pending')");

    echo "<script>alert('Pesanan berhasil dikirim');window.location='index.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Formulir Pembelian</title>
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body class="bg-gradient-to-br from-red-100 via-white to-red-400 min-h-screen">

<!-- NAVBAR (SAMA PERSIS DENGAN YANG LAIN) -->
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
<a href="galeri.php">Galeri</a>
<a href="#" class="text-red-500 border-b-2 border-red-500 pb-1">Formulir</a>

<?php if (isset($_SESSION['role']) && $_SESSION['role']=='admin'): ?>
<a href="admin/dashboard.php">Dashboard</a>
<?php endif; ?>

<?php if (!isset($_SESSION['login'])): ?>
<a href="login.php" class="bg-blue-500 text-white px-4 py-2 rounded">Masuk</a>
<?php else: ?>
<span><?= $_SESSION['username'] ?></span>
<a href="logout.php" class="text-red-500">Logout</a>
<?php endif; ?>

</div>

</div>
</nav>

<!-- JUDUL -->
<div class="text-center mt-10">
<span class="block text-lg font-medium text-red-500">Formulir</span>
<span class="block text-3xl font-bold text-gray-800">Pembelian Mobil</span>
</div>

<!-- FORM -->
<div class="max-w-xl mx-auto mt-6 bg-white p-6 rounded-xl shadow-lg">

<form method="POST">

<label class="font-semibold">Nama Lengkap</label>
<input type="text" name="nama" class="w-full border p-2 rounded mb-4" required>

<label class="font-semibold">No WhatsApp</label>

<div class="flex mb-4">
    <span class="bg-gray-200 px-3 flex items-center rounded-l">
        +62
    </span>
    <input type="text" name="nohp"
    placeholder="8123456789"
    class="w-full border p-2 rounded-r focus:outline-red-400"
    required>
</div>

<label class="font-semibold">Alamat</label>
<textarea name="alamat" class="w-full border p-2 rounded mb-4" required></textarea>

<!-- DATA MOBIL AUTO -->
<?php if ($mobil): ?>
<label class="font-semibold">Mobil</label>
<input type="text" name="mobil" value="<?= $mobil['nama'] ?>" class="w-full border p-2 mb-3" readonly>

<label class="font-semibold">Tipe</label>
<input type="text" name="tipe" value="<?= $mobil['tipe'] ?>" class="w-full border p-2 mb-3" readonly>

<label class="font-semibold">Tahun</label>
<input type="text" name="tahun" value="<?= $mobil['tahun'] ?>" class="w-full border p-2 mb-3" readonly>

<input type="hidden" name="harga" value="<?= $mobil['harga'] ?>">
<?php endif; ?>

<p class="font-semibold mt-4">Jenis Pembelian</p>
<label class="mr-4">
<input type="radio" name="pembelian" value="Cash" required onclick="hideInfo()"> Cash
</label>
<label>
<input type="radio" name="pembelian" value="Kredit" required onclick="showInfo()"> Kredit
</label>

<p id="infoKredit" class="text-red-500 text-sm mt-2 hidden">
*Wajib menyerahkan KTP & KK saat pengambilan
</p>

<button name="submit"
class="mt-6 w-full bg-red-600 text-white py-2 rounded hover:bg-red-700">
Ajukan Pembelian
</button>

</form>
</div>

<script>
function showInfo(){ document.getElementById("infoKredit").classList.remove("hidden"); }
function hideInfo(){ document.getElementById("infoKredit").classList.add("hidden"); }
</script>

</body>
</html>
