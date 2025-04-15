<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<script src="https://unpkg.com/@tailwindcss/browser@4"></script>
	<link rel="stylesheet" href="./css/style.css" />
	<title>Visi dan Misi</title>
</head>

<body class="bg-gray-50">
	<?php include_once "components/header.php"; ?>

	<!-- Hero Section -->
	<section class="bg-white text-center py-8 mt-[80px]">
		<h2 class="text-2xl font-bold">Visi dan Misi</h2>
		<p class="mt-2">Visi dan Misi di SMK Negeri 1 Bandar Lampung</p>
	</section>

	<!-- News Cards -->
	<section class="min-h-screen mt-[50px]">
		<div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-4 px-4">
			<!-- Repeat this block for each teacher -->
			<div class="bg-white rounded-lg border border-gray-300 p-4 hover:scale-105 hover:border-green-300 transition-all duration-300">
				<h3 class="text-2xl text-center font-semibold rounded-md py-2 mt-4 mb-8 underline underline-offset-10 decoration-6 decoration-green-700">Visi</h3>
				<p class="mt-2 mb-4 text-gray-800">
					SMK Negeri 1 Bandar Lampung memiliki visi untuk menjadi sekolah menengah kejuruan yang unggul dalam menghasilkan lulusan yang kompeten, berkarakter, dan siap menghadapi tantangan dunia
					kerja di tingkat nasional maupun internasional.
				</p>
				<p class="mt-2 mb-4 text-gray-800">
					Visi ini diwujudkan melalui pengembangan sumber daya manusia yang profesional, berdaya saing tinggi, serta mampu beradaptasi dengan perkembangan teknologi dan kebutuhan industri.
				</p>
			</div>

			<div class="bg-white rounded-lg border border-gray-300 p-4 hover:scale-105 hover:border-green-300 transition-all duration-300">
				<h3 class="text-2xl text-center font-semibold rounded-md py-2 mt-4 mb-8 underline underline-offset-10 decoration-6 decoration-green-700">Misi</h3>
				<p class="mt-2 mb-4 text-gray-800">
					Untuk mencapai visi tersebut, SMK Negeri 1 Bandar Lampung menjalankan beberapa misi strategis, yaitu: menyelenggarakan pendidikan berbasis kompetensi sesuai dengan kebutuhan dunia usaha
					dan dunia industri;
				</p>
				<p class="mt-2 mb-4 text-gray-800">
					membentuk peserta didik yang memiliki karakter kuat, disiplin, bertanggung jawab, dan beretika; menyediakan sarana dan prasarana pembelajaran yang relevan dengan perkembangan teknologi.
				</p>
			</div>
		</div>
	</section>

	<?php include_once "components/footer.php"; ?>

	<!-- Script -->
	<script src="./js/script.js"></script>
</body>

</html>