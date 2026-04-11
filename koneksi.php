<?php
session_start();

$conn = mysqli_connect("localhost", "root", "Adina0011", "db_UTS_pemweb");

if (!$conn) {
    die("Koneksi gagal");
}
?>
