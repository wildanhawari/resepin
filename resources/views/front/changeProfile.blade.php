<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ganti Profil</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50">
    @include('sweetalert::alert')
    <section id="content" class="max-w-[640px] w-full mx-auto bg-white min-h-screen flex flex-col gap-8 pb-[120px]">
        <!-- Header -->
        <div class="bg-green-100 p-6 flex items-center justify-between">
            <h1 class="text-xl font-semibold text-green-600">Ganti Profil</h1>
            <a href="{{ route('front.profile') }}" class="text-gray-500 hover:text-gray-700">Kembali</a>
        </div>

        <!-- Form Edit Profile -->
        <div class="p-6">
            <form action="{{ route('user.update') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf
                @method('PUT')

                <!-- Foto Profil -->
                <div class="flex flex-col items-center gap-4">
                    <img id="profilePreview" src="{{ Storage::url(Auth::user()->avatar) }}" alt="Profile"
                        class="w-24 h-24 rounded-full object-cover">
                    <label for="avatar"
                        class="text-sm font-medium text-green-600 cursor-pointer hover:underline">Ganti Foto
                        Profil</label>
                    <input type="file" name="avatar" id="avatar" class="hidden" accept="image/*">
                </div>
                <!-- Nama -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
                    <input type="text" name="name" id="name" value="{{ Auth::user()->name }}"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring-green-500 focus:border-green-500">
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" id="email" value="{{ Auth::user()->email }}"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring-green-500 focus:border-green-500">
                </div>

                <!-- Phone Number -->
                <div>
                    <label for="phone_number" class="block text-sm font-medium text-gray-700">Nomor Telepon</label>
                    <input type="text" name="phone_number" id="phone_number" value="{{ Auth::user()->phone_number }}"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring-green-500 focus:border-green-500">
                </div>


                <!-- Tombol Simpan -->
                <div class="flex justify-end">
                    <button type="submit"
                        class="px-4 py-2 bg-green-500 text-white font-semibold rounded-md hover:bg-green-600">Simpan</button>
                </div>
            </form>
        </div>
    </section>
    <script>
        document.getElementById('avatar').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('profilePreview').src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });
    </script>

</body>

</html>
