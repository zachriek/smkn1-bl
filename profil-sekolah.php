<html>
 <head>
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
	<link rel="stylesheet" href="./css/style.css" />
    <title>PROFIL SEKOLAH</title>
 </head>
 
 <body class="bg-gray-50">

  <!-- Header -->
  <?php include_once "components/header.php"; ?>

  <!-- Hero Section -->
  <section class="relative w-full h-96">
  <img class="w-full h-96 object-cover" src="https://asset-2.tstatic.net/tribunlampungwiki/foto/bank/images/SMK-Negeri-1-Bandar-Lampung.jpg" alt="">

  <!-- Overlay hitam transparan -->
  <div class="absolute inset-0 bg-black opacity-40 z-10"></div>

  <!-- Konten di atas gambar -->
  <div class="absolute inset-0 flex flex-col justify-center items-center z-20">
    <h1 class="text-white text-3xl font-bold text-center">
      Profil SMK Negeri 1 Bandar Lampung
    </h1>

    <div class="flex space-x-4 mt-4 flex-wrap justify-center">
      <div class="bg-white bg-opacity-80 p-4 text-center rounded shadow">
        <p class="text-lg font-bold">CONTENT</p>
        <p class="text-sm">Aula Sekolah</p>
      </div>
      <div class="bg-white bg-opacity-80 p-4 text-center rounded shadow">
        <p class="text-lg font-bold">CONTENT</p>
        <p class="text-sm">Kantin</p>
      </div>
      <div class="bg-white bg-opacity-80 p-4 text-center rounded shadow">
        <p class="text-lg font-bold">CONTENT</p>
        <p class="text-sm">Halaman</p>
      </div>
      <div class="bg-white bg-opacity-80 p-4 text-center rounded shadow">
        <p class="text-lg font-bold">CONTENT</p>
        <p class="text-sm">Perpustakaan</p>
      </div>
    </div>
  </div>
