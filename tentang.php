
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tentang Kami - Teras Mobil 99</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-red-100 via-white to-red-400 min-h-screen">

  <!-- NAVBAR -->
  <nav class="bg-white shadow border-b">
    <div class="max-w-6xl mx-auto flex justify-between items-center py-2 px-5">

      <!-- LOGO + NAMA -->
      <div class="flex items-center">
        <img src="assets/logo.png" alt="logo" class="h-20">
        <h1 class="ml-3 flex font-bold">
          <span class="text-black text-3xl self-center">Teras</span>
          <span class="text-red-500 text-2xl self-center ml-1">Mobil 99</span>
        </h1>
      </div>

      <!-- HAMBURGER -->
      <button id="nav-toggle" class="md:hidden text-black text-3xl focus:outline-none">
        &#9776;
      </button>

      <!-- MENU -->
      <div id="nav-menu" class="hidden md:flex flex-col mt-2 md:flex-row md:mt-0 md:space-x-6 font-medium w-full md:w-auto">
        <a href="index.php" class="text-gray-700 hover:text-red-500 py-1 md:py-0">Beranda</a>
        <a href="formulir.html" class="text-gray-700 hover:text-red-500 py-1 md:py-0">Formulir</a>
        <a href="tentang.php" class="text-red-500 border-b-2 border-red-500 pb-1">Tentang</a>
      </div>

    </div>
  </nav>

  <!-- KONTEN -->
  <section class="max-w-6xl mx-auto px-5 py-10">
    <div class="bg-white/80 backdrop-blur-sm rounded-[2rem] shadow-xl p-8 md:p-10">

      <!-- Heading -->
      <div class="mb-8">
        <p class="text-red-500 text-sm mb-2">Tentang</p>
        <h2 class="text-4xl md:text-6xl font-extrabold leading-tight text-slate-900">
          Showroom <span class="text-red-500">Mobil Kami</span>
        </h2>
        <p class="mt-5 max-w-3xl text-slate-600 text-lg leading-relaxed">
          Teras Mobil 99 adalah showroom mobil bekas terpercaya yang menyediakan berbagai pilihan 
          kendaraan berkualitas. Kami fokus pada transparansi harga, kondisi mobil yang terjamin, 
          dan layanan ramah untuk semua pelanggan. Dengan pengalaman kami, setiap transaksi menjadi lebih aman dan nyaman.
        </p>
      </div>

      <!-- Statistik -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-5 mb-8">
        <div class="bg-gray-50 rounded-2xl shadow border border-gray-300 p-8 text-center">
          <h3 class="text-5xl font-extrabold text-red-500">500+</h3>
          <p class="mt-2 text-slate-500 text-lg">Pelanggan Puas</p>
        </div>
        <div class="bg-gray-50 rounded-2xl shadow border border-gray-300 p-8 text-center">
          <h3 class="text-5xl font-extrabold text-red-500">100+</h3>
          <p class="mt-2 text-slate-500 text-lg">Mobil Tersedia</p>
        </div>
        <div class="bg-gray-50 rounded-2xl shadow border border-gray-300 p-8 text-center">
          <h3 class="text-5xl font-extrabold text-red-500">10+</h3>
          <p class="mt-2 text-slate-500 text-lg">Tahun Pengalaman</p>
        </div>
      </div>

      <!-- Gambar -->
       <div class="mb-6">
        <img src="assets/car photo.jpg"
        alt="Mobil showroom"
        class="w-full h-[180px] md:h-[260px] object-cover rounded-2xl shadow-md">
    </div>

      <!-- Visi Misi Lokasi -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">

  <div class="bg-white rounded-xl shadow border border-gray-100 p-4">
    <div class="w-10 h-10 rounded-full bg-red-100 flex items-center justify-center text-lg mb-3">
      🎯
    </div>
    <h3 class="text-xl font-semibold text-slate-900 mb-2">Visi</h3>
    <p class="text-slate-600 text-sm leading-relaxed">
      Menjadi showroom terpercaya pilihan masyarakat.
    </p>
  </div>

  <div class="bg-white rounded-xl shadow border border-gray-100 p-4">
    <div class="w-10 h-10 rounded-full bg-red-100 flex items-center justify-center text-lg mb-3">
      ❤️
    </div>
    <h3 class="text-xl font-semibold text-slate-900 mb-2">Misi</h3>
    <p class="text-slate-600 text-sm leading-relaxed">
      Menyediakan mobil bekas yang telah melalui pengecekan ketat untuk memastikan kualitasnya, memberikan layanan ramah dan profesional, 
      dan menghadirkan pengalaman membeli mobil yang nyaman dan praktis.
    </p>
  </div>

  <div class="bg-white rounded-xl shadow border border-gray-100 p-4">
    <div class="w-10 h-10 rounded-full bg-red-100 flex items-center justify-center text-lg mb-3">
      📍
    </div>
    <h3 class="text-xl font-semibold text-slate-900 mb-2">Lokasi</h3>
    <p class="text-slate-600 text-sm leading-relaxed">
      Surabaya, Jawa Timur.
    </p>
  </div>

