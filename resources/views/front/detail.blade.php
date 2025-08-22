<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Resep</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @PwaHead
</head>

<body class="bg-gray-50">
    <section id="content" class="max-w-[640px] w-full mx-auto bg-white min-h-screen flex flex-col pb-[120px]">
        <!-- Header -->
        <div class="relative">
            <img src="{{ Storage::url($food->photo) }}" alt="Nasi Goreng Ayam" class="w-full h-[300px] object-cover">
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
        <div class="p-4">
            <h1 class="text-2xl font-bold">{{ $food->name }}</h1>
            <p class="text-gray-500 text-sm mt-2">{{ $food->time }} Menit</p>
            <p class="text-gray-700 mt-4">{{ $food->desc }}</p>
        </div>

        <!-- Tabs -->
        <div class="flex justify-around border-b">
            <button id="bahan-tab"
                class="flex-1 text-center py-2 font-semibold border-b-2 border-green-500 text-green-500">Bahan</button>
            <button id="alat-tab" class="flex-1 text-center py-2 font-semibold border-b-2 text-gray-500">Alat</button>
        </div>

        <!-- Bahan Section -->
        <div id="bahan-content" class="p-4">
            @forelse ($food->foodIngredients as $foodIngredient)
                <div class="flex items-center justify-between py-2">
                    <div class="flex items-center gap-4">
                        <img src="{{ Storage::url($foodIngredient->ingredient->photo) }}"
                            alt="{{ $foodIngredient->ingredient->name }}" class="w-12 h-12 object-cover rounded">
                        <span class="text-gray-700">{{ $foodIngredient->ingredient->name }}</span>
                    </div>
                    <span class="text-gray-500">{{ $foodIngredient->quantity }}</span>
                </div>
            @empty
                <p>tidak ada data</p>
            @endforelse

        </div>

        <!-- Alat Section -->
        <div id="alat-content" class="p-4 hidden">
            @forelse ($food->foodTools as $foodTool)
                <div class="flex items-center justify-between py-2">
                    <div class="flex items-center gap-4">
                        <img src="{{ Storage::url($foodTool->tool->photo) }}" alt="{{ $foodTool->tool->name }}"
                            class="w-12 h-12 object-cover rounded">
                        <span class="text-gray-700">{{ $foodTool->tool->name }}</span>
                    </div>
                </div>
            @empty
                <p>tidak ada data</p>
            @endforelse

        </div>

        {{-- white space --}}
        <div class="h-20"></div>

        <!-- Button Mulai Masak -->
        <div class="fixed bottom-24 w-full max-w-[640px] px-4">
            <a href="{{ route('food.tutorial', $food->slug) }}"
                class="block w-full py-3 bg-green-500 text-white text-lg font-semibold text-center rounded-lg shadow">Mulai
                Masak</a>
        </div>


        {{-- Menu Navbar --}}
        <div
        class="navigation-bar fixed bottom-0 z-50 max-w-[640px] w-full h-[85px] bg-white rounded-t-[25px] flex items-center justify-evenly py-[45px]">
        <!-- Home Icon -->
        <a href="{{ route('front.home') }}" class="flex flex-col items-center text-gray-400">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2">
                <path d="M3 11.25L12 3l9 8.25V20a1.5 1.5 0 01-1.5 1.5H4.5A1.5 1.5 0 013 20v-8.75z" />
                <path d="M9 21v-6h6v6" />
            </svg>
            <span class="text-xs font-semibold">Home</span>
        </a>

        <!-- Search Icon -->
        <a href="{{ route('front.search') }}" class="flex flex-col items-center text-gray-400">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <circle cx="11" cy="11" r="6" stroke-width="2" />
                <line x1="17" y1="17" x2="21" y2="21" stroke-width="2" />
            </svg>
            <span class="text-xs">Search</span>
        </a>

        <!-- Bookmark Icon -->
        <a href="{{ route('front.bookmark') }}" class="flex flex-col items-center text-gray-400">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M5 3v18l7-7 7 7V3H5z" />
            </svg>
            <span class="text-xs">Bookmark</span>
        </a>

        <!-- Profile Icon -->
        <a href="{{ route('front.profile') }}" class="flex flex-col items-center text-gray-400">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M5.121 17.804A13.937 13.937 0 0112 15c3.314 0 6.314 1.234 8.879 3.804M15 11a3 3 0 11-6 0 3 3 0 016 0zm7 3a9 9 0 10-18 0 9 9 0 0018 0z" />
            </svg>
            <span class="text-xs">Profile</span>
        </a>
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
    @RegisterServiceWorkerScript
</body>

</html>
