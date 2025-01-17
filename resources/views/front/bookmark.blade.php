<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resepin | Beranda</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="bg-gray-50">
    @include('sweetalert::alert')
    <section id="content" class="max-w-[640px] w-full mx-auto bg-white min-h-screen flex flex-col gap-8 pb-[120px]">
        <!-- Search Bar -->
        <div class="p-5 mt-5">
            <form action="{{ route('front.bookmark') }}" method="GET">
                <div class="flex items-center bg-gray-100 rounded-lg px-3 py-4">
                    <input type="text" name="search" value="{{ request()->input('search') }}" placeholder="Cari makanan yang di-bookmark"
                        class="flex-1 bg-transparent outline-none px-2 text-gray-700">
                    <button type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="w-6 h-6 text-gray-400">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7" />
                        </svg>
                    </button>
                </div>
            </form>
        </div>

        <div class="grid grid-cols-2 gap-6 p-5">
            @forelse ($bookmarks as $bookmark)
                <div class="relative bg-white rounded-lg overflow-hidden">
                    {{-- Icon Delete --}}
                    <button
                        class="absolute top-2 right-2 bg-red-500 text-white p-1 rounded-full hover:bg-red-600 focus:outline-none delete-button"
                        data-id="{{ $bookmark->id }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                    <form id="delete-form-{{ $bookmark->id }}" action="{{ route('bookmark.delete', $bookmark->id) }}"
                        method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>

                    {{-- Card Content --}}
                    <img src="{{ Storage::url($bookmark->food->photo) }}" alt="{{ $bookmark->food->name }}"
                        class="w-full h-48 object-cover rounded-2xl">
                    <div class="p-4">
                        <h3 class="text-sm font-semibold">{{ $bookmark->food->name }}</h3>
                    </div>
                </div>
            @empty
                <p class="col-span-2 text-center text-gray-500">No bookmarks available.</p>
            @endforelse
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
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <circle cx="11" cy="11" r="6" stroke-width="2" />
                    <line x1="17" y1="17" x2="21" y2="21" stroke-width="2" />
                </svg>
                <span class="text-xs">Search</span>
            </a>

            <!-- Bookmark Icon -->
            <a href="{{ route('front.bookmark') }}" class="flex flex-col items-center text-green-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"
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

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const deleteButtons = document.querySelectorAll('.delete-button');

            deleteButtons.forEach(button => {
                button.addEventListener('click', function () {
                    const bookmarkId = this.getAttribute('data-id');
                    const form = document.getElementById(`delete-form-${bookmarkId}`);

                    Swal.fire({
                        title: 'Hapus bookmark!',
                        // text: "Tindakan ini tidak dapat dibatalkan!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Ya, hapus!',
                        cancelButtonText: 'Batal'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            form.submit();
                        }
                    });
                });
            });
        });
    </script>
</body>

</html>
