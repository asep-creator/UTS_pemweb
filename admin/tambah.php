<?php include "../koneksi.php"; ?>

<h2>Tambah Mobil</h2>

<form method="POST" enctype="multipart/form-data">
    Nama: <input type="text" name="nama"><br><br>
    Tipe: <input type="text" name="tipe"><br><br>
    Tahun: <input type="number" name="tahun"><br><br>
    Harga: <input type="number" name="harga"><br><br>
    Gambar: <input type="file" name="gambar"><br><br>

    <button name="submit">Simpan</button>
</form>

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

    echo "Berhasil ditambahkan!";
}
?>