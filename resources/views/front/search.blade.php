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
        <div class="p-4">
            <div class="flex items-center bg-gray-100 rounded-lg px-3 py-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <circle cx="11" cy="11" r="6" stroke-width="2" />
                    <line x1="17" y1="17" x2="21" y2="21" stroke-width="2" />
                </svg>
                <input type="text" placeholder="Mau masak apa?" class="ml-2 bg-transparent focus:outline-none w-full text-sm text-gray-700">
                <button>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path d="M19 10h-6M13 7v6" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Recipe Cards -->
        <div class="grid grid-cols-2 gap-4 px-4">
            <!-- Card 1 -->
            <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                <img src="https://via.placeholder.com/150" alt="Nasi Goreng Ayam" class="w-full h-24 object-cover">
                <div class="p-2">
                    <h3 class="text-sm font-medium">Nasi Goreng Ayam</h3>
                    <p class="text-xs text-gray-500 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2a10 10 0 100 20 10 10 0 000-20zM12 18a6 6 0 110-12 6 6 0 010 12z" />
                        </svg>
                        15 Menit
                    </p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                <img src="https://via.placeholder.com/150" alt="Gyoza" class="w-full h-24 object-cover">
                <div class="p-2">
                    <h3 class="text-sm font-medium">Gyoza</h3>
                    <p class="text-xs text-gray-500 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2a10 10 0 100 20 10 10 0 000-20zM12 18a6 6 0 110-12 6 6 0 010 12z" />
                        </svg>
                        15 Menit
                    </p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                <img src="https://via.placeholder.com/150" alt="Rendang Padang" class="w-full h-24 object-cover">
                <div class="p-2">
                    <h3 class="text-sm font-medium">Rendang Padang</h3>
                    <p class="text-xs text-gray-500 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2a10 10 0 100 20 10 10 0 000-20zM12 18a6 6 0 110-12 6 6 0 010 12z" />
                        </svg>
                        15 Menit
                    </p>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                <img src="https://via.placeholder.com/150" alt="Fettucini" class="w-full h-24 object-cover">
                <div class="p-2">
                    <h3 class="text-sm font-medium">Fettucini</h3>
                    <p class="text-xs text-gray-500 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2a10 10 0 100 20 10 10 0 000-20zM12 18a6 6 0 110-12 6 6 0 010 12z" />
                        </svg>
                        15 Menit
                    </p>
                </div>
            </div>
        </div>

        <!-- Navbar -->
        <div class="navigation-bar fixed bottom-0 z-50 max-w-[640px] w-full h-[85px] bg-white rounded-t-[25px] flex items-center justify-evenly py-[45px]">
            <!-- Home Icon -->
            <button class="flex flex-col items-center text-green-500">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor">
                  <path d="M3 11.25L12 3l9 8.25V20a1.5 1.5 0 01-1.5 1.5H4.5A1.5 1.5 0 013 20v-8.75z" />
                  <path d="M9 21v-6h6v6" />
              </svg>
              <span class="text-xs">Home</span>
          </button>

          <!-- Search Icon -->
          <button class="flex flex-col items-center text-gray-400">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                  stroke="currentColor">
                  <circle cx="11" cy="11" r="6" stroke-width="2" />
                  <line x1="17" y1="17" x2="21" y2="21" stroke-width="2" />
              </svg>
              <span class="text-xs">Search</span>
          </button>

          <!-- Bookmark Icon -->
          <button class="flex flex-col items-center text-gray-400">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                  stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v18l7-7 7 7V3H5z" />
              </svg>
              <span class="text-xs">Bookmark</span>
          </button>

          <!-- Profile Icon -->
          <button class="flex flex-col items-center text-gray-400">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                  stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M5.121 17.804A13.937 13.937 0 0112 15c3.314 0 6.314 1.234 8.879 3.804M15 11a3 3 0 11-6 0 3 3 0 016 0zm7 3a9 9 0 10-18 0 9 9 0 0018 0z" />
              </svg>
              <span class="text-xs">Profile</span>
          </button>
        </div>
    </section>
</body>
</html>
