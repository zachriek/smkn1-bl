<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
  <link rel="stylesheet" href="./css/style.css" />
  <title>Data Siswa</title>
</head>

<body>
  <?php include_once "components/header.php"; ?>

  <!-- Main Content -->
  <main class="container mx-auto my-8">
    <h2 class="text-2xl font-bold text-center mb-4 mt-[110px]">Data Siswa</h2>
    <div class="overflow-x-auto">
      <table class="min-w-full bg-white border border-gray-200">
        <thead>
          <tr class="bg-blue-500 text-white">
            <th class="py-2 px-4 border">No</th>
            <th class="py-2 px-4 border">Nama</th>
            <th class="py-2 px-4 border">NIS</th>
            <th class="py-2 px-4 border">Gender</th>
            <th class="py-2 px-4 border">Kelas</th>
          </tr>
        </thead>
        <tbody>
          <tr class="bg-blue-100">
            <td class="py-2 px-4 border text-center">1</td>
            <td class="py-2 px-4 border">Aldi Pratama</td>
            <td class="py-2 px-4 border text-center">123456001</td>
            <td class="py-2 px-4 border text-center">L</td>
            <td class="py-2 px-4 border text-center">IX A</td>
          </tr>
          <tr class="bg-white">
            <td class="py-2 px-4 border text-center">2</td>
            <td class="py-2 px-4 border">Dinda Ayu</td>
            <td class="py-2 px-4 border text-center">123456002</td>
            <td class="py-2 px-4 border text-center">P</td>
            <td class="py-2 px-4 border text-center">IX A</td>
          </tr>
          <tr class="bg-blue-100">
            <td class="py-2 px-4 border text-center">3</td>
            <td class="py-2 px-4 border">Rizky Hidayat</td>
            <td class="py-2 px-4 border text-center">123456003</td>
            <td class="py-2 px-4 border text-center">L</td>
            <td class="py-2 px-4 border text-center">IX A</td>
          </tr>
          <tr class="bg-white">
            <td class="py-2 px-4 border text-center">4</td>
            <td class="py-2 px-4 border">Salsabila Noor</td>
            <td class="py-2 px-4 border text-center">123456004</td>
            <td class="py-2 px-4 border text-center">P</td>
            <td class="py-2 px-4 border text-center">IX A</td>
          </tr>
          <tr class="bg-blue-100">
            <td class="py-2 px-4 border text-center">5</td>
            <td class="py-2 px-4 border">Fajar Nugroho</td>
            <td class="py-2 px-4 border text-center">123456005</td>
            <td class="py-2 px-4 border text-center">L</td>
            <td class="py-2 px-4 border text-center">IX A</td>
          </tr>
          <tr class="bg-white">
            <td class="py-2 px-4 border text-center">6</td>
            <td class="py-2 px-4 border">Tiara Putri</td>
            <td class="py-2 px-4 border text-center">123456006</td>
            <td class="py-2 px-4 border text-center">P</td>
            <td class="py-2 px-4 border text-center">IX A</td>
          </tr>
          <tr class="bg-blue-100">
            <td class="py-2 px-4 border text-center">7</td>
            <td class="py-2 px-4 border">Raka Febrian</td>
            <td class="py-2 px-4 border text-center">123456007</td>
            <td class="py-2 px-4 border text-center">L</td>
            <td class="py-2 px-4 border text-center">IX A</td>
          </tr>
          <tr class="bg-white">
            <td class="py-2 px-4 border text-center">8</td>
            <td class="py-2 px-4 border">Maya Sari</td>
            <td class="py-2 px-4 border text-center">123456008</td>
            <td class="py-2 px-4 border text-center">P</td>
            <td class="py-2 px-4 border text-center">IX A</td>
          </tr>
          <tr class="bg-blue-100">
            <td class="py-2 px-4 border text-center">9</td>
            <td class="py-2 px-4 border">Gilang Ramadhan</td>
            <td class="py-2 px-4 border text-center">123456009</td>
            <td class="py-2 px-4 border text-center">L</td>
            <td class="py-2 px-4 border text-center">IX A</td>
          </tr>
          <tr class="bg-white">
            <td class="py-2 px-4 border text-center">10</td>
            <td class="py-2 px-4 border">Nadya Azzahra</td>
            <td class="py-2 px-4 border text-center">123456010</td>
            <td class="py-2 px-4 border text-center">P</td>
            <td class="py-2 px-4 border text-center">IX A</td>
          </tr>
        </tbody>
      </table>
    </div>
  </main>

  <?php include_once "components/footer.php"; ?>
  <script src="./js/script.js"></script>
</body>

</html>