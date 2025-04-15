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
	[
		"nama" => "Miftahul Janah, S.Pd",
		"jabatan" => "Ketua Program Keahlian Busana",
		"gambar" => "https://smkn1bdl.sch.id/wp-content/uploads/2025/03/IMG_20240903_070001_785-Miftahul-Janah-150x150.jpg"
	],
	[
		"nama" => "Yuyun Astria, S.ST",
		"jabatan" => "Ketua Program Keahlian Animasi",
		"gambar" => "https://smkn1bdl.sch.id/wp-content/uploads/2025/03/Yuyun-As-150x150.jpeg"
	],
	[
		"nama" => "Salahudin El Ayubi, S. Kom",
		"jabatan" => "Ketua Program Design Komunikasi Visual",
		"gambar" => "https://smkn1bdl.sch.id/wp-content/uploads/2025/03/Pas-Foto-3x4-pak-el-Salahudin-El-Ayubi-e1742442347834-150x150.jpg"
	],
	[
		"nama" => "Yus Susanti, M.Kom",
		"jabatan" => "Ketua Program Keahlian Teknik Jaringan Komputer dan Telekomunikasi",
		"gambar" => "https://smkn1bdl.sch.id/wp-content/uploads/2025/03/Yus-Susanti-150x150.jpeg"
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
	<title>Data Guru</title>
</head>

<body class="bg-gray-50">
	<?php include_once "components/header.php"; ?>

	<!-- Hero Section -->
	<section class="bg-white text-center py-8 mt-[80px]">
		<h2 class="text-2xl font-bold">Data Guru</h2>
		<p class="mt-2">Data Guru di SMK Negeri 1 Bandar Lampung</p>
	</section>

	<!-- Teacher Cards -->
	<section class="min-h-screen my-[50px]">
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

	<?php include_once "components/footer.php"; ?>

	<!-- Script -->
	<script src="./js/script.js"></script>
</body>

</html>