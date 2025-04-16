<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="./css/style.css" />
    <title>Fasilitas</title>
</head>

<body class="bg-gray-50">
    <?php include_once "components/header.php"; ?>

    <!-- Hero Section -->
    <section class="bg-white text-center py-8 mt-[80px]">
        <h2 class="text-2xl font-bold">Fasilitas</h2>
        <p class="mt-2">Berbagai fasilitas unggulan yang tersedia di sekolah</p>
    </section>

    <!-- Fasilitas Section -->
    <section class="container mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 px-4 my-10">
        <!-- Lab Komputer -->
        <div class="bg-white border border-gray-300 rounded-lg p-4">
            <img src="./images/fasilitas_1.jpg" alt="Lab" class="w-full h-[200px] object-cover">
            <h3 class="text-xl font-semibold mt-8">Ruang Kelas</h3>
            <p class="mt-2 text-gray-800">Ruang kelas yang nyaman dengan fasilitas multimedia untuk mendukung pembelajaran.</p>
        </div>

        <!-- Perpustakaan -->
        <div class="bg-white border border-gray-300 rounded-lg p-4">
            <img src="./images/fasilitas_2.jpg" alt="Perpustakaan" class="w-full h-[200px] object-cover">
            <h3 class="text-xl font-semibold mt-8">Perpustakaan</h3>
            <p class="mt-2 text-gray-800">Perpustakaan dengan koleksi buku lengkap untuk menunjang pembelajaran siswa.</p>
        </div>

        <!-- Ruang Kelas -->
        <div class="bg-white border border-gray-300 rounded-lg p-4">
            <img src="./images/fasilitas_3.jpg" alt="kelas" class="w-full h-[200px] object-cover">
            <h3 class="text-xl font-semibold mt-8">Aula Sekolah</h3>
            <p class="mt-2 text-gray-800">Aula yang digunakan untuk berbagai kegiatan sekolah dan acara penting.</p>
        </div>

        <!-- Lapangan Olahraga -->
        <div class="bg-white border border-gray-300 rounded-lg p-4">
            <img src="./images/fasilitas_4.jpg" alt="Lapangan" class="w-full h-[200px] object-cover">
            <h3 class="text-xl font-semibold mt-8">Lapangan Olahraga</h3>
            <p class="mt-2 text-gray-800">Lapangan luas untuk berbagai aktivitas olahraga seperti sepak bola dan basket.</p>
        </div>

        <!-- Ruang UKS -->
        <div class="bg-white border border-gray-300 rounded-lg p-4">
            <img src="./images/fasilitas_5.jpg" alt="Busana" class="w-full h-[200px] object-cover">
            <h3 class="text-xl font-semibold mt-8">Ruang Tata Busana</h3>
            <p class="mt-2 text-gray-800">Ruang praktik menjahit dan desain mode untuk siswa jurusan Tata Busana.</p>
        </div>

        <!-- Kantin -->
        <div class="bg-white border border-gray-300 rounded-lg p-4">
            <img src="./images/fasilitas_6.jpg" alt="Kantin" class="w-full h-[200px] object-cover">
            <h3 class="text-xl font-semibold mt-8">Ruang Kuliner</h3>
            <p class="mt-2 text-gray-800">Dapur praktik lengkap dengan peralatan memasak untuk pembelajaran siswa jurusan Kuliner.</p>
        </div>

        <!-- Aula Sekolah -->
        <div class="bg-white border border-gray-300 rounded-lg p-4">
            <img src="./images/fasilitas_7.jpg" alt="TKJ" class="w-full h-[200px] object-cover">
            <h3 class="text-xl font-semibold mt-8">Lab TKJ</h3>
            <p class="mt-2 text-gray-800"> Laboratorium komputer yang dilengkapi jaringan untuk praktik siswa jurusan Teknik Komputer dan Jaringan.</p>
        </div>

        <div class="bg-white border border-gray-300 rounded-lg p-4">
            <img src="./images/fasilitas_8.jpg" alt="DKV" class="w-full h-[200px] object-cover">
            <h3 class="text-xl font-semibold mt-8">Lab DKV</h3>
            <p class="mt-2 text-gray-800">Ruang kreatif untuk praktik desain komunikasi visual dengan perangkat desain grafis profesional.</p>
        </div>

        <!-- Ruang Multimedia -->
        <div class="bg-white border border-gray-300 rounded-lg p-4">
            <img src="./images/fasilitas_9.jpg" alt="Multimedia" class="w-full h-[200px] object-cover">
            <h3 class="text-xl font-semibold mt-8">Lab Multimedia</h3>
            <p class="mt-2 text-gray-800">Ruang multimedia dengan peralatan audio visual untuk mendukung pembelajaran interaktif.</p>
        </div>
    
        <div class="bg-white border border-gray-300 rounded-lg p-4">
            <img src="./images/fasilitas_10.jpg" alt="Multimedia" class="w-full h-[200px] object-cover">
            <h3 class="text-xl font-semibold mt-8">Lab AKL</h3>
            <p class="mt-2 text-gray-800">Laboratorium praktik akuntansi dan pembelajaran sistem keuangan lembaga.</p>
        </div>   
        
        <div class="bg-white border border-gray-300 rounded-lg p-4">
            <img src="./images/fasilitas_11.jpg" alt="Multimedia" class="w-full h-[200px] object-cover">
            <h3 class="text-xl font-semibold mt-8">Lab MPLB</h3>
            <p class="mt-2 text-gray-800">Ruang praktik layanan administrasi perkantoran modern untuk siswa jurusan MPLB.</p>
        </div>
    
        <div class="bg-white border border-gray-300 rounded-lg p-4">
            <img src="./images/fasilitas_12.jpg" alt="Multimedia" class="w-full h-[200px] object-cover">
            <h3 class="text-xl font-semibold mt-8">Studio Animasi</h3>
            <p class="mt-2 text-gray-800">Studio kreatif dengan perangkat lunak dan perangkat keras untuk produksi animasi digital siswa.</p>
        </div>          
    </section>

    <?php include_once "components/footer.php"; ?>

    <script src="./js/script.js"></script>
</body>

</html>