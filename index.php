<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<script src="https://unpkg.com/@tailwindcss/browser@4"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
	<link rel="stylesheet" href="./css/style.css" />
	<title>Beranda</title>
</head>

<body class="bg-gray-50">
	<?php include_once "components/header.php"; ?>

	<!-- Hero Section -->
	<section class="bg-white text-center py-8 mt-[80px]">
		<h2 class="text-2xl font-bold">Beranda</h2>
		<p class="mt-2">Selamat Datang di SMK Negeri 1 Bandar Lampung</p>
	</section>

	<section class="min-h-screen mt-[50px]">
		<div class="container mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 px-4"></div>
	</section>

	<?php include_once "components/map.php" ?>

	<?php include_once "components/footer.php" ?>

	<!-- Script -->
	<script src="./js/script.js"></script>
</body>

</html>