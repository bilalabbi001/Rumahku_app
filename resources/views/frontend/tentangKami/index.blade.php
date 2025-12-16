@extends('frontend/layouts/app')

@section('content')
    <section class="bg-white py-10" id="tentang">
        <div class="max-w-6xl mx-auto px-4 grid mt-10 md:grid-cols-2 gap-10 items-center lg:mt-20">
            <!-- Teks -->
            <div>
                <h2 class="text-1xl md:text-3xl font-bold text-gray-800 flex items-center gap-2 mb-2">
                    TENTANG KAMI
                </h2>
                <h3 class="md:text-lg text-gray-600 font-bold">Kenapa Harus Memilih Kami!</h3>
                <p class="text-xs md:text-sm text-gray-600 leading-relaxed mb-4">
                    Kami adalah perusahaan properti yang berkomitmen menghadirkan hunian modern dengan kualitas terbaik dan
                    lokasi strategis.
                    Setiap proyek kami dirancang dengan memperhatikan kenyamanan, keamanan, serta nilai estetika tinggi.
                </p>

                <ul class="grid grid-cols-2 gap-3 text-xs text-gray-700 mb-6 md:text-sm">
                    <li class="flex items-center gap-2">
                        <span class="w-2 h-2 bg-red-500 rounded-full"></span> Lingkungan yang Tenang
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="w-2 h-2 bg-red-500 rounded-full"></span> Pemandangan Luar Biasa
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="w-2 h-2 bg-red-500 rounded-full"></span> Komunitas Lokal yang Hebat
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="w-2 h-2 bg-red-500 rounded-full"></span> Pusat Bermain Besar di Halaman
                    </li>
                </ul>
            </div>

            <!-- Gambar -->
            <div>
                <img src="{{ asset('assets/img/cover/cover1.jpg') }}" alt="Properti"
                    class="w-full rounded-lg shadow-lg object-cover">
            </div>
        </div>
    </section>

    <!-- Section Fitur Properti -->
    <section class="relative bg-cover bg-top py-16" style="background-image: url('assets/img/cover/cover.jpg')">
        <div class="absolute inset-0 bg-gray-900/80"></div>

        <div class="relative max-w-6xl mx-auto px-6 grid md:grid-cols-4 gap-10 text-center text-white">
            <div>
                <div class="border border-green-400/50 rounded-lg p-6 mb-4 inline-block">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" class="w-8 h-8 mx-auto text-green-400"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M3 10l9-7 9 7v11a1 1 0 01-1 1h-5v-6H9v6H4a1 1 0 01-1-1V10z" />
                    </svg>
                </div>
                <h4 class="font-semibold text-sm mb-2">Daftar Properti Terbaik</h4>
                <p class="text-gray-300 text-xs">Kami menyediakan daftar konten yang kaya kepada konsumen dalam format
                    praktis.</p>
            </div>

            <div>
                <div class="border border-green-400/50 rounded-lg p-6 mb-4 inline-block">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" class="w-8 h-8 mx-auto text-green-400"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M14 10h4.5a1.5 1.5 0 010 3H14m-4 0H5.5a1.5 1.5 0 010-3H10m4 0V7m0 6v3m-4 0v3m0-6V7" />
                    </svg>
                </div>
                <h4 class="font-semibold text-sm mb-2">Harga Terbaik di Pasar</h4>
                <p class="text-gray-300 text-xs">Perkiraan harga dan riwayat penjualan properti, memperbarui informasi.</p>
            </div>

            <div>
                <div class="border border-green-400/50 rounded-lg p-6 mb-4 inline-block">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" class="w-8 h-8 mx-auto text-green-400"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M12 6v6l4 2m5 5H3a1 1 0 01-1-1V5a1 1 0 011-1h18a1 1 0 011 1v13a1 1 0 01-1 1z" />
                    </svg>
                </div>
                <h4 class="font-semibold text-sm mb-2">Layanan Terjamin</h4>
                <p class="text-gray-300 text-xs">Kami akan terus memberi Anda informasi dan Anda dapat bertindak dengan
                    pasti.</p>
            </div>

            <div>
                <div class="border border-green-400/50 rounded-lg p-6 mb-4 inline-block">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" class="w-8 h-8 mx-auto text-green-400"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                    </svg>
                </div>
                <h4 class="font-semibold text=sm mb-2">Riset Pemasaran</h4>
                <p class="text-gray-300 text-xs">Para peneliti pemasaran kita saat ini memiliki pekerjaan yang sulit untuk
                    melakukan banyak tugas sekaligus.</p>
            </div>
        </div>
    </section>
@endsection
