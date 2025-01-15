<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resepin | Cara Membuat</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50">
    @include('sweetalert::alert')
    <section id="content" class="max-w-[640px] w-full mx-auto bg-white min-h-screen flex flex-col gap-8 pb-[120px]">
        <!-- Header -->
        <div class="relative">
            <img src="{{ Storage::url($food->photo) }}" alt="{{ $food->name }}" class="w-full h-[300px] object-cover">
            <div class="absolute top-4 left-4">
                <a href="{{ route('front.home') }}"
                    class="p-2 bg-white rounded-full shadow inline-flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </a>

            </div>
            <div class="absolute top-4 right-4">
                <form action="{{ route('bookmark.toggle', $food->slug) }}" method="POST">
                    @csrf
                    <button type="submit" class="p-2 bg-white rounded-full shadow">
                        @if (auth()->user()->bookmarks->contains($food))
                            <!-- Bookmark Active Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-500" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 3v18l7-7 7 7V3H5z" />
                            </svg>
                        @else
                            <!-- Bookmark Inactive Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 3v18l7-7 7 7V3H5z" />
                            </svg>
                        @endif
                    </button>
                </form>
            </div>
        </div>

        <!-- Content -->
        <div class="px-6">
            <h1 class="text-2xl font-bold">{{ $food->name }}</h1>
            <p class="text-gray-500 text-sm flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 7V3m8 4V3m-9 4h10m-9 4h10m-9 4h10m-9 4h10m-9 4h10" />
                </svg>
                {{ $food->time }} Menit
            </p>

            {{-- Steps --}}
            <h2 class="mt-6 text-lg font-semibold">Cara Membuat</h2>
            <div class="mt-4 flex flex-col gap-4">
                @forelse ($food->tutorials as $index => $tutorial)
                    @php $index++; @endphp
                    <div class="flex gap-4">
                        <div
                            class="flex-shrink-0 w-8 h-8 bg-green-500 text-white rounded-full flex items-center justify-center font-bold">
                            {{ $index }}</div>
                        <p class="flex-1">{{ $tutorial->name }}</p>
                    </div>
                @empty
                @endforelse
            </div>

            {{-- white space --}}
            <div class="h-20"></div>

            <!-- Buttons-->
            <div class="fixed inset-x-0 bottom-0 shadow-lg py-4 flex justify-center">
                <div class="w-full max-w-[640px] px-4 flex flex-col gap-4">
                    <a href="{{ $food->link }}" id="link" target="_blank" rel="noopener noreferrer"
                        class="w-full bg-green-500 text-white py-3 rounded-lg font-semibold text-center">
                        Tutorial Memasak
                    </a>
                    <a href="{{ route('food.detail', $food->slug) }}"
                        class="w-full border border-green-500 text-green-500 py-3 rounded-lg font-semibold text-center">
                        Selesai Memasak
                    </a>
                </div>
            </div>


            <!-- Popup -->
            <div id="popup" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
                <div class="bg-white rounded-lg shadow-lg w-96 p-6">
                    <!-- Icon dan Pesan -->
                    <div class="flex flex-col items-center text-center">
                        <div
                            class="bg-green-100 text-green-500 rounded-full w-12 h-12 flex items-center justify-center mb-4">
                            <div class="text-green-500 text-4xl mb-4">!</div>
                        </div>
                        <p class="text-gray-800 mb-4">
                            Anda akan dialihkan ke YouTube untuk melihat tutorial lengkap. Pastikan Anda memiliki
                            koneksi internet yang stabil.
                        </p>
                    </div>

                    <!-- Tombol -->
                    <div class="flex justify-center space-x-4">
                        <button id="continueButton"
                            class="bg-green-500 text-white px-4 py-2 rounded-lg w-full hover:bg-green-600">
                            Lanjutkan
                        </button>
                        <button id="cancelButton"
                            class="bg-gray-200 text-gray-800 px-4 py-2 rounded-lg w-full hover:bg-gray-300">
                            Batal
                        </button>
                    </div>
                </div>
            </div>
    </section>

    <script>
        // Dapatkan elemen
        const link = document.getElementById('link');
        const popup = document.getElementById('popup');
        const continueButton = document.getElementById('continueButton');
        const cancelButton = document.getElementById('cancelButton');

        // Tampilkan popup saat link diklik
        link.addEventListener('click', function(event) {
            event.preventDefault(); // Mencegah link langsung diarahkan
            popup.classList.remove('hidden');
        });

        // Aksi tombol "Lanjutkan"
        continueButton.addEventListener('click', function() {
            popup.classList.add('hidden');
            window.open(link.href, '_blank'); // Arahkan ke YouTube
        });

        // Aksi tombol "Batal"
        cancelButton.addEventListener('click', function() {
            popup.classList.add('hidden');
        });
    </script>
</body>

</html>