</section>
  <!-- Main Content -->
  <main class="container mx-auto py-12 px-6">
   <h2 class="text-center text-2xl font-bold mb-8">
    SMK Negeri 1 Bandar Lampung
   </h2>
   <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
    <div class="bg-green-600 text-white p-6 rounded-lg">
     <div class="flex items-center mb-4">
      <i class="fas fa-school text-3xl">
      </i>
      <h3 class="ml-4 text-xl font-bold">
       Nama Sekolah
      </h3>
     </div>
     <p>
      SMK Negeri 1 Bandar Lampung
     </p>
     <p>
      Nama Kepala Sekolah
     </p>
     <p>
     Dr. Armina, M.Pd.
     </p>
     <p>
      Alamat
     </p>
     <p>
     Gunung Sulah, Way Halim, Jl. Pulau Morotai No.33, Jagabaya III, Kec. Sukarame, Kota Bandar Lampung, Lampung 35122
     </p>
     <p>
      Website/Email
     </p>
     <p>
     https://smkn1bdl.sch.id/
     </p>
     <p>
      smkn1bandarlampung@gmail.com
     </p>
     <p>
      No. Telp
     </p>
     <p>
      08XXXXXXXX
     </p>
    </div>
    <div class="bg-white p-6 rounded-lg shadow">
     <div class="flex items-center mb-4">
      <i class="fas fa-id-card text-3xl text-green-600">
      </i>
      <h3 class="ml-4 text-xl font-bold">
       No. Pendirian Sekolah
      </h3>
     </div>
     <p>
      No. Sertifikat
     </p>
     <p>
      XXX / XXX / 20XX
     </p>
     <p>
      Jenjang Akreditasi
     </p>
     <p>
      X
     </p>
     <p>
      Tahun Didirikan
     </p>
     <p>
      19XX
     </p>
     <p>
      Tahun Operasional
     </p>
     <p>
      19XX
     </p>
    </div>
    <div class="bg-white p-6 rounded-lg shadow">
     <div class="flex items-center mb-4">
      <i class="fas fa-chart-bar text-3xl text-green-600">
      </i>
      <h3 class="ml-4 text-xl font-bold">
       No. Statistik Sekolah
      </h3>
     </div>
     <p>
      XXXXXXX
     </p>
     <p>
      NIS
     </p>
     <p>
      20XXXXXX
     </p>
     <p>
      Status Kepemilikan Tanah
     </p>
     <p>
      Hak Milik
     </p>
     <p>
      Luas Tanah
     </p>
     <p>
      XXX M2
     </p>
     <p>
      Status Kepemilikan Bangunan
     </p>
     <p>
      Pemerintah
     </p>
    </div>
   </div>
   <!-- Tables -->
   <section class="mb-12">
    <h3 class="text-xl font-bold mb-4">
     Jumlah Siswa
    </h3>
    <table class="w-full bg-white shadow rounded-lg overflow-hidden">
     <thead class="bg-green-600 text-white">
      <tr>
       <th class="p-2">
        Kelas 1
       </th>
       <th class="p-2">
        Jumlah Rumbel
       </th>
       <th class="p-2">
        Kelas 2
       </th>
       <th class="p-2">
        Jumlah Rumbel
       </th>
       <th class="p-2">
        Kelas 3
       </th>
       <th class="p-2">
        Jumlah Rumbel
       </th>
       <th class="p-2">
        Kelas 4
       </th>
       <th class="p-2">
        Jumlah Rumbel
       </th>
       <th class="p-2">
        Kelas 5
       </th>
       <th class="p-2">
        Jumlah Rumbel
       </th>
       <th class="p-2">
        Kelas 6
       </th>
       <th class="p-2">
        Jumlah Rumbel
       </th>
      </tr>
     </thead>
     <tbody>
      <tr class="text-center">
       <td class="p-2">
        L
       </td>
       <td class="p-2">
        P
       </td>
       <td class="p-2">
        L
       </td>
       <td class="p-2">
        P
       </td>
       <td class="p-2">
        L
       </td>
       <td class="p-2">
        P
       </td>
       <td class="p-2">
        L
       </td>
       <td class="p-2">
        P
       </td>
       <td class="p-2">
        L
       </td>
       <td class="p-2">
        P
       </td>
       <td class="p-2">
        L
       </td>
       <td class="p-2">
        P
       </td>
      </tr>
      <tr class="text-center">
       <td class="p-2">
        15
       </td>
       <td class="p-2">
        15
       </td>
       <td class="p-2">
        5
       </td>
       <td class="p-2">
        15
       </td>
       <td class="p-2">
        15
       </td>
       <td class="p-2">
        5
       </td>
       <td class="p-2">
        15
       </td>
       <td class="p-2">
        5
       </td>
       <td class="p-2">
        15
       </td>
       <td class="p-2">
        5
       </td>
       <td class="p-2">
        15
       </td>
       <td class="p-2">
        5
       </td>
      </tr>
     </tbody>
    </table>
   </section>
   <section class="mb-12">
    <h3 class="text-xl font-bold mb-4">
     Data Ruang Kelas
    </h3>
    <table class="w-full bg-white shadow rounded-lg overflow-hidden">
     <thead class="bg-green-600text-white">
      <tr>
       <th class="p-2">
        Jumlah Ruang Kelas Asli
       </th>
       <th class="p-2">
        Jumlah ruang lainnya yang dipakai untuk ruang kelas (e)
       </th>
       <th class="p-2">
        Jumlah ruang yang digunakan untuk ruang kelas (f)=(d+e)
       </th>
      </tr>
     </thead>
     <tbody>
      <tr class="text-center">
       <td class="p-2">
        Ukuran 7x9 m2
       </td>
       <td class="p-2">
        Ukuran &gt; 63 m2
       </td>
       <td class="p-2">
        Jumlah Ruang
       </td>
      </tr>
      <tr class="text-center">
       <td class="p-2">
        4
       </td>
       <td class="p-2">
        23
       </td>
       <td class="p-2">
        -
       </td>
       <td class="p-2">
        27
       </td>
       <td class="p-2">
        -
       </td>
       <td class="p-2">
        27
       </td>
      </tr>
     </tbody>
    </table>
   </section>
   <section class="mb-12">
    <h3 class="text-xl font-bold mb-4">
     Data Ruang Kelas
    </h3>
    <table class="w-full bg-white shadow rounded-lg overflow-hidden">
     <thead class="bg-green-600 text-white">
      <tr>
       <th class="p-2">
        No
       </th>
       <th class="p-2">
        Jenis Ruangan
       </th>
       <th class="p-2">
        Jumlah Ruangan
       </th>
       <th class="p-2">
        Jumlah Yang Kondisinya Baik
       </th>
       <th class="p-2">
        Jumlah Yang Kondisinya Rusak
       </th>
       <th class="p-2">
        Kategori Kerusakan
       </th>
      </tr>
     </thead>
     <tbody>
      <tr class="text-center">
       <td class="p-2">
        1
       </td>
       <td class="p-2">
        Perpustakaan
       </td>
       <td class="p-2">
        1
       </td>
       <td class="p-2">
        1
       </td>
       <td class="p-2">
        -
       </td>
       <td class="p-2">
        -
       </td>
      </tr>
      <tr class="text-center">
       <td class="p-2">
        2
       </td>
       <td class="p-2">
        Ruang Komputer
       </td>
       <td class="p-2">
        1
       </td>
       <td class="p-2">
        1
       </td>
       <td class="p-2">
        -
       </td>
       <td class="p-2">
        -
       </td>
      </tr>
      <tr class="text-center">
       <td class="p-2">
        3
       </td>
       <td class="p-2">
        AULA
       </td>
       <td class="p-2">
        1
       </td>
       <td class="p-2">
        1
       </td>
       <td class="p-2">
        -
       </td>
       <td class="p-2">
        -
       </td>
      </tr>
      <tr class="text-center">
       <td class="p-2">
        4
       </td>
       <td class="p-2">
        Ruang UKS
       </td>
       <td class="p-2">
        1
       </td>
       <td class="p-2">
        1
       </td>
       <td class="p-2">
        -
       </td>
       <td class="p-2">
        -
       </td>
      </tr>
      <tr class="text-center">
       <td class="p-2">
        5
       </td>
       <td class="p-2">
        Ruang TU
       </td>
       <td class="p-2">
        1
       </td>
       <td class="p-2">
        1
       </td>
       <td class="p-2">
        -
       </td>
       <td class="p-2">
        -
       </td>
      </tr>
      <tr class="text-center">
       <td class="p-2">
        6
       </td>
       <td class="p-2">
        Ruang Kepala Sekolah
       </td>
       <td class="p-2">
        1
       </td>
       <td class="p-2">
        1
       </td>
       <td class="p-2">
        -
       </td>
       <td class="p-2">
        -
       </td>
      </tr>
      <tr class="text-center">
       <td class="p-2">
        7
       </td>
       <td class="p-2">
        Ruang BP
       </td>
       <td class="p-2">
        1
       </td>
       <td class="p-2">
        1
       </td>
       <td class="p-2">
        -
       </td>
       <td class="p-2">
        -
       </td>
      </tr>
      <tr class="text-center">
       <td class="p-2">
        8
       </td>
       <td class="p-2">
        Ruang Ibadah
       </td>
       <td class="p-2">
        1
       </td>
       <td class="p-2">
        1
       </td>
       <td class="p-2">
        -
       </td>
       <td class="p-2">
        -
       </td>
      </tr>
     </tbody>
    </table>
   </section>
   <section class="mb-12">
    <h3 class="text-xl font-bold mb-4">
     Data Tenaga Pendidik dan Kependidikan
    </h3>
    <table class="w-full bg-white shadow rounded-lg overflow-hidden">
     <thead class="bg-green-600 text-white">
      <tr>
       <th class="p-2">
        No
       </th>
       <th class="p-2">
        Jumlah Guru / Staff
       </th>
       <th class="p-2">
        Smp Negeri
       </th>
       <th class="p-2">
        S-1
       </th>
       <th class="p-2">
        S-2
       </th>
       <th class="p-2">
        Yang sedang menempuh S-1
       </th>
       <th class="p-2">
        Keterangan
       </th>
      </tr>
     </thead>
     <tbody>
      <tr class="text-center">
       <td class="p-2">
        1
       </td>
       <td class="p-2">
        Guru PNS
       </td>
       <td class="p-2">
        32
       </td>
       <td class="p-2">
        23
       </td>
       <td class="p-2">
        8
       </td>
       <td class="p-2">
        1 Orang D-1
       </td>
       <td class="p-2">
        -
       </td>
      </tr>
      <tr class="text-center">
       <td class="p-2">
        2
       </td>
       <td class="p-2">
        Guru Non PNS
       </td>
       <td class="p-2">
        5
       </td>
       <td class="p-2">
        -
       </td>
       <td class="p-2">
        -
       </td>
       <td class="p-2">
        -
       </td>
       <td class="p-2">
        -
       </td>
      </tr>
      <tr class="text-center">
       <td class="p-2">
        3
       </td>
       <td class="p-2">
        Guru PNS DPK
       </td>
       <td class="p-2">
        4
       </td>
       <td class="p-2">
        2
       </td>
       <td class="p-2">
        1
       </td>
       <td class="p-2">
        -
       </td>
       <td class="p-2">
        -
       </td>
      </tr>
      <tr class="text-center">
       <td class="p-2">
        4
       </td>
       <td class="p-2">
        Staff TU PNS
       </td>
       <td class="p-2">
        2
       </td>
       <td class="p-2">
        1
       </td>
       <td class="p-2">
        -
       </td>
       <td class="p-2">
        -
       </td>
       <td class="p-2">
        -
       </td>
      </tr>
      <tr class="text-center">
       <td class="p-2">
        5
       </td>
       <td class="p-2">
        Staff TU Non PNS
       </td>
       <td class="p-2">
        9
       </td>
       <td class="p-2">
        -
       </td>
       <td class="p-2">
        -
       </td>
       <td class="p-2">
        -
       </td>
       <td class="p-2">
        -
       </td>
      </tr>
     </tbody>
    </table>
   </section>
  </main>
  
 <?php include_once "components/map.php" ?>

	<?php include_once "components/footer.php" ?>

	<!-- Script -->
	<script src="./js/script.js"></script>
    
 </body>
</html>