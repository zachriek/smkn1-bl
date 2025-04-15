<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Mengajar Guru - SMKN 1 Bandar Lampung</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50">
<<<<<<< HEAD:Jadwal-Mengajar-Guru.html

    <!-- Header -->
    <header class="bg-gray-100 h-[80px] flex items-center fixed top-0 left-0 w-full shadow-md z-50">
        <div class="container mx-auto flex justify-between items-center px-4">
            <div class="flex items-center gap-2">
                <img src="./images/logo-smkn1.png" alt="SMK Negeri 1 Bandar Lampung" class="w-[70px]" />
                <p class="text-xl font-semibold">SMK Negeri 1 Bandar Lampung</p>
            </div>
            <nav class="hidden md:flex">
                <ul class="flex space-x-4">
                    <li><a href="index.html" class="hover:underline hover:text-green-700">Beranda</a></li>
                    <li><a href="data-guru.html" class="hover:underline hover:text-green-700">Guru</a></li>
                    <li><a href="berita.html" class="hover:underline hover:text-green-700">Berita</a></li>
                    <li><a href="visi-misi.html" class="hover:underline hover:text-green-700">Visi Misi</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto mt-[120px] px-4 mb-10">
        <h1 class="text-2xl font-bold text-center mb-6">Jadwal Mengajar Guru</h1>

        <div class="flex justify-center items-center gap-4 mb-8">
            <label for="guru" class="font-semibold">Pilih Guru:</label>
            <select id="guru" class="border p-2 rounded shadow-sm" onchange="tampilkanJadwal()">
                <option value="rizal">Bapak Drs. H. Muhammad Rizal, M.Pd.</option>
                <option value="siti">Ibu Dra. Siti Aminah, M.Si.</option>
                <option value="anton">Bapak Ir. Anton Saputra, S.T., M.T.</option>
=======
    <?php include_once "components/header.php"; ?>

    <!-- Main Content -->
    <main class="container mx-auto my-[100px] px-4">
        <h1 class="text-2xl font-bold text-center">Jadwal Mengajar Guru</h1>

        <div class="selector my-4 flex justify-center gap-4">
            <label for="guru" class="font-semibold">Guru:</label>
            <select id="guru" class="border p-2 rounded">
                <option value="guru1">bu salsa</option>
                <option value="guru2">bu sri</option>
                <option value="guru3">bu septi</option>
>>>>>>> 960836ddf6dc6b75bf137f53c19eb7a16e948d32:jadwal-mengajar-guru.php
            </select>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full border-collapse border border-green-600 text-center">
                <thead>
                    <tr class="bg-green-500 text-white">
                        <th class="border border-green-600 p-3">Jam</th>
                        <th class="border border-green-600 p-3">Senin</th>
                        <th class="border border-green-600 p-3">Selasa</th>
                        <th class="border border-green-600 p-3">Rabu</th>
                        <th class="border border-green-600 p-3">Kamis</th>
                        <th class="border border-green-600 p-3">Jumat</th>
                    </tr>
                </thead>
                <tbody id="isi-jadwal">
                    <!-- Jadwal akan ditampilkan di sini -->
                </tbody>
            </table>
        </div>
    </main>

