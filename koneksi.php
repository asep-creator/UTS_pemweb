<?php
// SESSION AMAN (tidak bentrok kalau sudah aktif)
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$conn = mysqli_connect("localhost", "root", "Adina0011", "db_UTS_pemweb");

if (!$conn) {
    die("Koneksi gagal");
}

?>