</div>

      <!-- Kenapa Memilih Kami -->
      <div class="bg-slate-950 rounded-[2rem] p-6 md:p-8 text-white">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

          <div>
            <p class="text-red-400 font-semibold mb-2 text-sm">Kenapa Memilih Kami</p>
            <h3 class="text-2xl md:text-3xl font-bold leading-snug">
              Pengalaman beli mobil jadi lebih mudah
            </h3>
          </div>

          <div class="space-y-2 text-sm text-gray-200">
            <p>✔ Kondisi mobil dicek sebelum dijual</p>
            <p>✔ Harga bersaing dan transparan</p>
            <p>✔ Proses pembelian cepat</p>
          </div>

          <div class="space-y-2 text-sm text-gray-200">
            <p>✔ Banyak pilihan merek dan tipe</p>
            <p>✔ Tim ramah dan responsif</p>
            <p>✔ Cocok untuk kebutuhan keluarga maupun usaha</p>
          </div>

        </div>
      </div>

    </div>
  </section>

  <!-- FOOTER -->
  <footer class="bg-gray-900 text-gray-300 pt-10 pb-6">

  <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-3 gap-8">

  <!-- Tentang -->
  <div>
  <h2 class="text-xl font-bold text-white mb-3">Teras Mobil 99</h2>
  <p class="text-sm leading-relaxed">
  Teras Mobil 99 adalah platform jual beli mobil terpercaya yang
  menyediakan berbagai pilihan mobil berkualitas dengan harga terbaik
  serta proses pembelian yang mudah dan aman.
  </p>
  </div>

  <!-- Navigasi -->
  <div>
  <h2 class="text-xl font-bold text-white mb-3">Navigasi</h2>
  <ul class="space-y-2 text-sm">
  <li><a href="index.php" class="hover:text-white">Beranda</a></li>
  <li><a href="formulir.html" class="hover:text-white">Form Pembelian</a></li>
  <li><a href="tentang.php" class="hover:text-white">Tentang Kami</a></li>
  </ul>
  </div>

  <!-- Kontak -->
  <div>
  <h2 class="text-xl font-bold text-white mb-3">Kontak Kami</h2>
  <p class="text-sm">📍 Jl. Raya Mobil No.99, Surabaya</p>
  <p class="text-sm mt-1">📞 0812-3456-7890</p>
  <p class="text-sm mt-1">✉ info@terasmobil99.com</p>
  </div>

  </div>

  <div class="border-t border-gray-700 mt-8 pt-4 text-center text-sm">
  <p>© 2026 Teras Mobil 99. All Rights Reserved.</p>
  </div>

  </footer>

  <script>
    const toggle = document.getElementById("nav-toggle");
    const menu = document.getElementById("nav-menu");

    toggle.addEventListener("click", () => {
      menu.classList.toggle("hidden");
    });
  </script>