<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="./css/style.css" />
    <title>Galeri Foto</title>
</head>

<body class="bg-gray-50">
    <?php include_once "components/header.php"; ?>

    <!-- Hero Section -->
    <section class="bg-white text-center py-8 mt-[80px]">
        <h2 class="text-2xl font-bold">Galeri Foto</h2>
        <p class="mt-2">Dokumentasi berbagai kegiatan di SMK Negeri 1 Bandar Lampung</p>
    </section>

    <!-- Gallery Section -->
    <section class="container mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 px-4 my-10">
        <div class="bg-white border border-gray-300 rounded-lg overflow-hidden">
            <img src="./images/Placeholder_img.jpg" alt="Kegiatan 1" class="w-full h-[200px] object-cover">
            <div class="p-4">
                <h3 class="text-xl font-semibold">Upacara Bendera</h3>
                <p class="text-gray-800 mt-2">Suasana upacara bendera di sekolah.</p>
            </div>
        </div>

        <div class="bg-white border border-gray-300 rounded-lg overflow-hidden">
            <img src="./images/Placeholder_img.jpg" alt="Kegiatan 2" class="w-full h-[200px] object-cover">
            <div class="p-4">
                <h3 class="text-xl font-semibold">Lomba 17 Agustus</h3>
                <p class="text-gray-800 mt-2">Keseruan lomba peringatan Hari Kemerdekaan.</p>
            </div>
        </div>

        <div class="bg-white border border-gray-300 rounded-lg overflow-hidden">
            <img src="./images/Placeholder_img.jpg" alt="Kegiatan 3" class="w-full h-[200px] object-cover">
            <div class="p-4">
                <h3 class="text-xl font-semibold">Ekstrakurikuler Pramuka</h3>
                <p class="text-gray-800 mt-2">Kegiatan perkemahan bersama anggota Pramuka.</p>
            </div>
        </div>

        <div class="bg-white border border-gray-300 rounded-lg overflow-hidden">
            <img src="./images/Placeholder_img.jpg" alt="Kegiatan 4" class="w-full h-[200px] object-cover">
            <div class="p-4">
                <h3 class="text-xl font-semibold">Kunjungan Industri</h3>
                <p class="text-gray-800 mt-2">Siswa berkunjung ke industri untuk belajar langsung.</p>
            </div>
        </div>

        <div class="bg-white border border-gray-300 rounded-lg overflow-hidden">
            <img src="./images/Placeholder_img.jpg" alt="Kegiatan 5" class="w-full h-[200px] object-cover">
            <div class="p-4">
                <h3 class="text-xl font-semibold">Pentas Seni</h3>
                <p class="text-gray-800 mt-2">Pertunjukan seni dari siswa berbakat.</p>
            </div>
        </div>

        <div class="bg-white border border-gray-300 rounded-lg overflow-hidden">
            <img src="./images/Placeholder_img.jpg" alt="Kegiatan 6" class="w-full h-[200px] object-cover">
            <div class="p-4">
                <h3 class="text-xl font-semibold">Lomba Robotika</h3>
                <p class="text-gray-800 mt-2">Tim robotika sekolah mengikuti kompetisi.</p>
            </div>
        </div>
    </section>

    <?php include_once "components/footer.php"; ?>

    <script src="./js/script.js"></script>
</body>

</html>