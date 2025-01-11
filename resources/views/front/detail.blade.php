<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Resep</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
  <section id="content" class="max-w-[640px] w-full mx-auto bg-white min-h-screen flex flex-col pb-[120px]">
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

    <!-- Content -->
    <div class="p-4">
      <h1 class="text-2xl font-bold">Nasi Goreng Ayam</h1>
      <p class="text-gray-500 text-sm mt-2">15 Menit</p>
      <p class="text-gray-700 mt-4">Dengan nasi yang digoreng sempurna bersama bumbu tradisional yang kaya rasa, ditambah potongan ayam yang juicy dan gurih, Nasi Goreng Ayam kami adalah sajian yang tak terlupakan! Perpaduan bawang, cabai, kecap, dan rempah-rempah pilihan menciptakan rasa khas yang selalu bikin ketagihan.</p>
    </div>

    <!-- Tabs -->
    <div class="flex justify-around border-b">
      <button id="bahan-tab" class="flex-1 text-center py-2 font-semibold border-b-2 border-green-500 text-green-500">Bahan</button>
      <button id="alat-tab" class="flex-1 text-center py-2 font-semibold border-b-2 border-transparent text-gray-500">Alat</button>
    </div>

    <!-- Bahan Section -->
    <div id="bahan-content" class="p-4">
      <div class="flex items-center justify-between py-2">
        <div class="flex items-center gap-4">
          <img src="https://via.placeholder.com/50" alt="Nasi" class="w-12 h-12 object-cover rounded">
          <span class="text-gray-700">Nasi</span>
        </div>
        <span class="text-gray-500">200 gr</span>
      </div>
      <div class="flex items-center justify-between py-2">
        <div class="flex items-center gap-4">
          <img src="https://via.placeholder.com/50" alt="Bawang Putih" class="w-12 h-12 object-cover rounded">
          <span class="text-gray-700">Bawang Putih</span>
        </div>
        <span class="text-gray-500">2</span>
      </div>
      <!-- Tambahkan bahan lainnya sesuai kebutuhan -->
    </div>

    <!-- Alat Section -->
    <div id="alat-content" class="p-4 hidden">
      <div class="flex items-center justify-between py-2">
        <div class="flex items-center gap-4">
          <img src="https://via.placeholder.com/50" alt="Wajan" class="w-12 h-12 object-cover rounded">
          <span class="text-gray-700">Wajan</span>
        </div>
      </div>
      <div class="flex items-center justify-between py-2">
        <div class="flex items-center gap-4">
          <img src="https://via.placeholder.com/50" alt="Piring" class="w-12 h-12 object-cover rounded">
          <span class="text-gray-700">Piring</span>
        </div>
      </div>
      <!-- Tambahkan alat lainnya sesuai kebutuhan -->
    </div>

    <!-- Button Mulai Masak -->
    <div class="fixed bottom-24 w-full max-w-[640px] px-4">
      <button class="w-full py-3 bg-green-500 text-white text-lg font-semibold rounded-lg shadow">Mulai Masak</button>
    </div>

    <!-- Navbar -->
    <div class="navigation-bar fixed bottom-0 z-50 max-w-[640px] w-full h-[85px] bg-white rounded-t-[25px] flex items-center justify-evenly py-[45px]">
      <!-- Home Icon -->
      <button class="flex flex-col items-center text-green-500">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor">
          <path d="M3 11.25L12 3l9 8.25V20a1.5 1.5 0 01-1.5 1.5H4.5A1.5 1.5 0 013 20v-8.75z" />
          <path d="M9 21v-6h6v6" />
        </svg>
        <span class="text-xs">Home</span>
      </button>

      <!-- Search Icon -->
      <button class="flex flex-col items-center text-gray-400">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <circle cx="11" cy="11" r="6" stroke-width="2" />
          <line x1="17" y1="17" x2="21" y2="21" stroke-width="2" />
        </svg>
        <span class="text-xs">Search</span>
      </button>

      <!-- Bookmark Icon -->
      <button class="flex flex-col items-center text-gray-400">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v18l7-7 7 7V3H5z" />
        </svg>
        <span class="text-xs">Bookmark</span>
      </button>

      <!-- Profile Icon -->
      <button class="flex flex-col items-center text-gray-400">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 15c3.314 0 6.314 1.234 8.879 3.804M15 11a3 3 0 11-6 0 3 3 0 016 0zm7 3a9 9 0 10-18 0 9 9 0 0018 0z" />
        </svg>
        <span class="text-xs">Profile</span>
      </button>
    </div>
  </section>

  <script>
    // Toggle tabs
    document.getElementById('bahan-tab').addEventListener('click', () => {
      document.getElementById('bahan-content').classList.remove('hidden');
      document.getElementById('alat-content').classList.add('hidden');
      document.getElementById('bahan-tab').classList.add('text-green-500', 'border-green-500');
      document.getElementById('alat-tab').classList.remove('text-green-500', 'border-green-500');
    });

    document.getElementById('alat-tab').addEventListener('click', () => {
      document.getElementById('alat-content').classList.remove('hidden');
      document.getElementById('bahan-content').classList.add('hidden');
      document.getElementById('alat-tab').classList.add('text-green-500', 'border-green-500');
      document.getElementById('bahan-tab').classList.remove('text-green-500', 'border-green-500');
    });
  </script>
</body>
</html>
