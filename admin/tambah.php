<?php include "../koneksi.php"; ?>

<?php
if (isset($_POST['submit'])) {

    $nama = $_POST['nama'];
    $tipe = $_POST['tipe'];
    $tahun = $_POST['tahun'];
    $harga = $_POST['harga'];

    $file = $_FILES['gambar']['name'];
    $tmp = $_FILES['gambar']['tmp_name'];

    move_uploaded_file($tmp, "upload/" . $file);

    mysqli_query($conn, "INSERT INTO mobil 
        VALUES ('','$nama','$tipe','$tahun','$harga','$file')");

    echo "<script>alert('Mobil berhasil ditambahkan!');window.location='../galeri.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Tambah Mobil</title>

<script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-gradient-to-br from-red-100 via-white to-red-400 min-h-screen flex items-center justify-center">

<div class="bg-white shadow-xl rounded-2xl p-8 w-[400px]">

<!-- JUDUL -->
<h2 class="text-2xl font-bold mb-6 text-center">Tambah Mobil</h2>

<form method="POST" enctype="multipart/form-data">

<!-- NAMA -->
<label class="font-semibold text-sm">Nama Mobil</label>
<input type="text" name="nama"
class="w-full p-3 border rounded-lg mb-3 focus:outline-red-400" required>

<!-- TIPE -->
<label class="font-semibold text-sm">Tipe Mobil</label>
<input type="text" name="tipe"
class="w-full p-3 border rounded-lg mb-3 focus:outline-red-400" required>

<!-- TAHUN -->
<label class="font-semibold text-sm">Tahun</label>
<input type="number" name="tahun"
class="w-full p-3 border rounded-lg mb-3 focus:outline-red-400" required>

<!-- HARGA -->
<label class="font-semibold text-sm">Harga</label>
<input type="number" name="harga"
class="w-full p-3 border rounded-lg mb-3 focus:outline-red-400" required>

<!-- GAMBAR -->
<label class="font-semibold text-sm">Upload Gambar</label>
<input type="file" name="gambar" id="gambar"
class="w-full p-2 border rounded mb-3" required>

<!-- PREVIEW -->
<img id="preview" class="w-full h-40 object-cover rounded mb-3 hidden">

<!-- BUTTON -->
<button name="submit"
class="w-full bg-green-500 text-white py-3 rounded-lg font-semibold hover:bg-green-600 transition">
Simpan
</button>

</form>

<!-- KEMBALI -->
<a href="../galeri.php"
class="block text-center mt-4 text-red-500 hover:underline">
← Kembali ke Galeri
</a>

</div>

<script>
// preview gambar
document.getElementById("gambar").onchange = function(e) {
    let reader = new FileReader();
    reader.onload = function(){
        let preview = document.getElementById("preview");
        preview.src = reader.result;
        preview.classList.remove("hidden");
    }
    reader.readAsDataURL(e.target.files[0]);
}
</script>

</body>
</html>
