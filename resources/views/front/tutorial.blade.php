<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resepin | Cara Membuat</title>
  <script src="https://cdn.tailwindcss.com"></script>
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

    <!-- Content -->
    <div class="px-6">
      <h1 class="text-2xl font-bold">Nasi Goreng Ayam</h1>
      <p class="text-gray-500 text-sm flex items-center gap-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 4h10m-9 4h10m-9 4h10m-9 4h10m-9 4h10" />
        </svg>
        15 Menit
      </p>

      <h2 class="mt-6 text-lg font-semibold">Cara Membuat</h2>
      <div class="mt-4 flex flex-col gap-4">
        <!-- Step 1 -->
        <div class="flex gap-4">
          <div class="flex-shrink-0 w-8 h-8 bg-green-500 text-white rounded-full flex items-center justify-center font-bold">1</div>
          <p class="flex-1">Panaskan sedikit minyak di wajan, lalu tumis bawang putih dan bawang merah hingga harum.</p>
        </div>

        <!-- Step 2 -->
        <div class="flex gap-4">
          <div class="flex-shrink-0 w-8 h-8 bg-green-500 text-white rounded-full flex items-center justify-center font-bold">2</div>
          <p class="flex-1">Masukkan potongan ayam, masak hingga matang dan berubah warna.</p>
        </div>

        <!-- Step 3 -->
        <div class="flex gap-4">
          <div class="flex-shrink-0 w-8 h-8 bg-green-500 text-white rounded-full flex items-center justify-center font-bold">3</div>
          <p class="flex-1">Geser ayam ke sisi wajan, lalu tuang telur, orak-arik hingga setengah matang.</p>
        </div>

        <!-- Step 4 -->
        <div class="flex gap-4">
          <div class="flex-shrink-0 w-8 h-8 bg-green-500 text-white rounded-full flex items-center justify-center font-bold">4</div>
          <p class="flex-1">Tambahkan nasi putih dingin, kecap manis, saus tiram, garam, lada, dan kaldu bubuk. Aduk rata hingga bumbu meresap.</p>
        </div>

        <!-- Step 5 -->
        <div class="flex gap-4">
          <div class="flex-shrink-0 w-8 h-8 bg-green-500 text-white rounded-full flex items-center justify-center font-bold">5</div>
          <p class="flex-1">Terakhir, masukkan irisan daun bawang dan aduk sebentar hingga tercampur sempurna.</p>
        </div>

        <!-- Step 6 -->
        <div class="flex gap-4">
          <div class="flex-shrink-0 w-8 h-8 bg-green-500 text-white rounded-full flex items-center justify-center font-bold">6</div>
          <p class="flex-1">Sajikan panas-panas dengan tambahan kerupuk dan irisan mentimun jika suka.</p>
        </div>
      </div>

      <!-- Buttons -->
      <div class="mt-6 flex flex-col gap-4">
        <button class="w-full bg-green-500 text-white py-3 rounded-lg font-semibold">Tutorial Memasak</button>
        <button class="w-full border border-green-500 text-green-500 py-3 rounded-lg font-semibold">Selesai Memasak</button>
      </div>
    </div>
  </section>
</body>
</html>
