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