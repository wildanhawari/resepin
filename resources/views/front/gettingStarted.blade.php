<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resepin | Getting Started</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white flex items-center justify-center h-screen">
  <div class="w-full max-w-sm px-6 text-center">
    <!-- Decorative Images -->
    <div class="relative h-48">
      <div class="absolute w-24 h-24 rounded-full overflow-hidden border-4 border-white shadow-lg top-2 left-4">
        <img src="{{ asset('assets/kategori ayam/Chicken Katsu.jpg') }}" alt="Food 1" class="w-full h-full object-cover">
      </div>
      <div class="absolute w-16 h-16 rounded-full overflow-hidden border-4 border-white shadow-lg top-16 right-8">
        <img src="{{ asset('assets/kategori barat/MAc and cheese.jpg') }}" alt="Food 2" class="w-full h-full object-cover">
      </div>
      <div class="absolute w-32 h-32 rounded-full overflow-hidden border-4 border-white shadow-lg top-20 left-1/2 transform -translate-x-1/2">
        <img src="{{ asset('assets/Kategori Korea/Tteokbokki.jpg') }}" alt="Food 3" class="w-full h-full object-cover">
      </div>
      <div class="absolute w-12 h-12 rounded-full overflow-hidden border-4 border-white shadow-lg bottom-2 left-12">
        <img src="{{ asset('assets/kategori ayam/ayam bakar.jpg') }}" alt="Food 4" class="w-full h-full object-cover">
      </div>
      <div class="absolute w-20 h-20 rounded-full overflow-hidden border-4 border-white shadow-lg bottom-4 right-16">
        <img src="{{ asset('assets/Kategori jepang/sushi.jpg') }}" alt="Food 5" class="w-full h-full object-cover">
      </div>
    </div>

    <!-- Text Content -->
    <div class="mt-12">
      <h1 class="text-xl font-bold text-gray-900">Tunjukkan menu terbaikmu dengan RESEPIN</h1>
      <p class="text-sm text-gray-600 mt-2">
        Nikmati kelezatan cita rasa yang mendunia dengan kreasi menu yang menggugah selera!
      </p>
    </div>

    <!-- Buttons -->
    <div class="mt-8 space-y-4">
        <!-- Link Daftar -->
        <a
          href="/register"
          class="block w-full py-3 text-center bg-white text-green-500 border border-green-500 rounded-lg font-medium hover:bg-green-50 transition">
          Daftar
        </a>

        <!-- Link Masuk -->
        <a
          href="/login"
          class="block w-full py-3 text-center bg-green-500 text-white rounded-lg font-medium hover:bg-green-600 transition">
          Masuk
        </a>
      </div>

  </div>
</body>
</html>
