<?php
include "../koneksi.php";

$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM mobil WHERE id=$id");
$m = mysqli_fetch_assoc($data);

if (isset($_POST['update'])) {

    $nama = $_POST['nama'];
    $tipe = $_POST['tipe'];
    $tahun = $_POST['tahun'];
    $harga = $_POST['harga'];

    // upload gambar (optional)
    if ($_FILES['gambar']['name'] != "") {

        $file = $_FILES['gambar']['name'];
        $tmp = $_FILES['gambar']['tmp_name'];

        move_uploaded_file($tmp, "upload/" . $file);

        mysqli_query($conn, "UPDATE mobil SET
            nama='$nama',
            tipe='$tipe',
            tahun='$tahun',
            harga='$harga',
            gambar='$file'
            WHERE id=$id
        ");

    } else {

        mysqli_query($conn, "UPDATE mobil SET
            nama='$nama',
            tipe='$tipe',
            tahun='$tahun',
            harga='$harga'
            WHERE id=$id
        ");
    }

    header("Location: ../galeri.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Mobil</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

<div class="max-w-xl mx-auto mt-10 bg-white p-6 rounded shadow">

<h2 class="text-xl font-bold mb-4">Edit Mobil</h2>

<form method="POST" enctype="multipart/form-data">

<input type="text" name="nama" value="<?= $m['nama'] ?>" 
class="w-full p-2 border mb-3">

<input type="text" name="tipe" value="<?= $m['tipe'] ?>" 
class="w-full p-2 border mb-3">

<input type="number" name="tahun" value="<?= $m['tahun'] ?>" 
class="w-full p-2 border mb-3">

<input type="number" name="harga" value="<?= $m['harga'] ?>" 
class="w-full p-2 border mb-3">

<p class="text-sm mb-2">Gambar sekarang:</p>
<img src="upload/<?= $m['gambar'] ?>" class="w-full h-40 object-cover mb-3">

<input type="file" name="gambar" class="mb-3">

<button name="update"
class="bg-green-500 text-white px-4 py-2 rounded">
Update
</button>

</form>

</div>

</body>
</html>