<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Resepin</title>
  <script>
    // Fungsi untuk redirect setelah 3 detik
    document.addEventListener("DOMContentLoaded", function() {
      setTimeout(function() {
        window.location.href = "/getting-started"; 
      }, 3000); // 3000 ms = 3 detik
    });
  </script>
</head>
<body class="bg-gray-50">
  <section id="content" class="max-w-[640px] w-full mx-auto bg-white min-h-screen flex flex-col justify-center items-center pb-[120px]">
    <!-- Splash Screen Content -->
    <div class="flex flex-col items-center">
      <!-- Logo -->
      <div class="w-100 h-100">
        <img src="{{ asset('assets/logo.png') }}" alt="Logo Resepin" class="w-full h-full object-contain">
      </div>
      <!-- Title -->
      <h1 class="text-2xl font-bold text-gray-800 mt-4">Resepin</h1>
    </div>
  </section>
</body>
</html>
