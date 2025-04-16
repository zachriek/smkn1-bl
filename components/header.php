<!-- Header -->
<header class="bg-gray-100 h-[80px] flex items-center fixed top-0 left-0 w-full shadow-md z-50">
  <div class="container mx-auto flex justify-between items-center px-4">
    <div class="flex items-center gap-2">
      <img src="./images/logo_smkn1.png" alt="SMK Negeri 1 Bandar Lampung" class="w-[70px]" />
      <p class="text-xl font-semibold">SMK Negeri 1 Bandar Lampung</p>
    </div>

    <!-- Desktop Menu -->
    <nav class="navbar hidden lg:flex space-x-6">
      <!-- Dropdown 1: Profil -->
      <div class="relative">
        <button class="nav-link font-medium hover:text-green-700">Profil</button>
        <div class="absolute hidden bg-white shadow-lg mt-2 rounded-lg py-2 w-48 z-50">
          <a href="./index.php" class="block px-4 py-2 hover:bg-gray-100">Beranda</a>
          <a href="./profil-sekolah.php" class="block px-4 py-2 hover:bg-gray-100">Profil Sekolah</a>
          <a href="./ppdb.php" class="block px-4 py-2 hover:bg-gray-100">Pemberitahuan PPDB</a>
        </div>
      </div>

      <!-- Dropdown 2: Akademik -->
      <div class="relative">
        <button class="nav-link font-medium hover:text-green-700">Akademik</button>
        <div class="absolute hidden bg-white shadow-lg mt-2 rounded-lg py-2 w-56 z-50">
          <a href="./data-guru.php" class="block px-4 py-2 hover:bg-gray-100">Data Guru</a>
          <a href="./jadwal-siswa.php" class="block px-4 py-2 hover:bg-gray-100">Jadwal Pelajaran Siswa</a>
          <a href="./jadwal-guru.php" class="block px-4 py-2 hover:bg-gray-100">Jadwal Mengajar Guru</a>
          <a href="./struktur-organisasi.php" class="block px-4 py-2 hover:bg-gray-100">Struktur Organisasi</a>
        </div>
      </div>

      <!-- Dropdown 3: Informasi -->
      <div class="relative">
        <button class="nav-link font-medium hover:text-green-700">Informasi</button>
        <div class="absolute hidden bg-white shadow-lg mt-2 rounded-lg py-2 w-56 z-50">
          <a href="./berita.php" class="block px-4 py-2 hover:bg-gray-100">Berita</a>
          <a href="./visi-misi.php" class="block px-4 py-2 hover:bg-gray-100">Visi dan Misi</a>
          <a href="./galeri-foto.php" class="block px-4 py-2 hover:bg-gray-100">Galeri Foto</a>
          <a href="./fasilitas.php" class="block px-4 py-2 hover:bg-gray-100">Fasilitas</a>
          <a href="./ekstrakurikuler.php" class="block px-4 py-2 hover:bg-gray-100">Ekstrakurikuler</a>
          <a href="./prestasi.php" class="block px-4 py-2 hover:bg-gray-100">Prestasi</a>
          <a href="./data-siswa.php" class="block px-4 py-2 hover:bg-gray-100">Data Siswa</a>
        </div>
      </div>
    </nav>

    <!-- Mobile Menu Toggle -->
    <button id="menu-toggle" class="lg:hidden text-gray-700 focus:outline-none">
      <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
      </svg>
    </button>
  </div>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class="hidden lg:hidden absolute top-[80px] left-0 w-full bg-gray-100 shadow-md">
    <ul class="flex flex-col items-start px-6 py-4 space-y-4">
      <li><strong>Profil</strong></li>
      <li><a href="./index.php" class="block">Home</a></li>
      <li><a href="./profil-sekolah.php" class="block">Profil Sekolah</a></li>
      <li><a href="./ppdb.php" class="block">Pemberitahuan PPDB</a></li>

      <li class="mt-4"><strong>Akademik</strong></li>
      <li><a href="./data-guru.php" class="block">Data Guru</a></li>
      <li><a href="./jadwal-siswa.php" class="block">Jadwal Pelajaran Siswa</a></li>
      <li><a href="./jadwal-guru.php" class="block">Jadwal Mengajar Guru</a></li>
      <li><a href="./struktur-organisasi.php" class="block">Struktur Organisasi</a></li>

      <li class="mt-4"><strong>Informasi</strong></li>
      <li><a href="./berita.php" class="block">Berita</a></li>
      <li><a href="./visi-misi.php" class=" block">Visi dan Misi</a></li>
      <li><a href="./galeri-foto.php" class=" block">Gallery Foto</a></li>
      <li><a href="./fasilitas.php" class="block">Fasilitas</a></li>
      <li><a href="./ekstrakurikuler.php" class="block">Ekstrakurikuler</a></li>
      <li><a href="./prestasi.php" class="block">Prestasi</a></li>
      <li><a href="./data-siswa.php" class=" block">Data Siswa</a></li>
    </ul>
  </div>
</header>