<<<<<<< HEAD:Jadwal-Mengajar-Guru.html
    <!-- Footer -->
    <footer class="bg-green-600 text-white py-10">
        <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-10">
            <div>
                <img src="./images/logo-smkn1.png" alt="SMK Negeri 1 Bandar Lampung" class="w-28 mb-4" />
                <h2 class="text-xl font-bold">SMK NEGERI 1 BANDAR LAMPUNG</h2>
                <p class="mt-4">Jl. P. Morotai No. 33 Kel. Jagabaya III Kec. Wayhalim, Kota Bandar Lampung</p>
                <p class="mt-4 text-gray-300 text-sm">©2025 Hak Cipta <span class="font-bold">SMKN 1 BANDAR LAMPUNG</span>. All Rights Reserved</p>
            </div>
            <div>
                <h3 class="text-lg font-bold mb-4">LINK TERKAIT</h3>
                <ul class="space-y-2 text-gray-300">
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
                <ul class="space-y-2 text-gray-300">
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
                <div class="flex items-center bg-green-700 rounded-md overflow-hidden mb-6">
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
    <!-- JavaScript -->
    <script>
        const jadwalGuru = {
            rizal: [
                ["07:10 - 08:10", "Upacara", "10 TKJ", "11 TKJ", "12 TKJ", "Jadwal Kosong"],
                ["08:10 - 09:00", "Jadwal Kosong", "10 TKJ", "11 TKJ", "Jadwal Kosong", "Jadwal Kosong"],
                ["10:00 - 10:30", "Istirahat", "Istirahat", "Istirahat", "Istirahat", "Istirahat"],
                ["10:30 - 12:00", "12 TKJ", "Jadwal Kosong", "Jadwal Kosong", "Jadwal Kosong", "10 TKJ"],
                ["12:00 - 13:00", "Istirahat", "Istirahat", "Istirahat", "Istirahat", "Istirahat"],
                ["13:00 - 14:00", "Jadwal Kosong", "Jadwal Kosong", "Jadwal Kosong", "11 TKJ", "12 TKJ"],
                ["14:00 - 15:00", "11 TKJ", "10 TKJ", "12 TKJ", "Jadwal Kosong", "Jadwal Kosong"],
                ["15:00 - 16:00", "Jadwal Kosong", "Jadwal Kosong", "Jadwal Kosong", "10 TKJ", "12 TKJ"]
            ],
            siti: [
                ["07:10 - 08:10", "Upacara", "11 AKL", "12 AKL", "Jadwal Kosong", "Jadwal Kosong"],
                ["08:10 - 09:00", "Jadwal Kosong", "11 AKL", "12 AKL", "Jadwal Kosong", "Jadwal Kosong"],
                ["10:00 - 10:30", "Istirahat", "Istirahat", "Istirahat", "Istirahat", "Istirahat"],
                ["10:30 - 12:00", "Jadwal Kosong", "Jadwal Kosong", "10 AKL", "11 AKL", "12 AKL"],
                ["12:00 - 13:00", "Istirahat", "Istirahat", "Istirahat", "Istirahat", "Istirahat"],
                ["13:00 - 14:00", "11 AKL", "12 AKL", "10 AKL", "Jadwal Kosong", "Jadwal Kosong"],
                ["14:00 - 15:00", "12 AKL", "11 AKL", "Jadwal Kosong", "Jadwal Kosong", "10 AKL"],
                ["15:00 - 16:00", "Jadwal Kosong", "Jadwal Kosong", "11 AKL", "12 AKL", "Jadwal Kosong"]
            ],
            anton: [
                ["07:10 - 08:10", "Upacara", "10 RPL", "11 RPL", "12 RPL", "Jadwal Kosong"],
                ["08:10 - 09:00", "Jadwal Kosong", "11 RPL", "12 RPL", "Jadwal Kosong", "10 RPL"],
                ["10:00 - 10:30", "Istirahat", "Istirahat", "Istirahat", "Istirahat", "Istirahat"],
                ["10:30 - 12:00", "12 RPL", "11 RPL", "Jadwal Kosong", "Jadwal Kosong", "10 RPL"],
                ["12:00 - 13:00", "Istirahat", "Istirahat", "Istirahat", "Istirahat", "Istirahat"],
                ["13:00 - 14:00", "Jadwal Kosong", "10 RPL", "Jadwal Kosong", "12 RPL", "11 RPL"],
                ["14:00 - 15:00", "10 RPL", "11 RPL", "12 RPL", "Jadwal Kosong", "Jadwal Kosong"],
                ["15:00 - 16:00", "Jadwal Kosong", "Jadwal Kosong", "Jadwal Kosong", "11 RPL", "12 RPL"]
            ]
        };

        function tampilkanJadwal() {
            const guru = document.getElementById("guru").value;
            const tbody = document.getElementById("isi-jadwal");
            tbody.innerHTML = "";

            jadwalGuru[guru].forEach(row => {
                let tr = "<tr class='hover:bg-green-50'>";
                tr += `<td class='border border-green-600 p-3'>${row[0]}</td>`;
                for (let i = 1; i <= 5; i++) {
                    tr += `<td class='border border-green-600 p-3'>${row[i]}</td>`;
                }
                tr += "</tr>";
                tbody.innerHTML += tr;
            });
        }

        // Load default jadwal saat halaman dibuka
        window.onload = tampilkanJadwal;
    </script>

=======
    <?php include_once "components/footer.php"; ?>
>>>>>>> 960836ddf6dc6b75bf137f53c19eb7a16e948d32:jadwal-mengajar-guru.php
</body>

</html>