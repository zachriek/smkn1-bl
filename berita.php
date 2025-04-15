<?php

$daftar_berita = [
	[
		"judul" => "Pelaksanaan UKK AKL",
		"tanggal" => "14 April 2025",
		"deskripsi_singkat" => "📅 Senin, 14 April 2025✍️ Admin SMK Negeri 1 Bandar Lampung Senin, 14 April 2025, SMK Negeri 1 Bandar Lampung memulai pelaksanaan Uji Kompetensi Keahlian (UKK) untuk Program Keahlian Akutansi Keuangan dan Lembaga (AKL) Tahun Pelajaran 2024/2025. UKK merupakan tahapan . . .",
		"gambar" => "https://smkn1bdl.sch.id/wp-content/uploads/2025/04/AKL-4.jpeg"
	],
	[
		"judul" => "Pelaksanaan UKK Busana",
		"tanggal" => "14 April 2025",
		"deskripsi_singkat" => "Pelaksanaan UKK Busana TP. 2024/2025 📅 Senin, 14 April 2025✍️ Admin SMK Negeri 1 Bandar Lampung Senin, 14 April 2025, Program Keahlian Busana SMK Negeri 1 Bandar Lampung resmi memulai pelaksanaan Uji Kompetensi Keahlian (UKK) Tahun Pelajaran 2024/2025. UKK merupakan . . .",
		"gambar" => "https://smkn1bdl.sch.id/wp-content/uploads/2025/04/UKK-Busana-2025-7.jpeg"
	],
	[
		"judul" => "Pelaksanaan UKK Animasi",
		"tanggal" => "14 April 2025",
		"deskripsi_singkat" => "Pelaksanaan UKK Animasi TP. 2024/2025 📅 Senin, 14 April 2025✍️ Admin SMK Negeri 1 Bandar Lampung Senin, 14 April 2025, Program Keahlian Animasi SMK Negeri 1 Bandar Lampung memulai pelaksanaan Uji Kompetensi Keahlian (UKK) Tahun Pelajaran 2024/2025. Kegiatan ini merupakan . . .",
		"gambar" => "https://smkn1bdl.sch.id/wp-content/uploads/2025/04/UKK-ANIMASI-2025-4-scaled.jpeg"
	],
]

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<script src="https://unpkg.com/@tailwindcss/browser@4"></script>
	<link rel="stylesheet" href="./css/style.css" />
	<title>Berita</title>
</head>

<body class="bg-gray-50">
	<?php include_once "components/header.php"; ?>

	<!-- Hero Section -->
	<section class="bg-white text-center py-8 mt-[80px]">
		<h2 class="text-2xl font-bold">Berita</h2>
		<p class="mt-2">Berita/Artikel di SMK Negeri 1 Bandar Lampung</p>
	</section>

	<!-- News Cards -->
	<section class="min-h-screen mt-[50px]">
		<div class="container mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 px-4">
			<?php foreach ($daftar_berita as $berita) : ?>
				<div class="bg-white border border-gray-300 border border-gray-300 rounded-lg p-4">
					<img src="<?= $berita["gambar"]; ?>" class="w-full h-[200px] rounded-md object-cover"></img>
					<h3 class="text-xl font-semibold mt-8"><?= $berita["judul"]; ?></h3>
					<p class="mt-1 text-gray-700"><?= $berita["tanggal"]; ?></p>
					<p class="mt-6 mb-4 text-gray-800">
						<?= $berita["deskripsi_singkat"]; ?>
					</p>
					<a href="detail-berita.php" class="text-green-700 inline-block font-medium mt-4 mb-2 hover:underline">
						Baca Selengkapnya
					</a>
				</div>
			<?php endforeach; ?>
		</div>
	</section>

	<?php include_once "components/footer.php"; ?>

	<!-- Script -->
	<script src="./js/script.js"></script>
</body>

</html>