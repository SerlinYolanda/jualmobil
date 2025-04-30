<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contoh Gambar dan Style</title>
  <!-- ✅ Gunakan CDN Tailwind saat pengembangan -->
  <!-- <script src="https://cdn.tailwindcss.com/3.4.1"></script> -->

  <!-- ✅ Atau gunakan file lokal jika sudah didownload ke /public/styles -->
  <script src="/styles/tailwindcss3.4.1.js"></script>

  <!-- ✅ Style tambahan jika ada -->
  <link rel="stylesheet" href="/styles/style_serlin.css">
</head>
<body class="bg-gray-100 p-6">

  <!-- ✅ Judul dengan Tailwind (warna merah, margin, dan center) -->
  <h1 class="text-red-600 text-3xl font-bold mb-4 text-center">
    Selamat Datang di Website mlakuraso
  </h1>

  <!-- ✅ Menampilkan gambar dengan Tailwind styling -->
  <div class="flex gap-4 justify-center">
    <img src="/images/martabak.jpg" alt="martabak" class="w-[300px] rounded shadow-lg">
    <img src="/images/jasuke.jng" alt="jasuke" class="w-[300px] rounded shadow-lg">
  </div>

</body>
</html>
