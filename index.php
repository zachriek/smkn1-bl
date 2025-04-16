<?php

$daftar_guru = [
	[
		"nama" => "Diah Ariasti Rusdi, S.Pd",
		"jabatan" => "Ketua Program Keahlian Akuntansi dan Keuangan Lembaga",
		"gambar" => "https://smkn1bdl.sch.id/wp-content/uploads/2025/03/Diah-Ariasti-Rusdi-150x150.jpg"
	],
	[
		"nama" => "Susi Andriani, S.Pd",
		"jabatan" => "Ketua Program Keahlian Manajemen Perkantoran dan Layanan Bisnis",
		"gambar" => "https://smkn1bdl.sch.id/wp-content/uploads/2024/08/faculty-teacher-1-1-1-300x300.jpg"
	],
	[
		"nama" => "Sumiati, M. Pd",
		"jabatan" => "Ketua Program Keahlian Pemasaran",
		"gambar" => "https://smkn1bdl.sch.id/wp-content/uploads/2025/03/Sumiyati-M.Pd_-150x150.jpg"
	],
	[
		"nama" => "Hana Dika Augustin, S.Pd",
		"jabatan" => "Ketua Program Keahlian Kuliner",
		"gambar" => "https://smkn1bdl.sch.id/wp-content/uploads/2025/03/aea3dc83-13d9-4329-bdc8-5d797357211e-Hana-Augustin-150x150.jpeg"
	],
]

?>

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

	 <!-- Gallery Section -->
	 <section class="container mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 px-4 my-10">
        <div class="bg-white border border-gray-300 rounded-lg overflow-hidden">
            <img src="./images/Placeholder_img.jpg" alt="Kegiatan 1" class="w-full h-[200px] object-cover">
            <div class="p-4">
                <h3 class="text-xl font-semibold">Upacara Bendera</h3>
                <p class="text-gray-800 mt-2">Suasana upacara bendera di sekolah.</p>
            </div>
        </div>

        <div class="bg-white border border-gray-300 rounded-lg overflow-hidden">
            <img src="./images/Placeholder_img.jpg" alt="Kegiatan 2" class="w-full h-[200px] object-cover">
            <div class="p-4">
                <h3 class="text-xl font-semibold">Lomba 17 Agustus</h3>
                <p class="text-gray-800 mt-2">Keseruan lomba peringatan Hari Kemerdekaan.</p>
            </div>
        </div>

        <div class="bg-white border border-gray-300 rounded-lg overflow-hidden">
            <img src="./images/Placeholder_img.jpg" alt="Kegiatan 3" class="w-full h-[200px] object-cover">
            <div class="p-4">
                <h3 class="text-xl font-semibold">Ekstrakurikuler Pramuka</h3>
                <p class="text-gray-800 mt-2">Kegiatan perkemahan bersama anggota Pramuka.</p>
            </div>
        </div>
		</section>
		
		<section class="text-center mt-4">
	<a href="galeri-foto.php" class="inline-block px-6 py-2 bg-green-600 text-white rounded hover:bg-blue-700 transition duration-300">
		Lihat Selengkapnya
	</a>
	</section>

<!-- Hero Section -->
<section class="bg-white text-center py-8 mt-[80px]">
		<h2 class="text-2xl font-bold">Data Guru</h2>
		<p class="mt-2">Data Guru di SMK Negeri 1 Bandar Lampung</p>
	</section>

		<!-- Teacher Cards -->
	<section class="my-[50px]">
		<div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-4 gap-y-12 px-4">
			<?php foreach ($daftar_guru as $guru) : ?>
				<div class="flex flex-col items-center">
					<div class="relative group">
						<img src="<?= $guru['gambar'] ?>" class="bg-gray-300 w-[150px] h-[150px] rounded-full object-cover transition duration-300 group-hover:brightness-50" />
						<div class="absolute inset-0 flex items-center justify-center space-x-4 opacity-0 group-hover:opacity-100 transition duration-300">
							<a href="#" class="text-white text-xl hover:text-pink-400"><i class="fab fa-instagram"></i></a>
							<a href="#" class="text-white text-xl hover:text-blue-500"><i class="fab fa-linkedin"></i></a>
						</div>
					</div>
					<p class="text-center text-xl font-medium mt-4"><?= $guru['nama']; ?></p>
					<p class="text-center mt-2 text-sm text-gray-700"><?= $guru['jabatan']; ?></p>
				</div>
			<?php endforeach; ?>
		</div>
	</section>

	<section class="text-center mt-4">
	<a href="data-guru.php" class="inline-block px-6 py-2 bg-green-600 text-white rounded hover:bg-blue-700 transition duration-300">
		Lihat Selengkapnya
	</a>
	</section>

	 <!-- Hero Section -->
	 <section class="bg-white text-center py-8 mt-[80px]">
        <h2 class="text-2xl font-bold">Ekstrakurikuler</h2>
        <p class="mt-2">Berbagai kegiatan ekstrakurikuler yang tersedia di sekolah</p>
    </section>

    <!-- Ekstrakurikuler Section -->
    <section class="container mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 px-4 my-10">
        <!-- Paskibra -->
        <div class="bg-white border border-gray-300 rounded-lg p-4">
            <img src="./images/Placeholder_img.jpg" alt="Paskibra" class="w-full h-[200px] object-cover">
            <h3 class="text-xl font-semibold mt-8">Paskibra</h3>
            <p class="mt-2 text-gray-800">Ekstrakurikuler untuk melatih kedisiplinan dan kepemimpinan melalui baris-berbaris.</p>
        </div>

        <!-- Pramuka -->
        <div class="bg-white border border-gray-300 rounded-lg p-4">
            <img src="./images/Placeholder_img.jpg" alt="Pramuka" class="w-full h-[200px] object-cover">
            <h3 class="text-xl font-semibold mt-8">Pramuka</h3>
            <p class="mt-2 text-gray-800">Kegiatan yang membentuk karakter, kerja sama, dan keterampilan bertahan hidup.</p>
        </div>

        <!-- PMR -->
        <div class="bg-white border border-gray-300 rounded-lg p-4">
            <img src="./images/Placeholder_img.jpg" alt="PMR" class="w-full h-[200px] object-cover">
            <h3 class="text-xl font-semibold mt-8">PMR</h3>
            <p class="mt-2 text-gray-800">Palang Merah Remaja sebagai wadah pembelajaran kesehatan dan kepedulian sosial.</p>
        </div>
		</section>

		<section class="text-center mt-4">
	<a href="ekstrakurikuler.php" class="inline-block px-6 py-2 bg-green-600 text-white rounded hover:bg-blue-700 transition duration-300">
		Lihat Selengkapnya
	</a>
	</section>

	<?php include_once "components/map.php" ?>

	<?php include_once "components/footer.php" ?>

	<!-- Script -->
	<script src="./js/script.js"></script>
</body>

</html>