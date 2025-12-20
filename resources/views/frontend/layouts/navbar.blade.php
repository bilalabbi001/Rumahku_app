<nav class="bg-lime-950 xl:p-2 shadow-lg w-full fixed z-30">
    <div class="container mx-auto flex justify-between items-center">

        <!-- Logo -->
        <a href="/">
            <img src="{{ asset('assets/img/logo/logo.png') }}" style="width: 110px" alt="">
        </a>

        <!-- Menu Navigasi (Desktop) -->
        <div class="hidden md:flex space-x-4">
            <a href="{{ Route('home') }}"
                class="{{ Request::is('/') ? 'text-white bg-blue-700 px-3 py-2 rounded-md text-sm font-bold' : 'text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium' }}">Beranda</a>

            <div class="relative group">
                <button id="dropdownButton"
                    class=" {{ request()->routeIs('produk*') ? 'bg-blue-700 text-white border-blue-600' : 'text-white font-semibold border-b-2 border-blue-600 text-gray-300 hover:bg-gray-700' }} hover:text-white px-3 py-2 rounded-md text-sm font-medium flex items-center">
                    Produk
                    <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <!-- Menu Dropdown -->
                <ul id="dropdownMenu"
                    class="absolute hidden bg-lime-950 text-white mt-3 py-2 rounded-md shadow-lg z-10">
                    <li><a href="{{ Route('aluna') }}" class="block px-4 py-2 text-sm hover:bg-gray-600">Aluna</a></li>
                    <li><a href="{{ Route('putanutu') }}" class="block px-4 py-2 text-sm hover:bg-gray-600">Putanutu</a>
                    </li>
                    {{-- <li><a href="{{ Route('breeze') }}" class="block px-4 py-2 text-sm hover:bg-gray-600">Breez</a></li>
                    <li><a href="{{ Route('ace') }}" class="block px-4 py-2 text-sm hover:bg-gray-600">Ace</a></li> --}}
                    <li><a href="{{ Route('kanaka') }}" class="block px-4 py-2 text-sm hover:bg-gray-600">Kanaka</a>
                    </li>
                </ul>
            </div>

            <a href="{{ Route('tentangkami') }}"
                class="{{ request()->routeIs('tentangkami') ? 'text-white bg-blue-700 px-3 py-2 rounded-md text-sm font-bold' : 'text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium' }}">Tentang
                Kami</a>
            <a href="{{ Route('kontak') }}"
                class="{{ request()->routeIs('kontak') ? 'text-white bg-blue-700 px-3 py-2 rounded-md text-sm font-bold' : 'text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium' }}">Kontak</a>
        </div>
    </div>
    
    {{-- NAVBAR MOBILE --}}
    <div class="z-30 fixed bottom-0 left-0 right-0 bg-lime-950 p-1 sm:hidden">
        <ul class="flex justify-between text-white mx-4 py-1">
            <li>
                <a href="{{ Route('home') }}" class="flex justify-center flex-col items-center opacity-70">
                    <ion-icon name="home-outline"></ion-icon>
                    <span class="text-[10px]">Beranda</span>
                </a>
            </li>
            <li>
                <a href="{{ Route('produk') }}" class="flex justify-center flex-col items-center opacity-70">
                    <ion-icon name="clipboard-outline"></ion-icon>
                    <span class="text-[10px]">Produk</span>
                </a>
            </li>
            <li>
                <a href="{{ Route('tentangkami') }}" class="flex justify-center flex-col items-center opacity-70">
                    <ion-icon name="receipt-outline"></ion-icon>
                    <span class="text-[10px]">Tentang Kami</span>
                </a>
            </li>
            <li>
                <a href="{{ Route('kontak') }}" class="flex justify-center flex-col items-center opacity-70">
                    <ion-icon name="call-outline"></ion-icon>
                    <span class="text-[10px]">Kontak</span>
                </a>
            </li>
        </ul>
    </div>
</nav>


<script>
    // Ambil elemen tombol dan menu dropdown
    const dropdownButton = document.getElementById('dropdownButton');
    const dropdownMenu = document.getElementById('dropdownMenu');

    // Saat tombol diklik, toggle tampil/sembunyi menu
    dropdownButton.addEventListener('click', () => {
        dropdownMenu.classList.toggle('hidden');
    });

    // Tutup dropdown saat klik di luar area menu
    window.addEventListener('click', (e) => {
        if (!dropdownButton.contains(e.target) && !dropdownMenu.contains(e.target)) {
            dropdownMenu.classList.add('hidden');
        }
    });
</script>
