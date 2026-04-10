<?php include "../koneksi.php"; ?>

<h2>Data Mobil</h2>
<a href="tambah.php">+ Tambah Mobil</a>

<table border="1" cellpadding="10">
<tr>
    <th>Nama</th>
    <th>Tipe</th>
    <th>Tahun</th>
    <th>Harga</th>
    <th>Aksi</th>
</tr>

<?php
$data = mysqli_query($conn, "SELECT * FROM mobil");

while ($d = mysqli_fetch_assoc($data)) {
    echo "
    <tr>
        <td>{$d['nama']}</td>
        <td>{$d['tipe']}</td>
        <td>{$d['tahun']}</td>
        <td>{$d['harga']}</td>
        <td>
            <a href='hapus.php?id={$d['id']}'>Hapus</a>
        </td>
    </tr>
    ";
}
?>
</table>
