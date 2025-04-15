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
            <img src="./images/Placeholder_img.jpg" alt="Lab" class="w-full h-[200px] object-cover">
            <h3 class="text-xl font-semibold mt-8">Lab Komputer</h3>
            <p class="mt-2 text-gray-800">Lab komputer dengan fasilitas modern untuk pembelajaran teknologi.</p>
        </div>

        <!-- Perpustakaan -->
        <div class="bg-white border border-gray-300 rounded-lg p-4">
            <img src="./images/Placeholder_img.jpg" alt="Perpustakaan" class="w-full h-[200px] object-cover">
            <h3 class="text-xl font-semibold mt-8">Perpustakaan</h3>
            <p class="mt-2 text-gray-800">Perpustakaan dengan koleksi buku lengkap untuk menunjang pembelajaran siswa.</p>
        </div>

        <!-- Ruang Kelas -->
        <div class="bg-white border border-gray-300 rounded-lg p-4">
            <img src="./images/Placeholder_img.jpg" alt="kelas" class="w-full h-[200px] object-cover">
            <h3 class="text-xl font-semibold mt-8">Ruang Kelas</h3>
            <p class="mt-2 text-gray-800">Ruang kelas yang nyaman dengan fasilitas multimedia untuk mendukung pembelajaran.</p>
        </div>

        <!-- Lapangan Olahraga -->
        <div class="bg-white border border-gray-300 rounded-lg p-4">
            <img src="./images/Placeholder_img.jpg" alt="Lapangan" class="w-full h-[200px] object-cover">
            <h3 class="text-xl font-semibold mt-8">Lapangan Olahraga</h3>
            <p class="mt-2 text-gray-800">Lapangan luas untuk berbagai aktivitas olahraga seperti sepak bola dan basket.</p>
        </div>

        <!-- Ruang UKS -->
        <div class="bg-white border border-gray-300 rounded-lg p-4">
            <img src="./images/Placeholder_img.jpg" alt="UKS" class="w-full h-[200px] object-cover">
            <h3 class="text-xl font-semibold mt-8">Ruang UKS</h3>
            <p class="mt-2 text-gray-800">Unit Kesehatan Sekolah (UKS) yang dilengkapi dengan fasilitas medis dasar.</p>
        </div>

        <!-- Kantin -->
        <div class="bg-white border border-gray-300 rounded-lg p-4">
            <img src="./images/Placeholder_img.jpg" alt="Kantin" class="w-full h-[200px] object-cover">
            <h3 class="text-xl font-semibold mt-8">Kantin</h3>
            <p class="mt-2 text-gray-800">Kantin bersih dengan berbagai pilihan makanan sehat untuk siswa dan guru.</p>
        </div>

        <!-- Aula Sekolah -->
        <div class="bg-white border border-gray-300 rounded-lg p-4">
            <img src="./images/Placeholder_img.jpg" alt="Aula" class="w-full h-[200px] object-cover">
            <h3 class="text-xl font-semibold mt-8">Aula Sekolah</h3>
            <p class="mt-2 text-gray-800">Aula yang digunakan untuk berbagai kegiatan sekolah dan acara penting.</p>
        </div>

        <div class="bg-white border border-gray-300 rounded-lg p-4">
            <img src="./images/Placeholder_img.jpg" alt="Workshop" class="w-full h-[200px] object-cover">
            <h3 class="text-xl font-semibold mt-8">Workshop Teknik</h3>
            <p class="mt-2 text-gray-800">Workshop lengkap untuk praktik siswa jurusan teknik.</p>
        </div>

        <!-- Ruang Multimedia -->
        <div class="bg-white border border-gray-300 rounded-lg p-4">
            <img src="./images/Placeholder_img.jpg" alt="Multimedia" class="w-full h-[200px] object-cover">
            <h3 class="text-xl font-semibold mt-8">Ruang Multimedia</h3>
            <p class="mt-2 text-gray-800">Ruang multimedia dengan peralatan audio visual untuk mendukung pembelajaran interaktif.</p>
        </div>
    </section>

    <?php include_once "components/footer.php"; ?>

    <script src="./js/script.js"></script>
</body>

</html>