<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="./css/style.css" />
    <title>Struktur Organisasi</title>
</head>

<body class="flex flex-col min-h-screen bg-gray-50">

    <?php include_once "components/header.php"; ?>

    <!-- Struktur Organisasi -->
    <main class="flex-grow">
        <section class="text-center py-12 mt-[80px]">
            <h2 class="text-3xl md:text-4xl font-bold text-green-700">Struktur Organisasi</h2>
            <p class="mt-4 text-lg text-gray-600">Struktur Organisasi SMK Negeri 1 Bandar Lampung</p>

            <div class="container mx-auto flex flex-col items-center mt-8 bg-white p-8 rounded-2xl shadow-2xl w-full max-w-2xl">
                <div class="bg-green-700 text-white font-semibold text-xl py-3 px-6 rounded-lg w-full text-center mb-3">Ketua Yayasan</div>
                <div class="bg-green-600 text-white font-semibold text-xl py-3 px-6 rounded-lg w-full text-center mb-3">Kepala Sekolah</div>
                <div class="bg-green-500 text-white font-semibold text-xl py-3 px-6 rounded-lg w-full text-center mb-3">Waka Kurikulum</div>
                <div class="bg-green-400 text-white font-semibold text-xl py-3 px-6 rounded-lg w-full text-center mb-3">Waka Kesiswaan</div>
                <div class="bg-green-300 text-white font-semibold text-xl py-3 px-6 rounded-lg w-full text-center mb-3">Bendahara</div>
                <div class="bg-green-200 text-black font-semibold text-xl py-3 px-6 rounded-lg w-full text-center">Dewan Guru</div>
            </div>
        </section>
    </main>

    <?php include_once "components/footer.php"; ?>

    <!-- Script -->
    <script src="./js/script.js"></script>
</body>

</html>
