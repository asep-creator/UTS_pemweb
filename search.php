<?php
include "koneksi.php";

$search = $_GET['search'] ?? '';
$tahun = $_GET['tahun'] ?? '';
$harga = $_GET['harga'] ?? '';

$query = "SELECT * FROM mobil WHERE 1=1";

if ($search) $query .= " AND nama LIKE '%$search%'";
if ($tahun) $query .= " AND tahun='$tahun'";
if ($harga) $query .= " AND harga <= $harga";

$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    while ($m = mysqli_fetch_assoc($result)) {

        echo "
        <a href='detail.php?id={$m['id']}' class='block'>
        
        <div class='bg-white rounded-xl shadow hover:shadow-lg transition overflow-hidden'>
            
            <div class='relative'>
                <img src='admin/upload/{$m['gambar']}' 
                class='w-full h-48 object-cover'>

                <span class='absolute top-2 left-2 bg-red-500 text-white text-xs px-2 py-1 rounded'>
                    {$m['tahun']}
                </span>
            </div>

            <div class='p-4'>
                <h3 class='font-bold text-lg'>{$m['nama']}</h3>
                <p class='text-gray-500 text-sm'>{$m['tipe']}</p>

                <p class='text-green-600 font-bold mt-2'>
                    Rp " . number_format($m['harga'],0,',','.') . "
                </p>
            </div>

        </div>

        </a>
        ";
    }
} else {
    echo "<p class='col-span-3 text-center text-gray-500 mt-10'>
    Mobil tidak ditemukan 😢
    </p>";
}
?>