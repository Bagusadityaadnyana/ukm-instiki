<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Unit Kegiatan Mahasiswa - INSTIKI</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
  <!-- Header -->
  <?php if ($role === 'admin'): ?>
        <a href="dashboard.php"><button>Go to Dashboard</button></a>
  <?php endif; ?>
  <header class="bg-white shadow">
    <div class="container mx-auto py-4 flex justify-between items-center">
      <div class="flex items-center ml-5">
        <img src="img/logo-vertikal-instiki.png" alt="Logo" class="h-10">
        <h1 class="text-xl font-semibold ml-4">INSPIRA</h1>
      </div>
      <input type="text" placeholder="Cari UKM..." class="border border-gray-300 rounded px-4 py-2 mr-5">
    </div>
  </header>

  <!-- Carousel -->
  <div class="w-full mt-4 mb-4">
    <div class="relative" style="width: 1440px; height: 550px; margin: 0 auto;">
      <div id="item1" class="w-full h-full">
        <img src="img/instiki.jpeg" class="w-full h-full object-cover blur-sm" style="width: 1440px; height: 550px;" />
        <div class="absolute inset-0 flex items-center justify-center">
          <h2 class="text-white text-4xl font-bold text-center">INSPIRA <br>(Instiki Prestasi dan Kreativitas)</h2>
        </div>
      </div>
    </div>
  </div>
  <!-- Main Content -->
  <main class="container mx-auto mt-10 ml-5">
    <!-- Title Section -->
    <section class="text-left mx-10 text-center">
      <h2 class="text-3xl font-bold">INSPIRA</h2>
      <h1 class="text-center mx-20">INSPIRA (Instiki Prestasi dan Kreativitas) adalah wadah aktivitas kemahasiswaan luar kelas, baik di lingkungan kegiatan ko-kurikuler maupun ekstra-kurikuler. INSPIRA hadir untuk menunjang minat dan bakat mahasiswa serta mengembangkan soft skills.</h1>
    </section>

    <!-- UKM Section -->
   <!-- UKM Section -->
   <section class="mt-10">
    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-6">
        <!-- UKM Card -->
        <div class="bg-white shadow rounded-lg p-4 text-center mx-2 my-4">
            <img src="img/tari.jpg" alt="Developer" class="h-24 mx-auto">
            <h3 class="mt-4 font-semibold">Tari</h3>
            <!-- Login button -->
            <a href="ukm-instiki/index.html" class="mt-2 inline-block bg-red-500 text-white px-4 py-2 rounded">Login</a>
        </div>
        <div class="bg-white shadow rounded-lg p-4 text-center mx-2 my-4">
            <img src="img/tari.jpg" alt="Developer" class="h-24 mx-auto">
            <h3 class="mt-4 font-semibold">Tari</h3>
            <!-- Login button -->
            <a href="ukm-instiki/index.html" class="mt-2 inline-block bg-red-500 text-white px-4 py-2 rounded">Login</a>
        </div>
        <div class="bg-white shadow rounded-lg p-4 text-center mx-2 my-4">
            <img src="img/tari.jpg" alt="Developer" class="h-24 mx-auto">
            <h3 class="mt-4 font-semibold">Tari</h3>
            <!-- Login button -->
            <a href="ukm-instiki/index.html" class="mt-2 inline-block bg-red-500 text-white px-4 py-2 rounded">Login</a>
        </div>
        <div class="bg-white shadow rounded-lg p-4 text-center mx-2 my-4">
            <img src="img/tari.jpg" alt="Developer" class="h-24 mx-auto">
            <h3 class="mt-4 font-semibold">Tari</h3>
            <!-- Login button -->
            <a href="ukm-instiki/index.html" class="mt-2 inline-block bg-red-500 text-white px-4 py-2 rounded">Login</a>
        </div>
        <!-- Repeat similar blocks for other UKM cards -->
    </div>
</section>

<!-- Popup HTML -->
<div class="fixed top-0 left-0 w-full h-full flex items-center justify-center bg-gray-800 bg-opacity-50 hidden" id="loginOverlay">
    <div class="bg-white shadow-md rounded-lg p-8 max-w-md w-full">
        <h2 class="text-center text-lg font-semibold mb-4">Login</h2>
        <form class="space-y-4">
            <div>
                <input type="text" placeholder="Username" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600">
            </div>
            <div class="relative">
                <input type="password" placeholder="Password" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600">
                <span class="absolute right-2 top-2 text-gray-400">
                    <!-- Icon for password visibility can be placed here -->
                </span>
            </div>
            <div class="text-center">
                <a href="#" class="text-blue-600 hover:underline">Belum Punya Akun? Klik Disini Untuk Daftar Sekarang!</a>
            </div>
            <div>
                <button type="submit" class="w-full bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-700">Login</button>
            </div>
        </form>
        <button class="absolute top-0 right-0 mr-4 mt-2 text-lg cursor-pointer focus:outline-none" onclick="closePopup()">X</button>
    </div>
