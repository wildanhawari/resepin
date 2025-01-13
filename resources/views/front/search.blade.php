<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resepin | Beranda</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50">
    <section id="content" class="max-w-[640px] w-full mx-auto bg-white min-h-screen flex flex-col gap-8 pb-[120px]">
        <!-- Search Bar -->
        <div class="p-5 mt-5">
            <div class="flex items-center bg-gray-100 rounded-lg px-3 py-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" class="w-6 h-6 text-gray-400">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 21l-4.35-4.35M17.5 10.5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
                <input type="text" placeholder="Mau masak apa ?"
                    class="flex-1 bg-transparent outline-none px-2 text-gray-700">
                <button>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="w-6 h-6 text-gray-400">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Recipes Grid -->
        <div class="grid grid-cols-2 gap-6 p-5">
            @forelse ($foods as $index => $food)
                @php $index++; @endphp
                <a href="{{ route('food.detail', $food->slug) }}" class="bg-white rounded-lg {{ $index % 2 == 0 ? 'row-span-2' : '' }} overflow-hidden">
                    {{-- <p>{{ $index }}</p> --}}
                    <img src="{{ Storage::url($food->photo) }}" alt="{{ $food->name }}"
                        class="w-full {{ $index % 2 == 0 ? 'h-70' : 'h-48' }} object-cover rounded-2xl">
                    <div class="p-4">
                        <h3 class="text-sm font-semibold">{{ $food->name }}</h3>
                        <p class="text-xs text-gray-500 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" class="w-4 h-4 mr-1">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h6" />
                            </svg>
                            15 Menit
                        </p>
                    </div>
                </a>
            @empty
                <p class="col-span-2 text-center text-gray-500">No recipes available.</p>
            @endforelse
        </div>


        {{-- Menu Navbar --}}
        <div
            class="navigation-bar fixed bottom-0 z-50 max-w-[640px] w-full h-[85px] bg-white rounded-t-[25px] flex items-center justify-evenly py-[45px]">
            <!-- Home Icon -->
            <a href="{{ route('front.home') }}" class="flex flex-col items-center text-gray-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M3 11.25L12 3l9 8.25V20a1.5 1.5 0 01-1.5 1.5H4.5A1.5 1.5 0 013 20v-8.75z" />
                  <path d="M9 21v-6h6v6" />
                </svg>
                <span class="text-xs font-semibold">Home</span>
              </a>

            <!-- Search Icon -->
            <a href="{{ route('front.search') }}" class="flex flex-col items-center text-green-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
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
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v18l7-7 7 7V3H5z" />
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
</body>

</html>
