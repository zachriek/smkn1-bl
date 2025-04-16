<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
  <link rel="stylesheet" href="./css/style.css" />
  <title>Prestasi</title>
</head>

<body class="bg-gray-50">
  <?php include_once "components/header.php"; ?>

  <!-- Content Section -->
  <section class="container mx-auto py-12">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-20 mt-[80px]">
      <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <img alt="Achievement 1" class="w-full h-[600px] object-cover" height="300" src="images/prestasi_1.jpg" width="400" />
      </div>
      <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <img alt="Achievement 2" class="w-full h-[600px] object-cover" height="300" src="images/prestasi_2.jpg" width="400" />
      </div>
      <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <img alt="Achievement 3" class="w-full h-[600px] object-cover" height="300" src="images/prestasi_3.jpg" width="400" />
      </div>
      <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <img alt="Achievement 4" class="w-full h-[600px] object-cover" height="300" src="images/prestasi_4.jpg" width="400" />
      </div>
      <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <img alt="Achievement 5" class="w-full h-[600px] object-cover" height="300" src="images/prestasi_5.jpg" width="400" />
      </div>

      <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <img alt="Achievement 6" class="w-full h-[600px] object-cover" height="300" src="images/prestasi_6.jpg" width="400" />
      </div>
    </div>
  </section>

  <?php include_once "components/footer.php"; ?>

  	<!-- Script -->
	<script src="./js/script.js"></script>
    
</body>

</html>