<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ganti Kata Sandi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @PwaHead
    <script>
        function togglePasswordVisibility(inputId, iconId) {
            const input = document.getElementById(inputId);
            const icon = document.getElementById(iconId);
            if (input.type === "password") {
                input.type = "text";
                icon.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-600"><path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223a9.926 9.926 0 00-.723 1.277c-.407.827-.724 1.752-.724 2.5s.317 1.673.724 2.5a9.926 9.926 0 00.723 1.277M20.02 8.223a9.926 9.926 0 01.723 1.277c.407.827.724 1.752.724 2.5s-.317 1.673-.724 2.5a9.926 9.926 0 01-.723 1.277M15 12a3 3 0 11-6 0 3 3 0 016 0z" /></svg>`;
            } else {
                input.type = "password";
                icon.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-600"><path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223a9.926 9.926 0 00-.723 1.277c-.407.827-.724 1.752-.724 2.5s.317 1.673.724 2.5a9.926 9.926 0 00.723 1.277M20.02 8.223a9.926 9.926 0 01.723 1.277c.407.827.724 1.752.724 2.5s-.317 1.673-.724 2.5a9.926 9.926 0 01-.723 1.277M15 12a3 3 0 11-6 0 3 3 0 016 0zM2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-.317.827-.724 1.752-.724 2.5s.317 1.673.724 2.5c-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" /></svg>`;
            }
        }
    </script>
</head>

<body class="bg-gray-50">
    @include('sweetalert::alert')
    <section id="content" class="max-w-[640px] w-full mx-auto bg-white min-h-screen flex flex-col gap-8 pb-[120px]">
        <!-- Header -->
        <div class="bg-green-100 p-6 flex items-center justify-between">
            <h1 class="text-xl font-semibold text-green-600">Ganti Kata Sandi</h1>
            <a href="{{ route('front.profile') }}" class="text-gray-500 hover:text-gray-700">Kembali</a>
        </div>

        <!-- Form Ganti Kata Sandi -->
        <div class="p-6">
            <form action="{{ route('user.passwordUpdate') }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')

                <!-- Kata Sandi Lama -->
                <div>
                    <label for="current_password" class="block text-sm font-medium text-gray-700">Kata Sandi Lama</label>
                    <div class="relative">
                        <input type="password" name="current_password" id="current_password" required
                            class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring-green-500 focus:border-green-500">
                        <button type="button" onclick="togglePasswordVisibility('current_password', 'icon-current')"
                            class="absolute right-3 top-3">
                            <span id="icon-current">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-600">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223a9.926 9.926 0 00-.723 1.277c-.407.827-.724 1.752-.724 2.5s.317 1.673.724 2.5a9.926 9.926 0 00.723 1.277M20.02 8.223a9.926 9.926 0 01.723 1.277c.407.827.724 1.752.724 2.5s-.317 1.673-.724 2.5a9.926 9.926 0 01-.723 1.277M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </span>
                        </button>
                    </div>
                </div>

                <!-- Kata Sandi Baru -->
                <div>
                    <label for="new_password" class="block text-sm font-medium text-gray-700">Kata Sandi Baru</label>
                    <div class="relative">
                        <input type="password" name="new_password" id="new_password" required
                            class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring-green-500 focus:border-green-500">
                        <button type="button" onclick="togglePasswordVisibility('new_password', 'icon-new')"
                            class="absolute right-3 top-3">
                            <span id="icon-new">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-600">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223a9.926 9.926 0 00-.723 1.277c-.407.827-.724 1.752-.724 2.5s.317 1.673.724 2.5a9.926 9.926 0 00.723 1.277M20.02 8.223a9.926 9.926 0 01.723 1.277c.407.827.724 1.752.724 2.5s-.317 1.673-.724 2.5a9.926 9.926 0 01-.723 1.277M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </span>
                        </button>
                    </div>
                </div>

                <!-- Konfirmasi Kata Sandi Baru -->
                <div>
                    <label for="new_password_confirmation" class="block text-sm font-medium text-gray-700">Konfirmasi Kata Sandi Baru</label>
                    <div class="relative">
                        <input type="password" name="new_password_confirmation" id="new_password_confirmation" required
                            class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring-green-500 focus:border-green-500">
                        <button type="button" onclick="togglePasswordVisibility('new_password_confirmation', 'icon-confirm')"
                            class="absolute right-3 top-3">
                            <span id="icon-confirm">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-600">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223a9.926 9.926 0 00-.723 1.277c-.407.827-.724 1.752-.724 2.5s.317 1.673.724 2.5a9.926 9.926 0 00.723 1.277M20.02 8.223a9.926 9.926 0 01.723 1.277c.407.827.724 1.752.724 2.5s-.317 1.673-.724 2.5a9.926 9.926 0 01-.723 1.277M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </span>
                        </button>
                    </div>
                </div>

                <!-- Tombol Simpan -->
                <div class="flex justify-end">
                    <button type="submit"
                        class="px-4 py-2 bg-green-500 text-white font-semibold rounded-md hover:bg-green-600">Simpan</button>
                </div>
            </form>
        </div>
    </section>
    @RegisterServiceWorkerScript
</body>

</html>
