<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="./css/style.css" />
    <title>Struktur Organisasi</title>
</head>

<body class="bg-gray-50">
    
    <?php include_once "components/header.php"; ?>

    <!-- Struktur Organisasi -->
    <section class="text-center py-8 mt-[80px]">
        <h2 class="text-2xl font-bold text-green-700">Struktur Organisasi</h2>
        <p class="mt-2 text-gray-600">Struktur Organisasi SMK Negeri 1 Bandar Lampung</p>

        <div class="container mx-auto flex flex-col items-center mt-6 bg-white p-6 rounded-lg shadow-lg w-full max-w-lg">
            <div class="bg-green-700 text-white font-semibold text-lg py-2 px-4 rounded-lg w-full text-center mb-2">Ketua Yayasan</div>
            <div class="bg-green-600 text-white font-semibold text-lg py-2 px-4 rounded-lg w-full text-center mb-2">Kepala Sekolah</div>
            <div class="bg-green-500 text-white font-semibold text-lg py-2 px-4 rounded-lg w-full text-center mb-2">Waka Kurikulum</div>
            <div class="bg-green-400 text-white font-semibold text-lg py-2 px-4 rounded-lg w-full text-center mb-2">Waka Kesiswaan</div>
            <div class="bg-green-300 text-white font-semibold text-lg py-2 px-4 rounded-lg w-full text-center mb-2">Bendahara</div>
            <div class="bg-green-200 text-black font-semibold text-lg py-2 px-4 rounded-lg w-full text-center">Dewan Guru</div>
        </div>
    </section>

    <?php include_once "components/footer.php"; ?>

    <!-- Script -->
    <script src="./js/script.js"></script>
</body>

</html>