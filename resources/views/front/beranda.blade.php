<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda Resep</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 font-sans">
    <div class="max-w-md mx-auto bg-white shadow-lg rounded-lg">
        <!-- Header -->
        <div class="p-4 flex items-center justify-between">
            <div class="flex items-center">
                <img src="https://via.placeholder.com/40" alt="Profile" class="w-10 h-10 rounded-full">
                <div class="ml-3">
                    <h1 class="text-lg font-semibold">Hi, Fenni Agustina</h1>
                    <p class="text-gray-500">Mari Memasak!</p>
                </div>
            </div>
            <button class="text-red-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6 6 0 00-9.33-4.906M9 17h.01" />
                </svg>
            </button>
        </div>

        <!-- Banner -->
        <div class="px-4 my-10">
            <div class="bg-green-500 text-white rounded-lg p-5 relative">
                <h2 class="text-lg font-semibold">Kreasikan Hidangan, <br> Nikmati Setiap Rasa</h2>
                <div class="absolute bottom-2 right-2">
                    <div class="w-10 h-10 rounded-full border-4 border-green-400"></div>
                </div>
            </div>
        </div>


        <!-- Search Bar -->
        <div class="px-4 mb-4">
            <div class="flex items-center bg-gray-200 rounded-lg p-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 16l-4-4m0 0l4-4m-4 4h16" />
                </svg>
                <input type="text" placeholder="Mau masak apa ?"
                    class="ml-2 bg-transparent w-full focus:outline-none">
                <button>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 10l7-7m0 0l7 7m-7-7v18" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Categories -->
        <div class="px-4 mb-4">
            <div class="grid grid-cols-4 gap-4">
                <div class="flex flex-col items-center">
                    <img src="https://via.placeholder.com/50" alt="Ayam" class="w-12 h-12 rounded-full">
                    <p class="text-sm mt-2">Ayam</p>
                </div>
                <div class="flex flex-col items-center">
                    <img src="https://via.placeholder.com/50" alt="Cemilan" class="w-12 h-12 rounded-full">
                    <p class="text-sm mt-2">Cemilan</p>
                </div>
                <div class="flex flex-col items-center">
                    <img src="https://via.placeholder.com/50" alt="Sarapan" class="w-12 h-12 rounded-full">
                    <p class="text-sm mt-2">Sarapan</p>
                </div>
                <div class="flex flex-col items-center">
                    <img src="https://via.placeholder.com/50" alt="Nasi" class="w-12 h-12 rounded-full">
                    <p class="text-sm mt-2">Nasi</p>
                </div>
                <div class="flex flex-col items-center">
                    <img src="https://via.placeholder.com/50" alt="Korea" class="w-12 h-12 rounded-full">
                    <p class="text-sm mt-2">Korea</p>
                </div>
                <div class="flex flex-col items-center">
                    <img src="https://via.placeholder.com/50" alt="Jepang" class="w-12 h-12 rounded-full">
                    <p class="text-sm mt-2">Jepang</p>
                </div>
                <div class="flex flex-col items-center">
                    <img src="https://via.placeholder.com/50" alt="Barat" class="w-12 h-12 rounded-full">
                    <p class="text-sm mt-2">Barat</p>
                </div>
                <div class="flex flex-col items-center">
                    <img src="https://via.placeholder.com/50" alt="China" class="w-12 h-12 rounded-full">
                    <p class="text-sm mt-2">China</p>
                </div>
            </div>
        </div>

        <!-- Resep Andalan -->
        <div class="px-4 mb-4">
            <h3 class="text-lg font-semibold mb-2">Resep Andalan</h3>
            <div class="grid grid-cols-2 gap-4">
                <div class="bg-gray-100 rounded-lg p-4">
                    <img src="https://via.placeholder.com/150" alt="Nasi Goreng Ayam"
                        class="w-full h-24 object-cover rounded-lg mb-2">
                    <h4 class="font-semibold">Nasi Goreng Ayam</h4>
                    <p class="text-gray-500 text-sm">15 Menit</p>
                </div>
                <div class="bg-gray-100 rounded-lg p-4">
                    <img src="https://via.placeholder.com/150" alt="Tteokbokki"
                        class="w-full h-24 object-cover rounded-lg mb-2">
                    <h4 class="font-semibold">Tteokbokki</h4>
                    <p class="text-gray-500 text-sm">30 Menit</p>
                </div>
            </div>
        </div>

        <!-- Resep Yang Enak Enak -->
        <div class="px-4 mb-4">
            <h3 class="text-lg font-semibold mb-2">Resep Yang Enak Enak</h3>
            <div class="space-y-4">
                <div class="bg-gray-100 rounded-lg p-4 flex items-center">
                    <img src="https://via.placeholder.com/80" alt="Ayam Telur Asin"
                        class="w-20 h-20 object-cover rounded-lg mr-4">
                    <div>
                        <h4 class="font-semibold">Ayam Telur Asin</h4>
                        <p class="text-gray-500 text-sm">35 Menit</p>
                    </div>
                </div>
                <div class="bg-gray-100 rounded-lg p-4 flex items-center">
                    <img src="https://via.placeholder.com/80" alt="Ramen Shoyu"
                        class="w-20 h-20 object-cover rounded-lg mr-4">
                    <div>
                        <h4 class="font-semibold">Ramen Shoyu</h4>
                        <p class="text-gray-500 text-sm">40 Menit</p>
                    </div>
                </div>
                <div class="bg-gray-100 rounded-lg p-4 flex items-center">
                    <img src="https://via.placeholder.com/80" alt="Kwetiau Goreng Telur"
                        class="w-20 h-20 object-cover rounded-lg mr-4">
                    <div>
                        <h4 class="font-semibold">Kwetiau Goreng Telur</h4>
                        <p class="text-gray-500 text-sm">15 Menit</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Navigation -->
        <div class="flex justify-around bg-white p-4 border-t">
            <!-- Home Icon -->
            <a href="{{ route('front.beranda') }}" class="flex flex-col items-center text-green-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M3 11.25L12 3l9 8.25V20a1.5 1.5 0 01-1.5 1.5H4.5A1.5 1.5 0 013 20v-8.75z" />
                    <path d="M9 21v-6h6v6" />
                </svg>
                <span class="text-xs">Home</span>
            </a>

            <!-- Search Icon -->
            <a href="{{ route('front.search') }}" class="flex flex-col items-center text-gray-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <circle cx="11" cy="11" r="6" stroke-width="2" />
                    <line x1="17" y1="17" x2="21" y2="21" stroke-width="2" />
                </svg>
                <span class="text-xs">Search</span>
            </a>

            <!-- Bookmark Icon -->
            <a href="{{ route('front.bookmark') }}" class="flex flex-col items-center text-gray-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v18l7-7 7 7V3H5z" />
                </svg>
                <span class="text-xs">Bookmark</span>
            </a>

            <!-- Profile Icon -->
            <a href="{{ route('front.profile') }}" class="flex flex-col items-center text-gray-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5.121 17.804A13.937 13.937 0 0112 15c3.314 0 6.314 1.234 8.879 3.804M15 11a3 3 0 11-6 0 3 3 0 016 0zm7 3a9 9 0 10-18 0 9 9 0 0018 0z" />
                </svg>
                <span class="text-xs">Profile</span>
            </a>
        </div>

    </div>
</body>

</html>
