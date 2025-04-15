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

    <!-- Header -->
    <header class="bg-gray-100 h-[80px] flex items-center fixed top-0 left-0 w-full">
        <div class="container mx-auto flex justify-between items-center px-4">
            <div class="flex items-center gap-2">
                <img src="./images/logo-smkn1.png" alt="SMK Negeri 1 Bandar Lampung" class="w-[70px]" />
                <p class="text-xl font-semibold">SMK Negeri 1 Bandar Lampung</p>
            </div>
            <button id="menu-toggle" class="md:hidden text-gray-700 focus:outline-none cursor-pointer">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
            <nav class="hidden md:flex">
                <ul class="flex space-x-4">
                    <li><a href="index.html" class="nav-link hover:underline hover:text-green-700">Beranda</a></li>
                    <li><a href="data-guru.html" class="nav-link hover:underline hover:text-green-700">Guru</a></li>
                    <li><a href="berita.html" class="nav-link hover:underline hover:text-green-700">Berita</a></li>
                    <li><a href="visi-misi.html" class="nav-link hover:underline hover:text-green-700">Visi Misi</a></li>
                </ul>
            </nav>
        </div>
    </header>
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
       <!-- Footer --><!-- Footer -->
<footer class="bg-green-600 text-white py-8 mt-16">
    <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-10">
        <div>
            <img src="./images/logo-smkn1.png" alt="SMK Negeri 1 Bandar Lampung" class="w-28 mb-4" />
            <h2 class="text-xl font-bold mb-2">SMK NEGERI 1 BANDAR LAMPUNG</h2>
            <p class="text-sm">Jl. P. Morotai No. 33 Kel. Jagabaya III Kec. Wayhalim, Kota Bandar Lampung</p>
            <p class="mt-4 text-gray-300 text-sm">©2025 Hak Cipta <span class="font-bold">SMKN 1 BANDAR LAMPUNG</span>. All Rights Reserved</p>
        </div>

        <div>
            <h3 class="text-lg font-bold mb-4">LINK TERKAIT</h3>
            <ul class="space-y-2 text-gray-300 text-sm">
                <li><a href="#" class="hover:underline">Pengumuman</a></li>
                <li><a href="#" class="hover:underline">Alumni</a></li>
                <li><a href="#" class="hover:underline">CBT</a></li>
                <li><a href="#" class="hover:underline">SPMB</a></li>
                <li><a href="#" class="hover:underline">Kurikulum</a></li>
                <li><a href="#" class="hover:underline">Dewan Guru & Staf</a></li>
                <li><a href="#" class="hover:underline">LMS</a></li>
            </ul>
        </div>

        <div>
            <h3 class="text-lg font-bold mb-4">GET IN TOUCH</h3>
            <ul class="space-y-2 text-gray-300 text-sm">
                <li><a href="#" class="hover:underline">Courses</a></li>
                <li><a href="#" class="hover:underline">Maps & Directions</a></li>
                <li><a href="#" class="hover:underline">Jobs</a></li>
                <li><a href="#" class="hover:underline">Social Media</a></li>
                <li><a href="#" class="hover:underline">Sitemap</a></li>
                <li><a href="#" class="hover:underline">Privacy Statement</a></li>
                <li><a href="#" class="hover:underline">Terms & Conditions</a></li>
            </ul>
        </div>

        <div>
            <h3 class="text-lg font-bold mb-4">NEWSLETTER</h3>
            <div class="flex items-center bg-green-700 rounded-md overflow-hidden mb-4">
                <input type="email" placeholder="Your email here" class="w-full p-2 bg-transparent text-white placeholder-gray-300 focus:outline-none" />
                <button class="p-2 hover:bg-[#3b5a87]">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M4 4l16 8-16 8V4z" />
                    </svg>
                </button>
            </div>
            <h3 class="text-lg font-bold mb-2">CONNECT US</h3>
            <div class="flex space-x-4 text-2xl">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-x-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-pinterest"></i></a>
            </div>
        </div>
    </div>
</footer>
</body>

</html>