</div>
  <!-- Footer -->
  <footer class="bg-black text-white py-6 mt-10">
    <div class="container mx-auto flex justify-between items-center">
      <div class="flex items-center">
        <img src="img/instiki.selem.png" alt="Logo" class="h-10 mr-4">
        <div class="ml-14">
          <p>&copy; Copyright 2024, Kelompok E</p>
          <p class="mt-2">Jalan Tukad Pakerisan No 97 Denpasar, Telp. 0361-123456</p>
        </div>
      </div>
      <div class="flex space-x-4 mr-10">
        <a href="https://facebook.com" class="text-white hover:text-gray-400" target="_blank">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-6 w-6" viewBox="0 0 24 24">
            <path d="M22.675 0h-21.35C.6 0 0 .6 0 1.325v21.351C0 23.4.6 24 1.325 24H12.82v-9.294H9.692v-3.622h3.128V8.413c0-3.1 1.893-4.788 4.658-4.788 1.325 0 2.463.099 2.795.143v3.24H17.75c-1.394 0-1.664.663-1.664 1.635v2.144h3.327l-.435 3.622h-2.892V24h5.662c.725 0 1.325-.6 1.325-1.324V1.325C24 .6 23.4 0 22.675 0z"/>
          </svg>
        </a>
        <a href="https://twitter.com" class="text-white hover:text-gray-400" target="_blank">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-6 w-6" viewBox="0 0 24 24">
            <path d="M23.954 4.569c-.885.389-1.83.654-2.825.775 1.014-.608 1.794-1.57 2.163-2.723-.951.564-2.005.974-3.127 1.196-.897-.957-2.178-1.555-3.594-1.555-2.717 0-4.92 2.203-4.92 4.917 0 .386.044.762.127 1.124C7.691 8.095 4.066 6.13 1.64 3.161c-.423.724-.666 1.562-.666 2.475 0 1.71.87 3.213 2.188 4.096-.807-.026-1.566-.248-2.23-.616v.061c0 2.385 1.693 4.374 3.946 4.827-.413.112-.849.171-1.296.171-.316 0-.624-.03-.927-.086.631 1.953 2.445 3.376 4.6 3.417-1.68 1.319-3.809 2.105-6.102 2.105-.396 0-.788-.023-1.176-.068 2.179 1.396 4.768 2.209 7.557 2.209 9.054 0 14.002-7.496 14.002-13.986 0-.213-.005-.425-.015-.637.962-.695 1.8-1.562 2.46-2.549z"/>
          </svg>
        </a>
        <a href="https://instagram.com" class="text-white hover:text-gray-400" target="_blank">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-6 w-6" viewBox="0 0 24 24">
            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 1.366.062 2.633.337 3.608 1.311.975.975 1.25 2.242 1.311 3.608.059 1.265.071 1.646.071 4.848s-.012 3.584-.071 4.85c-.062 1.366-.337 2.633-1.311 3.608-.975.975-2.242 1.25-3.608 1.311-1.265.059-1.646.071-4.85.071s-3.584-.012-4.85-.071c-1.366-.062-2.633-.337-3.608-1.311-.975-.975-1.25-2.242-1.311-3.608-.059-1.265-.071-1.646-.071-4.85s.012-3.584.071-4.85c.062-1.366.337-2.633 1.311-3.608.975-.975 2.242-1.25 3.608-1.311C8.416 2.175 8.796 2.163 12 2.163M12 0C8.741 0 8.332.013 7.052.072c-1.358.062-2.887.334-4.095 1.542C1.747 3.322 1.475 4.85 1.413 6.21.969 8.505.969 15.495 1.413 17.79c.062 1.36.334 2.887 1.542 4.095 1.208 1.208 2.737 1.48 4.095 1.542C8.332 23.987 8.741 24 12 24s3.668-.013 4.948-.072c1.358-.062 2.887-.334 4.095-1.542 1.208-1.208 1.48-2.737 1.542-4.095.444-2.295.444-9.285 0-11.58-.062-1.36-.334-2.887-1.542-4.095-1.208-1.208-2.737-1.48-4.095-1.542C15.668.013 15.259 0 12 0z"/>
            <path d="M12 5.838A6.162 6.162 0 1 0 12 18.163 6.162 6.162 0 1 0 12 5.838zm0 10.162a4 4 0 1 1 0-8 4 4 0 1 1 0 8zM18.406 4.594a1.44 1.44 0 1 0 0 2.88 1.44 1.44 0 1 0 0-2.88z"/>
          </svg>
        </a>
      </div>
    </div>
  </footer>
  <!-- Scripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
</body>
</html>
