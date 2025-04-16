<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="./css/style.css" />
    <title>Ekstrakurikuler</title>
</head>

<body class="bg-gray-50">
    <?php include_once "components/header.php"; ?>

    <!-- Hero Section -->
    <section class="bg-white text-center py-8 mt-[80px]">
        <h2 class="text-2xl font-bold">Ekstrakurikuler</h2>
        <p class="mt-2">Berbagai kegiatan ekstrakurikuler yang tersedia di sekolah</p>
    </section>

    <!-- Ekstrakurikuler Section -->
    <section class="container mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 px-4 my-10">
        <!-- Paskibra -->
        <div class="bg-white border border-gray-300 rounded-lg p-4">
            <img src="./images/ekstra_1.jpg" alt="Paskibra" class="w-full h-[200px] object-cover">
            <h3 class="text-xl font-semibold mt-8">Paskibra</h3>
            <p class="mt-2 text-gray-800">Ekstrakurikuler untuk melatih kedisiplinan dan kepemimpinan melalui baris-berbaris.</p>
        </div>

        <!-- Pramuka -->
        <div class="bg-white border border-gray-300 rounded-lg p-4">
            <img src="./images/ekstra_2.jpg" alt="Pramuka" class="w-full h-[200px] object-cover">
            <h3 class="text-xl font-semibold mt-8">Pramuka</h3>
            <p class="mt-2 text-gray-800">Kegiatan yang membentuk karakter, kerja sama, dan keterampilan bertahan hidup.</p>
        </div>

        <!-- PMR -->
        <div class="bg-white border border-gray-300 rounded-lg p-4">
            <img src="./images/ekstra_3.jpg" alt="PMR" class="w-full h-[200px] object-cover">
            <h3 class="text-xl font-semibold mt-8">PMR</h3>
            <p class="mt-2 text-gray-800">Palang Merah Remaja sebagai wadah pembelajaran kesehatan dan kepedulian sosial.</p>
        </div>
        
        <!-- Robotika -->
        <div class="bg-white border border-gray-300 rounded-lg p-4">
            <img src="./images/ekstra_4.jpg" alt="Robotika" class="w-full h-[200px] object-cover">
            <h3 class="text-xl font-semibold mt-8">Rohani Islam</h3>
            <p class="mt-2 text-gray-800">Ekstrakurikuler Rohani Islam sebagai wadah pembinaan keimanan dan karakter religius siswa melalui kajian dan kegiatan keagamaan.</p>
        </div>

        <!-- Futsal -->
        <div class="bg-white border border-gray-300 rounded-lg p-4">
            <img src="./images/ekstra_5.jpg" alt="Futsal" class="w-full h-[200px] object-cover">
            <h3 class="text-xl font-semibold mt-8">Futsal</h3>
            <p class="mt-2 text-gray-800">Tim futsal sekolah untuk mengasah keterampilan sepak bola dalam format kecil.</p>
        </div>

        <!-- Tari Tradisional -->
        <div class="bg-white border border-gray-300 rounded-lg p-4">
            <img src="./images/ekstra_6.jpg" alt="Tari" class="w-full h-[200px] object-cover">
            <h3 class="text-xl font-semibold mt-8">Voli</h3>
            <p class="mt-2 text-gray-800">Ekstrakurikuler olahraga bola voli yang melatih kekompakan, strategi tim, dan ketahanan fisik siswa.</p>
        </div>

        <!-- Musik Band -->
        <div class="bg-white border border-gray-300 rounded-lg p-4">
            <img src="./images/ekstra_7.jpg" alt="Musik" class="w-full h-[200px] object-cover">
            <h3 class="text-xl font-semibold mt-8">Bulu Tangkis</h3>
            <p class="mt-2 text-gray-800">Kegiatan olahraga bulu tangkis untuk mengembangkan kecepatan, ketangkasan, dan sportivitas.</p>
        </div>

    </section>

    <?php include_once "components/footer.php"; ?>

    <script src="./js/script.js"></script>
</body>

</html>