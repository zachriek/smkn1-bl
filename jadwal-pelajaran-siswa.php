<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="./css/style.css">
    <title>Jadwal Pelajaran SMKN-1 Bandar Lampung</title>
</head>

<body class="bg-gray-50">
    <?php include_once "components/header.php"; ?>

    <!-- Main Content -->
    <main class="container mx-auto my-[100px] px-4">
        <h1 class="text-2xl font-bold text-center">Jadwal Pelajaran Siswa</h1>
        <div class="selector my-4 flex justify-center gap-4">
            <label for="kelas" class="font-semibold">Kelas:</label>
            <select id="kelas" class="border p-2 rounded">
                <option value="10">Kelas 10 - TKJ (Teknik Jaringan dan Komputer)</option>
                <option value="11">Kelas 11 - TKJ (Teknik Jaringan dan Komputer)</option>
                <option value="12">Kelas 12 - TKJ (Teknik Jaringan dan Komputer)</option>
            </select>
        </div>

        <div id="tabel-jadwal"></div>
    </main>

<<<<<<< HEAD:jadwal-Pelajaran-Siswa.html
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

    <script>
        const dataJadwal = {
            "10": [
                ["07:10 - 08:10", "Upacara", "B. Indo", "Matematika", "Fisika", "B. Inggris"],
                ["08:10 - 09:00", "Matematika", "Kewirausahaan", "TKJ", "PPKN", "Seni Budaya"],
                ["09:00 - 10:00", "IPS", "TKJ", "KKPI", "Penjas", "B. Arab"],
                ["10:00 - 10:30", "Istirahat", "Istirahat", "Istirahat", "Istirahat", "Istirahat"],
                ["10:30 - 12:00", "IPA", "Inggris", "Mat", "IPS", "IPA"],
                ["12:00 - 13:00", "Istirahat", "Istirahat", "Istirahat", "Istirahat", "Istirahat"],
                ["13:00 - 14:30", "ATPH", "Fisika", "IPS", "B. Inggris", "TKJ"],
                ["14:30 - 16:00", "Penjas", "Matematika", "Agama Islam", "ATPH", "KKPI"]
            ],
            "11": [
                ["07:10 - 08:10", "Matematika", "PKWU", "Jaringan Dasar", "B. Indonesia", "Upacara"],
                ["08:10 - 09:00", "B. Inggris", "Simulasi Digital", "TKJ", "Fisika", "IPS"],
                ["09:00 - 10:00", "Agama Islam", "Penjas", "PPKN", "KKPI", "B. Arab"],
                ["10:00 - 10:30", "Istirahat", "Istirahat", "Istirahat", "Istirahat", "Istirahat"],
                ["10:30 - 12:00", "IPS", "TKJ", "Matematika", "Seni Budaya", "B. Inggris"],
                ["12:00 - 13:00", "Istirahat", "Istirahat", "Istirahat", "Istirahat", "Istirahat"],
                ["13:00 - 14:30", "IPA", "Fisika", "PPKN", "IPS", "KKPI"],
                ["14:30 - 16:00", "B. Arab", "Simulasi Digital", "Matematika", "Agama Islam", "TKJ"]
            ],
            "12": [
                ["07:10 - 08:10", "Kewirausahaan", "IPS", "TKJ", "Penjas", "B. Inggris"],
                ["08:10 - 09:00", "Fisika", "IPA", "B. Indo", "Agama Islam", "KKPI"],
                ["09:00 - 10:00", "Jaringan Dasar", "TKJ", "Seni Budaya", "PPKN", "Matematika"],
                ["10:00 - 10:30", "Istirahat", "Istirahat", "Istirahat", "Istirahat", "Istirahat"],
                ["10:30 - 12:00", "IPS", "KKPI", "B. Inggris", "Fisika", "Matematika"],
                ["12:00 - 13:00", "Istirahat", "Istirahat", "Istirahat", "Istirahat", "Istirahat"],
                ["13:00 - 14:30", "PKWU", "TKJ", "IPA", "Penjas", "KKPI"],
                ["14:30 - 16:00", "B. Arab", "Seni Budaya", "Matematika", "Agama Islam", "TKJ"]
            ]
        };

        const tabelContainer = document.getElementById("tabel-jadwal");
        const select = document.getElementById("kelas");

        function renderTable(kelas) {
            let rows = "";
            dataJadwal[kelas].forEach((item) => {
                rows += `<tr>${item.map((cell, i) => `<td class="border border-green-600 p-2 ${i === 0 ? '' : ''}">${cell}</td>`).join('')}</tr>`;
            });

            tabelContainer.innerHTML = `
                <table class="w-full border-collapse border border-green-600 text-center">
                    <thead>
                        <tr class="bg-green-600 text-white">
                            <th class="border border-green-600 p-2">Jam</th>
                            <th class="border border-green-600 p-2">Senin</th>
                            <th class="border border-green-600 p-2">Selasa</th>
                            <th class="border border-green-600 p-2">Rabu</th>
                            <th class="border border-green-600 p-2">Kamis</th>
                            <th class="border border-green-600 p-2">Jumat</th>
                        </tr>
                    </thead>
                    <tbody>
                        ${rows}
                    </tbody>
                </table>
            `;
        }

        select.addEventListener("change", (e) => renderTable(e.target.value));
        renderTable("10");
    </script>
    <?php include_once "components/footer.php"; ?>
    <!-- Script -->
    <script src="./js/script.js"></script>
</body>

</html>