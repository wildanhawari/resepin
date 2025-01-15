<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resepin | Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 flex items-center justify-center h-screen">
    <div class="w-full max-w-sm px-6">
        <!-- Heading -->
        <div class="text-center mb-8">
            <h1 class="text-2xl font-bold text-gray-800">Bergabung dengan Resepin</h1>
            <p class="text-gray-500 mt-2 text-sm">
                Simpan dan cari resep favoritmu dalam satu tempat atau bagikan resep favoritmu dengan orang lain.
            </p>
        </div>

        <!-- Error Messages -->
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="py-3 w-full rounded-3xl bg-red-500 text-white mb-2">
                    {{ $error }}
                </div>
            @endforeach
        @endif

        <!-- Form -->
        <form class="space-y-4" method="POST" action="{{ route('user.register') }}" autocomplete="off">
            @csrf

            <!-- Name Input -->
            <div>
                <label for="name" class="sr-only">Nama Lengkap</label>
                <input type="text" id="name" name="name" placeholder="Nama Lengkap" required
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent">
            </div>

            <!-- Email Input -->
            <div>
                <label for="email" class="sr-only">Email</label>
                <input type="email" id="email" name="email" placeholder="Email" required
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent">
            </div>

            <!-- Phone Number Input -->
            <div>
                <label for="phone_number" class="sr-only">Nomor Ponsel</label>
                <input type="text" id="phone_number" name="phone_number" placeholder="Nomor Ponsel" required
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent">
            </div>

            <!-- Password Input -->
            <div class="relative">
                <label for="password" class="sr-only">Masukan Kata Sandi</label>
                <input type="password" id="password" name="password" placeholder="Masukan Kata Sandi" required
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent">
                <button type="button" onclick="togglePassword('password')" class="absolute inset-y-0 right-3 flex items-center text-gray-500 focus:outline-none">
                    <i class="fa-solid fa-eye"></i>
                </button>
            </div>

            <!-- Confirm Password Input -->
            <div class="relative">
                <label for="password_confirmation" class="sr-only">Konfirmasi Kata Sandi</label>
                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Konfirmasi Kata Sandi" required
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent">
                <button type="button" onclick="togglePassword('password_confirmation')" class="absolute inset-y-0 right-3 flex items-center text-gray-500 focus:outline-none">
                    <i class="fa-solid fa-eye"></i>
                </button>
            </div>

            <!-- Submit Button -->
            <button type="submit"
                class="w-full bg-green-500 text-white py-3 rounded-lg font-medium hover:bg-green-600 transition">
                Daftar
            </button>
        </form>

        <!-- Login Link -->
        <p class="mt-4 text-center text-sm text-gray-500">
            Sudah punya akun Resepin? <a href="/login" class="text-green-500 font-medium hover:underline">Masuk</a>
        </p>

        <!-- Footer -->
        <p class="mt-6 text-center text-xs text-gray-400">
            Dengan menggunakan layanan kami, Anda setuju dengan <a href="/terms" class="text-green-500 font-medium hover:underline">Syarat dan Ketentuan</a> serta <a href="/privacy" class="text-green-500 font-medium hover:underline">Kebijakan Privasi</a> kami.
        </p>
    </div>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script>
        function togglePassword(id) {
            const passwordField = document.getElementById(id);
            const type = passwordField.type === "password" ? "text" : "password";
            passwordField.type = type;
        }
    </script>
</body>

</html>

