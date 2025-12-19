@extends('frontend/layouts/app')

<style>
    .card-shadow {
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
            0 4px 6px -2px rgba(0, 0, 0, 0.05);
    }

    .card-shadow:hover {
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1),
            0 10px 10px -5px rgba(0, 0, 0, 0.04);
        transform: translateY(-2px);
        transition: all 0.3s ease;
    }
</style>

@section('content')
    <div class="relative bg-gray-900 py-20 px-2 overflow-hidden">
        <!-- Gambar Latar Belakang Overlay (untuk efek gelap) -->
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('assets/img/cover/cover.jpg') }}" alt="City Background"
                class="w-full h-full object-cover object-top opacity-20">
            <!-- Anda bisa menyesuaikan opacity (misal: opacity-40, opacity-50) untuk tingkat kegelapan -->
        </div>

        <!-- Konten Teks -->
        <div class="relative p-2 z-10 max-w-7xl mx-auto text-left text-white mt-10">
            <p class="text-xs text-orange-500 lg:text-sm uppercase tracking-wider font-semibold">TELAGA KAHURIPAN</p>
            <h2 class="text-lg md:text-3xl font-bold">KEMBALI KE ALAM INDONESIA</h2>
        </div>
    </div>
    <section class="py-5">
        <div class="p-4 max-w-2xl text-center mx-auto font-bold">
            <h1 class="text-md md:text-3xl">CLUSTER PUTANUTU</h1>
            <h3 class="text-xs mt-1 tracking-wide font-light md:text-md">
                KONSEP MODERN YANG DIRANCANG KHUSUS UNTUK ANDA
            </h3>
        </div>
        <div class="container -my-20 p-4 py-20 mx-auto grid grid-cols-1 md:grid-cols-3 md:py-20 lg:grid-cols-3 gap-8">
            <!-- Property Card 1 -->
            @foreach ($produks as $produk)
                <div class="bg-white rounded-md overflow-hidden card-shadow">
                    <div class="relative">
                        <img src="{{ asset('assets/images/' . $produk->image) }}"
                            alt="Modern two-story house with large windows and wooden accents in a suburban neighborhood"
                            class="w-full object-cover object-contain" />
                        <div class="absolute -top-1 right-4 bg-red-500 text-white px-2 py-1 rounded-sm text-sm font-bold">
                            {{ $produk->title }}
                        </div>
                    </div>

                    <div class="p-3">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="text-sm my-1 md:text-xl font-bold text-gray-800">

                                </h3>
                                <p class="text-gray-600 flex items-center text-xs md:text-md md:font-bold">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    Selatan Jakarta
                                </p>
                            </div>
                            <span class="text-xs md:text-lg font-bold text-blue-600">IDR {{ $produk->harga }}</span>
                        </div>

                        <div class="mt-6 pt-4 border-t border-gray-200">
                            <a href="{{ route('putanutu.show', $produk->slug) }}"
                                class="w-full text-xs block text-center bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-lg transition duration-300 md:text-md">Lihat
                                Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </section>
@endsection
