<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Mengajar Guru - SMKN 1 Bandar Lampung</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50">

    <?php include_once "components/header.php"; ?>

    <!-- Main Content -->
    <main class="container mx-auto my-[100px] px-4 min-h-screen">
        <h1 class="text-2xl font-bold text-center">Jadwal Mengajar Guru</h1>

        <div class="selector my-4 flex justify-center gap-4">
            <label for="guru" class="font-semibold">Guru:</label>
            <select id="guru" class="border p-2 rounded">
                <option value="guru1">Bu Salsa</option>
                <option value="guru2">Bu Sri</option>
                <option value="guru3">Bu Septi</option>
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
        tanpilkanJadwal()
    </script>

=======
    <?php include_once "components/footer.php"; ?>
    <script src="./js/script.js"></script>
</body>

</html>