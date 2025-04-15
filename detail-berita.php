<?php

$daftar_berita = [
  [
    "judul" => "Pelaksanaan UKK AKL",
    "tanggal" => "14 April 2025",
    "deskripsi_singkat" => "📅 Senin, 14 April 2025✍️ Admin SMK Negeri 1 Bandar Lampung Senin, 14 April 2025, SMK Negeri 1 Bandar Lampung memulai pelaksanaan Uji Kompetensi Keahlian (UKK) untuk Program Keahlian Akutansi Keuangan dan Lembaga (AKL) Tahun Pelajaran 2024/2025. UKK merupakan tahapan . . .",
    "gambar" => "https://smkn1bdl.sch.id/wp-content/uploads/2025/04/AKL-4.jpeg"
  ],
  [
    "judul" => "Pelaksanaan UKK Busana",
    "tanggal" => "14 April 2025",
    "deskripsi_singkat" => "Pelaksanaan UKK Busana TP. 2024/2025 📅 Senin, 14 April 2025✍️ Admin SMK Negeri 1 Bandar Lampung Senin, 14 April 2025, Program Keahlian Busana SMK Negeri 1 Bandar Lampung resmi memulai pelaksanaan Uji Kompetensi Keahlian (UKK) Tahun Pelajaran 2024/2025. UKK merupakan . . .",
    "gambar" => "https://smkn1bdl.sch.id/wp-content/uploads/2025/04/UKK-Busana-2025-7.jpeg"
  ],
  [
    "judul" => "Pelaksanaan UKK Animasi",
    "tanggal" => "14 April 2025",
    "deskripsi_singkat" => "Pelaksanaan UKK Animasi TP. 2024/2025 📅 Senin, 14 April 2025✍️ Admin SMK Negeri 1 Bandar Lampung Senin, 14 April 2025, Program Keahlian Animasi SMK Negeri 1 Bandar Lampung memulai pelaksanaan Uji Kompetensi Keahlian (UKK) Tahun Pelajaran 2024/2025. Kegiatan ini merupakan . . .",
    "gambar" => "https://smkn1bdl.sch.id/wp-content/uploads/2025/04/UKK-ANIMASI-2025-4-scaled.jpeg"
  ],
]

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
  <link rel="stylesheet" href="./css/style.css" />
  <title>Berita</title>
</head>

<body class="bg-gray-50">
  <?php include_once "components/header.php"; ?>

  <!-- Hero Section -->
  <section class="bg-white text-center py-8 mt-[80px]">
    <h2 class="text-2xl font-bold">Berita</h2>
    <p class="mt-2">Berita/Artikel di SMK Negeri 1 Bandar Lampung</p>
  </section>

  <!-- News Cards -->
  <section class="min-h-screen my-[50px]">
    <div class="container mx-auto px-4">
      <div class="bg-white border border-gray-300 border border-gray-300 rounded-lg p-4">
        <img src="<?= $daftar_berita[0]["gambar"]; ?>" class="w-full h-[500px] rounded-md object-cover"></img>
        <h3 class="text-xl font-semibold mt-8"><?= $daftar_berita[0]["judul"]; ?></h3>
        <p class="mt-1 text-gray-700"><?= $daftar_berita[0]["tanggal"]; ?></p>
        <p class="mt-12 mb-4 text-gray-800">
          Senin, 14 April 2025, SMK Negeri 1 Bandar Lampung memulai pelaksanaan Uji Kompetensi Keahlian (UKK) untuk Program Keahlian Akutansi Keuangan dan Lembaga (AKL) Tahun Pelajaran 2024/2025. UKK merupakan tahapan penting dalam evaluasi akhir peserta didik kelas XII sebelum dinyatakan lulus dari satuan pendidikan vokasi.
        </p>
        <p class="mt-6 mb-4 text-gray-800">
          Pelaksanaan UKK AKL tahun ini menggunakan skema Lembaga Sertifikasi Profesi (LSP P-1) SMK Negeri 1 Bandar Lampung, yang telah berlisensi resmi dari Badan Nasional Sertifikasi Profesi (BNSP). Dalam mekanisme ini, peserta akan diuji oleh asesor kompeten dan profesional, dengan standar uji yang diakui secara nasional dan industri.
        </p>
        <p class="mt-6 mb-4 text-gray-800">
          Program Keahlian AKL berada di bawah koordinasi Ibu Diah Ariasti Rusdi, S.Pd. selaku Ketua Jurusan. Seluruh peserta UKK AKL telah dipersiapkan melalui rangkaian kegiatan seperti pelatihan pengisian laporan keuangan, penyusunan portofolio berbasis data akuntansi, serta simulasi ujian dengan pendekatan studi kasus yang relevan dengan dunia usaha dan dunia industri.
        </p>
        <p class="mt-6 mb-4 text-gray-800">
          “UKK ini adalah momen pembuktian kompetensi siswa kami, khususnya dalam bidang pencatatan transaksi, penyusunan laporan keuangan, pengelolaan dokumen keuangan, serta penguasaan software akuntansi. Harapannya, mereka mampu menunjukkan profesionalisme kerja dan memperoleh sertifikasi yang diakui secara nasional,” ujar Ibu Diah Ariasti Rusdi, S.Pd.
        </p>
        <p class="mt-6 mb-4 text-gray-800">
          UKK AKL akan berlangsung mulai tanggal 14 April 2025, dengan melibatkan skema kompetensi seperti Memproses Entry Jurnal, Memproses Buku Besar, Menyusun Laporan Keuangan, Mengoperasikan Aplikasi Komputer Akuntansi.
        </p>
        <p class="mt-6 mb-4 text-gray-800">
          UKK AKL akan berlangsung hingga tanggal 24 April 2025, dengan harapan seluruh peserta dapat menunjukkan kemampuan terbaik mereka, serta meraih sertifikasi kompetensi sebagai bekal dalam memasuki dunia kerja maupun melanjutkan ke jenjang pendidikan berikutnya.
        </p>
        <p class="mt-6 mb-8 text-gray-800">Selamat dan sukses untuk seluruh peserta UKK AKL! Berkarya, berinovasi, dan buktikan kompetensimu!</p>
        <a href="berita.php" class="text-green-700 inline-block font-medium mt-4 mb-2 hover:underline">Kembali ke Semua Berita</a>
      </div>
    </div>
  </section>

  <?php include_once "components/footer.php"; ?>

  <!-- Script -->
  <script src="./js/script.js"></script>
</body>

</html>