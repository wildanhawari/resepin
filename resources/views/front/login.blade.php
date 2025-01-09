<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 flex items-center justify-center h-screen">
  <div class="w-full max-w-sm px-6">
    <!-- Logo Placeholder -->
    <div class="text-center">
      <p class="text-2xl font-bold mb-2">Login</p>
      <p class="text-gray-500 text-sm">Temukan ribuan resep lezat yang siap membuat dapurmu bersinar</p>
    </div>

    <!-- Form -->
    <form class="mt-6 space-y-4">
      <div>
        <label for="phone" class="sr-only">Nomor Ponsel</label>
        <input type="tel" id="phone" placeholder="Nomor Ponsel" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent">
      </div>
      <div class="relative">
        <label for="password" class="sr-only">Kata Sandi</label>
        <input type="password" id="password" placeholder="Kata Sandi" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent">
        <button type="button" class="absolute inset-y-0 right-3 flex items-center text-gray-500 focus:outline-none"></button>
        <i class="fa-solid fa-eye"></i>
      </div>
      <div class="text-right">
        <a href="#" class="text-sm text-green-500 hover:underline">Lupa Kata Sandi?</a>
      </div>
      <button type="submit" class="w-full bg-green-500 text-white py-3 rounded-lg font-medium hover:bg-green-600 transition">Masuk</button>
    </form>

    <!-- Divider -->
    <div class="flex items-center my-4">
      <div class="flex-grow h-px bg-gray-300"></div>
      <span class="px-4 text-gray-500 text-sm">Atau</span>
      <div class="flex-grow h-px bg-gray-300"></div>
    </div>

    <!-- Login with Google -->
    <button class="w-full border border-gray-300 text-gray-600 py-3 rounded-lg font-medium hover:bg-gray-100 transition flex items-center justify-center">
      <span>Masuk dengan Google</span>
    </button>

    <!-- Register -->
    <p class="mt-6 text-center text-sm text-gray-500">
      Belum Punya Akun? <a href="#" class="text-green-500 font-medium hover:underline">Daftar</a>
    </p>
  </div>
</body>
</html>
