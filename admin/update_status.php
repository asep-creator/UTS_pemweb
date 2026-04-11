<?php
include "../koneksi.php";

$id = $_GET['id'];

mysqli_query($conn, "UPDATE pesanan SET status='Selesai' WHERE id=$id");

header("Location: dashboard.php");
?>