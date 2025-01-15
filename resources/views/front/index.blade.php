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
        <!-- Header -->
        <div class="p-4 flex items-center justify-between">
            <div class="flex items-center">
                <img src="{{ Storage::url(Auth::user()->avatar) }}" alt="Profile"
                    class="w-20 h-20 rounded-full object-cover">
                <div class="ml-3">
                    <h1 class="text-lg font-semibold">Hi, {{ Auth::user()->name }}</h1>
                    <p class="text-gray-500">Mari Memasak!</p>
                </div>
            </div>
            {{-- <button class="text-red-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6 6 0 00-9.33-4.906M9 17h.01" />
                </svg>
            </button> --}}
        </div>

        <!-- Banner -->
        <div class="px-4 mb-5">
            <div class="relative">
                <img src="{{ asset('assets/Banner.png') }}" alt="Banner Image" class="w-full rounded-lg h-30 object-cover">
            </div>
        </div>



        <!-- Search Bar -->
        <div class="px-4 mb-4">
            <div class="flex items-center bg-gray-200 rounded-lg p-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16l-4-4m0 0l4-4m-4 4h16" />
                </svg>
                <a href="{{ route('front.search') }}" class="ml-2 bg-transparent w-full focus:outline-none text-gray-500">
                    Mau masak apa?
                </a>
            </div>
        </div>


        <!-- Categories -->
        <div class="px-4 mb-4">
            <div class="grid grid-cols-4 gap-4">
                @foreach ($categories as $category)
                    <div class="flex flex-col items-center">
                        <a href="{{ route('front.category', $category->slug) }}"> <!-- Link ke halaman kategori -->
                            <img src="{{ Storage::url($category->icon) }}" alt="{{ $category->name }}"
                                class="w-12 h-12 rounded-full object-cover">
                        </a>
                        <p class="text-sm mt-2">{{ $category->name }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Resep Andalan -->
        <div class="px-4 mb-4">
            <h3 class="text-lg font-semibold mb-2">Resep Andalan</h3>
            <div class="grid grid-cols-2 gap-4">
                @foreach ($foods->slice(0, 2) as $food)
                    <a href="{{ route('food.detail', $food->slug) }}" class="bg-gray-100 rounded-lg p-4">
                        <!-- Link ke halaman resep -->
                        <img src="{{ Storage::url($food->photo) }}" alt="{{ $food->name }}"
                            class="w-full h-24 object-cover rounded-lg mb-2">
                        <h4 class="font-semibold">{{ $food->name }}</h4>
                        <p class="text-gray-500 text-sm">{{ $food->time }} Menit</p>
                    </a>
                @endforeach
            </div>
        </div>

        <!-- Resep Yang Enak Enak -->
        <div class="px-4 mb-4">
            <h3 class="text-lg font-semibold mb-2">Resep Yang Masih Hangat</h3>
            <div class="space-y-4">
                @foreach ($foods->slice(3, 6) as $food)
                    <a href="{{ route('food.detail', $food->slug) }}"
                        class="bg-gray-100 rounded-lg p-4 flex items-center"> <!-- Link ke halaman resep -->
                        <img src="{{ Storage::url($food->photo) }}" alt="{{ $food->name }}"
                            class="w-20 h-20 object-cover rounded-lg mr-4">
                        <div>
                            <h4 class="font-semibold">{{ $food->name }}</h4>
                            <p class="text-gray-500 text-sm">{{ $food->time }} Menit</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>



        {{-- Menu Navbar --}}
        <div
            class="navigation-bar fixed bottom-0 z-50 max-w-[640px] w-full h-[85px] bg-white rounded-t-[25px] flex items-center justify-evenly py-[45px]">
            <!-- Home Icon -->
            <a href="{{ route('front.home') }}" class="flex flex-col items-center text-green-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M3 11.25L12 3l9 8.25V20a1.5 1.5 0 01-1.5 1.5H4.5A1.5 1.5 0 013 20v-8.75z" />
                    <path d="M9 21v-6h6v6" />
                </svg>
                <span class="text-xs">Home</span>
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
