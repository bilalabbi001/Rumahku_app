@extends('frontend/layouts/app')


@section('content')
    <div class="relative bg-gray-900 py-20 px-2 overflow-hidden">
        <!-- Gambar Latar Belakang Overlay (untuk efek gelap) -->
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('assets/img/cover/cover.jpg') }}" alt="Telaga Kahuripan"
                class="w-full h-full object-cover object-top opacity-20">
            <!-- Anda bisa menyesuaikan opacity (misal: opacity-40, opacity-50) untuk tingkat kegelapan -->
        </div>

        <!-- Konten Teks -->
        <div class="relative p-2 z-10 max-w-7xl mx-auto text-left text-white mt-10">
            <p class="text-xs text-orange-500 lg:text-sm uppercase tracking-wider font-semibold">TELAGA KAHURIPAN</p>
            <h2 class="text-lg md:text-3xl font-bold">KEMBALI KE ALAM INDONESIA</h2>
        </div>
    </div>
    <!-- Container -->
    <div class="max-w-7xl mx-auto p-2 md:p-8 grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- LEFT CONTENT -->
        <div class="lg:col-span-2 space-y-6">
            <!-- Gallery -->
            <div class="rounded-2xl p-2">
                <h2 class="text-sm md:text-lg font-bold mb-2">{{ $produk->title }}</h2>

                <!-- Main Swiper -->
                <div class="swiper mySwiper2 rounded-lg">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/images/' . $produk->image) }}" alt="Adena Type - 35"
                                class="w-full h-full object-cover object-bottom sm:h-80 md:h-[400px] object-cover rounded-lg lg:h-[600px] lg:object-cover">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/images/' . $produk->image1) }}"
                                alt="Dapur dengan view menghadap gunung langsung"
                                class="w-full h-full sm:h-80 md:h-[400px] object-cover rounded-lg lg:h-[600px]">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/images/' . $produk->image2) }}" alt="Kamar yang luas"
                                class="w-full h-full sm:h-80 md:h-[400px] object-cover rounded-lg lg:h-[600px]">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/images/' . $produk->image3) }}" alt="Kamar mandi yang luas"
                                class="w-full h-full sm:h-80 md:h-[400px] object-cover rounded-lg lg:h-[600px]">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/images/' . $produk->image4) }}" alt="Kamar tidur utama"
                                class="w-full h-full sm:h-80 md:h-[400px] object-cover rounded-lg lg:h-[600px]">
                        </div>
                    </div>
                    <!-- Navigation -->
                    <div class="swiper-button-next !text-gray-700"></div>
                    <div class="swiper-button-prev !text-gray-700"></div>
                </div>

                <!-- Thumbnails -->
                <div class="swiper mySwiper mt-3">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/images/' . $produk->image) }}" alt="Adena Type - 35"
                                class="h-16 sm:h-20 w-full object-cover rounded-lg cursor-pointer">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/images/' . $produk->image1) }}"
                                alt="Dapur dengan view menghadap gunung langsung"
                                class="h-16 sm:h-20 w-full object-cover rounded-lg cursor-pointer">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/images/' . $produk->image2) }}" alt="Kamar yang luas"
                                class="h-16 sm:h-20 w-full object-cover rounded-lg cursor-pointer">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/images/' . $produk->image3) }}" alt="Kamar mandi yang luas"
                                class="h-16 sm:h-20 w-full object-cover rounded-lg cursor-pointer">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/images/' . $produk->image4) }}" alt="Kamar tidur utama"
                                class="h-16 sm:h-20 w-full object-cover rounded-lg cursor-pointer">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Description -->
            <div class="bg-white rounded-2xl shadow p-2">
                <h2 class="text-sm md:text-lg font-bold mb-1">Deskripsi</h2>
                <p class="text-gray-600 text-xs md:text-sm md:text-base mb-6">
                    {{ $produk->description }}
                </p>
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-2 mb-4 text-sm">
                    <div class="text-center">
                        <div class="p-2">
                            <i class="fa fa-house fa-2x" style="color: blue"></i>
                        </div>
                        <p class="text-xs text-gray-500 md:text-md">Luas Bangunan</p>
                        <p class="text-xs md:text-md font-semibold">{{ $produk->luasBangunan }}m²</p>
                    </div>
                    <div class="text-center">
                        <div class="p-2">
                            <i class="fa-regular fa-house fa-2x" style="color: blue"></i>
                        </div>
                        <p class="text-xs text-gray-500">Luas Tanah</p>
                        <p class="text-xs md:text-md font-semibold">{{ $produk->luasTanah }}m²</p>
                    </div>
                    <div class="text-center">
                        <div class="p-2">
                            <i class="fa-regular fa-solid fa-bed fa-2x" style="color: blue"></i>
                        </div>
                        <p class="text-gray-500">Kamar Tidur</p>
                        <p class="text-xs md:text-sm font-semibold">{{ $produk->kamarTidur }}</p>
                    </div>
                    <div class="text-center">
                        <div class="p-2">
                            <i class="fa-solid fa-bath fa-2x" style="color: blue"></i>
                        </div>
                        <p class="text-gray-500">Kamar Mandi</p>
                        <p class="text-xs md:text-sm font-semibold">{{ $produk->kamarMandi }}</p>
                    </div>
                </div>
            </div>


            <!-- Features -->
            <div class="bg-white rounded-2xl shadow p-2">
                <h2 class="text-lg font-bold mb-4">Fasilitas</h2>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-2 text-gray-700 text-sm">
                    <p>✅ Panoramic Joging Track</p>
                    <p>✅ Children Playground</p>
                    <p>✅ Infinity Pool</p>
                    <p>✅ Commercial Area</p>
                    <p>✅ Scurity & CCTV 24 Hours</p>
                    <p>✅ Sport Club</p>
                    <p>✅ Open Gym</p>
                </div>
            </div>
        </div>

        <!-- RIGHT SIDEBAR -->
        <div class="space-y-6">
            <!-- Agent Info -->
            <div class="bg-white rounded-2xl shadow p-6 text-center">
                <img src="{{ asset('assets/image/imagee.jpg') }}" alt="Seorang Agent"
                    class="h-40 mx-auto rounded-full mb-2">
                <h3 class="text-xs md:text-lg font-semibold">Kartini Aprilia</h3>
                <p class="text-xs md:text-sm text-gray-500 mb-3">Konsultan Properti</p>
                <div class="text-xs md:text-sm space-y-1">
                    <p><i class="fa-solid fa-phone"></i> +628 1717 865 888</p>
                    <p><i class="fa-solid fa-envelope"></i> Kartini.nabindra@gmail.com</p>
                    <p><i class="fa-solid fa-globe"></i> www.telagakahuripanofficial.com</p>
                </div>
            </div>

            <!-- Request Form -->
            <div class="bg-white rounded-2xl shadow p-2">
                <h3 class="text-xs md:text-lg font-semibold mb-4">Minta Pertunjukan</h3>
                <form class="space-y-3">
                    <input type="text"
                        class="w-full border rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                    <input type="email"
                        class="w-full border rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                    <input type="text"
                        class="w-full border rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                    <textarea rows="3" class="w-full border rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-400"></textarea>
                    <button
                        class="text-xs w-full bg-green-500 hover:bg-green-600 text-white py-2 rounded-lg font-semibold transition md:text-sm">Kirim
                        Permintan</button>
                </form>
            </div>
        </div>
    </div>
    <div class=" max-w-7xl mx-auto bg-white rounded-xl shadow-sm p-2 mb-5">
        <h2 class="text-xs md:text-2xl font-semibold text-gray-800 mb-2">
            Lokasi
        </h2>
        <div class="rounded-lg overflow-hidden h-64 bg-gray-100 flex items-center justify-center">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.5025213444956!2d106.65355351125062!3d-6.457832763118839!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e7d7411f5d01%3A0xaf3bd559598e0623!2sPutaNutu%20Resort%20%26%20Residence!5e0!3m2!1sid!2sid!4v1764918637351!5m2!1sid!2sid"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <!-- Swiper Init -->
    <script>
        const swiper = new Swiper(".mySwiper", {
            spaceBetween: 10,
            slidesPerView: 3,
            freeMode: true,
            watchSlidesProgress: true,
            breakpoints: {
                640: {
                    slidesPerView: 4
                },
            }
        });

        const swiper2 = new Swiper(".mySwiper2", {
            spaceBetween: 10,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            thumbs: {
                swiper: swiper
            },
        });
    </script>
@endsection
