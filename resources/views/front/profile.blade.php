<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profilku</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @PwaHead
</head>

<body class="bg-gray-50">
    @include('sweetalert::alert')
    <section id="content" class="max-w-[640px] w-full mx-auto bg-white min-h-screen flex flex-col gap-8 pb-[120px]">
        <!-- Profil Header -->
        <div class="bg-green-100 p-8 flex items-center gap-4">
            <img src="{{ Storage::url(Auth::user()->avatar) }}" alt="Profile"
                class="w-16 h-16 rounded-full object-cover">
            <div>
                <h2 class="text-xl font-semibold text-green-600">{{ Auth::user()->name }}</h2>
                <p class="text-gray-500">{{ Auth::user()->email }}</p>
                <p class="text-gray-500">{{ Auth::user()->phone_number }}</p>
            </div>
        </div>

        <!-- Menu Umum -->
        <div class="p-4">
            <h3 class="font-semibold text-lg mb-4">Umum</h3>
            <div class="space-y-4">
                <a href="{{ route('user.edit') }}" class="flex items-center justify-between p-4 bg-gray-100 rounded-lg">
                    <div class="flex items-center gap-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500" viewBox="0 0 24 24"
                            fill="currentColor">
                            <path d="M15.232 4.232a3 3 0 00-4.264 0l-8 8a3 3 0 104.264 4.264l8-8a3 3 0 000-4.264z" />
                            <path d="M9.879 16.121l-4.242 4.242a3 3 0 004.242 0l4.242-4.242-4.242-4.242z" />
                        </svg>
                        <div>
                            <h4 class="font-semibold">Ubah Profil</h4>
                            <p class="text-sm text-gray-500">Mengubah foto profil/nomor/E-mail</p>
                        </div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>

                <a href="{{ route('user.password') }}" class="flex items-center justify-between p-4 bg-gray-100 rounded-lg">
                    <div class="flex items-center gap-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500" viewBox="0 0 24 24"
                            fill="currentColor">
                            <path d="M9 11.25V6a3 3 0 016 0v5.25" />
                            <rect x="6" y="11.25" width="12" height="8.25" rx="2" />
                        </svg>
                        <div>
                            <h4 class="font-semibold">Ubah Kata Sandi</h4>
                            <p class="text-sm text-gray-500">Perbarui dan menguatkan kata sandi</p>
                        </div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>

                <a href="ubah-bahasa.html" class="flex items-center justify-between p-4 bg-gray-100 rounded-lg">
                    <div class="flex items-center gap-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <circle cx="12" cy="12" r="10" />
                            <path d="M12 2v20M2 12h20" />
                        </svg>
                        <div>
                            <h4 class="font-semibold">Ubah Bahasa</h4>
                            <p class="text-sm text-gray-500">Mengubah bahasa</p>
                        </div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>

                {{-- <a href="keamanan-akun.html" class="flex items-center justify-between p-4 bg-gray-100 rounded-lg">
          <div class="flex items-center gap-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path d="M12 2C8.134 2 5 4.786 5 8.4v5.6c0 3.614 3.134 6.4 7 6.4s7-2.786 7-6.4V8.4c0-3.614-3.134-6.4-7-6.4z" />
              <circle cx="12" cy="12" r="3" />
            </svg>
            <div>
              <h4 class="font-semibold">Keamanan Akun</h4>
              <p class="text-sm text-gray-500">Lindungi akun Anda sekarang</p>
            </div>
          </div>
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
          </svg>
        </a> --}}
            </div>
        </div>

        <!-- Menu Info Lain -->
        <div class="p-4">
            <h3 class="font-semibold text-lg mb-4">Info Lain</h3>
            <div class="space-y-4">
                {{-- <a href="notifikasi.html" class="flex items-center justify-between p-4 bg-gray-100 rounded-lg">
          <h4 class="font-semibold text-gray-700">Notifikasi</h4>
        </a> --}}
                <a href="faq.html" class="flex items-center justify-between p-4 bg-gray-100 rounded-lg">
                    <h4 class="font-semibold text-gray-700">FAQ</h4>
                </a>
                <form id="logoutForm" action="{{ route('user.logout') }}" method="POST" class="mt-6">
                    @csrf
                    <button type="submit" id="logoutButton"
                        class="flex items-center justify-between p-4 bg-gray-100 rounded-lg text-red-500 font-semibold w-full cursor-pointer">
                        Keluar
                    </button>
                </form>

            </div>
        </div>

        <!-- Popup -->
        <div id="logoutPopup" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
            <div class="bg-white rounded-lg shadow-lg w-96 p-6">
                <!-- Icon dan Pesan -->
                <div class="flex flex-col items-center text-center">
                    <div class="bg-red-100 text-red-500 rounded-full w-12 h-12 flex items-center justify-center mb-4">
                        <div class="text-red-500 text-2xl font-bold">!</div>
                    </div>
                    <p class="text-gray-800 mb-4">
                        Apakah Anda yakin ingin keluar dari akun Anda?
                    </p>
                </div>

                <!-- Tombol -->
                <div class="flex justify-center space-x-4">
                    <button id="logoutConfirmButton"
                        class="bg-red-500 text-white px-4 py-2 rounded-lg w-full hover:bg-red-600">
                        Keluar
                    </button>
                    <button id="logoutCancelButton"
                        class="bg-gray-200 text-gray-800 px-4 py-2 rounded-lg w-full hover:bg-gray-300">
                        Gak Jadi
                    </button>
                </div>
            </div>
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
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v18l7-7 7 7V3H5z" />
                </svg>
                <span class="text-xs">Bookmark</span>
            </a>

            <!-- Profile Icon -->
            <a href="{{ route('front.profile') }}" class="flex flex-col items-center text-green-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5.121 17.804A13.937 13.937 0 0112 15c3.314 0 6.314 1.234 8.879 3.804M15 11a3 3 0 11-6 0 3 3 0 016 0zm7 3a9 9 0 10-18 0 9 9 0 0018 0z" />
                </svg>
                <span class="text-xs">Profile</span>
            </a>
        </div>
    </section>

    <script>
        // Dapatkan elemen
        const logoutButton = document.getElementById('logoutButton');
        const logoutPopup = document.getElementById('logoutPopup');
        const logoutConfirmButton = document.getElementById('logoutConfirmButton');
        const logoutCancelButton = document.getElementById('logoutCancelButton');

        // Tampilkan popup saat tombol logout diklik
        logoutButton.addEventListener('click', function() {
            event.preventDefault();
            logoutPopup.classList.remove('hidden');
        });

        // Aksi tombol "Keluar"
        logoutConfirmButton.addEventListener('click', function() {
            logoutPopup.classList.add('hidden');
            // Arahkan ke route logout
            document.getElementById('logoutForm').submit();
        });

        // Aksi tombol "Batal"
        logoutCancelButton.addEventListener('click', function() {
            logoutPopup.classList.add('hidden');
        });
    </script>
    @RegisterServiceWorkerScript
</body>

</html>
