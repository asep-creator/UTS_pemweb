<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "db_UTS_pemweb");

if (!$conn) {
    die("Koneksi gagal");
}
?>
