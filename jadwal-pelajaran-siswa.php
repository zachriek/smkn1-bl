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
                <option value="10">Kelas 10</option>
                <option value="11">Kelas 11</option>
                <option value="12">Kelas 12</option>
            </select>
        </div>

        <table class="w-full border-collapse border border-gray-300 text-center">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border border-gray-300 p-2">Jam</th>
                    <th class="border border-gray-300 p-2">Senin</th>
                    <th class="border border-gray-300 p-2">Selasa</th>
                    <th class="border border-gray-300 p-2">Rabu</th>
                    <th class="border border-gray-300 p-2">Kamis</th>
                    <th class="border border-gray-300 p-2">Jumat</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border border-gray-300 p-2">07:40 - 08:20</td>
                    <td class="border border-gray-300 p-2">Upacara</td>
                    <td class="border border-gray-300 p-2">B. Indo</td>
                    <td class="border border-gray-300 p-2">Mat</td>
                    <td class="border border-gray-300 p-2">B. Indo</td>
                    <td class="border border-gray-300 p-2">B. Indo</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 p-2">08:20 - 09:00</td>
                    <td class="border border-gray-300 p-2">IPA</td>
                    <td class="border border-gray-300 p-2">inggris</td>
                    <td class="border border-gray-300 p-2">Mat</td>
                    <td class="border border-gray-300 p-2">ips</td>
                    <td class="border border-gray-300 p-2">IPA</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 p-2">09:00 - 10:00</td>
                    <td class="border border-gray-300 p-2">IPA</td>
                    <td class="border border-gray-300 p-2">inggris</td>
                    <td class="border border-gray-300 p-2">Mat</td>
                    <td class="border border-gray-300 p-2">ips</td>
                    <td class="border border-gray-300 p-2">IPA</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 p-2">10:00 - 10:30</td>
                    <td class="border border-gray-300 p-2">Istirahat</td>
                    <td class="border border-gray-300 p-2">Istirahat</td>
                    <td class="border border-gray-300 p-2">Istirahat</td>
                    <td class="border border-gray-300 p-2">Istirahat</td>
                    <td class="border border-gray-300 p-2">Istirahat</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 p-2">10:30 - 12:00</td>
                    <td class="border border-gray-300 p-2">IPA</td>
                    <td class="border border-gray-300 p-2">inggris</td>
                    <td class="border border-gray-300 p-2">Mat</td>
                    <td class="border border-gray-300 p-2">ips</td>
                    <td class="border border-gray-300 p-2">IPA</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 p-2">12:00 - 13:00</td>
                    <td class="border border-gray-300 p-2">Istirahat</td>
                    <td class="border border-gray-300 p-2">Istirahat</td>
                    <td class="border border-gray-300 p-2">Istirahat</td>
                    <td class="border border-gray-300 p-2">Istirahat</td>
                    <td class="border border-gray-300 p-2">Istirahat</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 p-2">13:00 - 1:00</td>
                    <td class="border border-gray-300 p-2">IPA</td>
                    <td class="border border-gray-300 p-2">inggris</td>
                    <td class="border border-gray-300 p-2">Mat</td>
                    <td class="border border-gray-300 p-2">ips</td>
                    <td class="border border-gray-300 p-2">IPA</td>
                </tr>
            </tbody>
        </table>
    </main>

    <?php include_once "components/footer.php"; ?>
</body>

</html>