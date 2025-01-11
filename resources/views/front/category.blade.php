<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Kategori Resep</title>
</head>
<body class="bg-gray-50">
  <section id="content" class="max-w-[640px] w-full mx-auto bg-white min-h-screen flex flex-col gap-8 pb-[120px]">
    <!-- Header -->
    <div class="relative">
        <img src="/mnt/data/image.png" alt="Nasi Goreng Ayam" class="w-full h-[240px] object-cover">
        <div class="absolute top-4 left-4">
          <button class="p-2 bg-white rounded-full shadow">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
          </button>
        </div>
        <div class="absolute top-4 right-4">
          <button class="p-2 bg-white rounded-full shadow">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v18l7-7 7 7V3H5z" />
            </svg>
          </button>
        </div>
      </div>

    <!-- Judul dan Desc -->
    <div class="px-4">
      <h2 class="text-2xl font-bold">Ayam</h2>
      <p class="text-gray-600 mt-2">Temukan resep ayam yang lezat sesuai dengan selera Anda. Olah jadi goreng, bakar, rebus, atau panggang, kami siap pandu Anda menciptakan hidangan spesial untuk keluarga!</p>
    </div>

    <!-- Content Resep -->
    <div class="px-4 mb-4">
      <div class="grid grid-cols-2 gap-4">
        <div class="bg-gray-100 rounded-lg p-4">
          <img src="https://via.placeholder.com/150" alt="Nasi Goreng Ayam"
              class="w-full h-24 object-cover rounded-lg mb-2">
          <h4 class="font-semibold">Nasi Goreng Ayam</h4>
          <p class="text-gray-500 text-sm">15 Menit</p>
        </div>
        <div class="bg-gray-100 rounded-lg p-4">
          <img src="https://via.placeholder.com/150" alt="Tteokbokki"
              class="w-full h-24 object-cover rounded-lg mb-2">
          <h4 class="font-semibold">Tteokbokki</h4>
          <p class="text-gray-500 text-sm">30 Menit</p>
        </div>
        <div class="bg-gray-100 rounded-lg p-4">
          <img src="https://via.placeholder.com/150" alt="Tteokbokki"
              class="w-full h-24 object-cover rounded-lg mb-2">
          <h4 class="font-semibold">Tteokbokki</h4>
          <p class="text-gray-500 text-sm">30 Menit</p>
        </div>
        <div class="bg-gray-100 rounded-lg p-4">
          <img src="https://via.placeholder.com/150" alt="Tteokbokki"
              class="w-full h-24 object-cover rounded-lg mb-2">
          <h4 class="font-semibold">Tteokbokki</h4>
          <p class="text-gray-500 text-sm">30 Menit</p>
        </div>
      </div>
    </div>
  </section>
</body>
</html>
