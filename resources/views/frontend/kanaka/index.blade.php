@extends('frontend/layouts/app')

@section('content')
    <!-- HERO SECTION -->
    <section class="relative h-[90vh] flex items-center justify-center">
        <img src="{{ asset('assets/image/kanaka.jpg') }}" class="absolute inset-0 w-full h-full object-cover" />

        <div class="absolute inset-0 bg-black/50"></div>

        <div class="relative z-20 text-center text-white px-4">
            <h1 class="text-4xl md:text-6xl font-bold">Modern Commercial Area</h1>
            <p class="mt-4 text-sm md:text-xl max-w-2xl mx-auto">
                Ruang bisnis premium dengan desain modern dan lokasi strategis untuk mendukung perkembangan usaha Anda.
            </p>
        </div>
    </section>

    <!-- ABOUT SECTION -->
    <section class="max-w-6xl mx-auto px-4 py-10">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">

            <!-- Text -->
            <div>
                <h2 class="text 1xl md:text-4xl font-bold">AREA BISNIS MASA KINI</h2>

                <p class="mt-2 text-sm text-gray-600 leading-relaxed md:text-xl">
                    Dirancang dengan konsep modern dan futuristik, Commercial Area ini siap mendukung berbagai jenis
                    bisnis seperti café, restoran, minimarket, coworking space, salon, hingga perkantoran.
                </p>

                <ul class="mt-2 text-sm space-y-3 text-gray-700 md:text-xl">
                    <li>• Akses mudah & lokasi strategis</li>
                    <li>• Material bangunan berkualitas</li>
                    <li>• Area parkir luas</li>
                    <li>• Cocok untuk berbagai jenis usaha</li>
                </ul>
            </div>

            <!-- Slider -->
            <div>
                <div class="swiper aboutSwiper rounded-xl shadow-lg">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <img src="{{ asset('assets/image/kanaka-slide1.jpg') }}"
                                class="w-full h-72 md:h-96 object-cover rounded-xl" />
                        </div>

                        <div class="swiper-slide">
                            <img src="{{ asset('assets/image/kanaka-slide2.jpg') }}"
                                class="w-full h-72 md:h-96 object-cover rounded-xl" />
                        </div>

                        <div class="swiper-slide">
                            <img src="{{ asset('assets/image/kanaka-slide1.jpg') }}"
                                class="w-full h-72 md:h-96 object-cover rounded-xl" />
                        </div>

                    </div>

                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-4 py-10">
        <h2 class="text-center text-lg md:text-3xl font-bold mb-2">
            TEMPAT KEGIATAN POPULER
        </h2>

        <!-- GRID DESTINATIONS -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5">

            <!-- Card Rome -->
            <div class="relative rounded-2xl overflow-hidden h-64 md:h-80">
                <img src="{{ asset('assets/image/kanaka-slide1.jpg') }}" class="w-full h-full object-cover">

            </div>

            <!-- Middle column (Thailand + Maldives) -->
            <div class="grid grid-cols-1 gap-5">
                <!-- Thailand -->
                <div class="relative rounded-2xl overflow-hidden h-28 md:h-36 lg:h-40">
                    <img src="{{ asset('assets/image/kanaka-slide2.jpg') }}" class="w-full h-full object-cover">

                </div>

                <!-- Maldives -->
                <div class="relative rounded-2xl overflow-hidden h-28 md:h-36 lg:h-40">
                    <img src="{{ asset('assets/image/kanaka-slide1.jpg') }}" class="w-full h-full object-cover">

                </div>
            </div>

            <!-- Indonesia -->
            <div class="relative rounded-2xl overflow-hidden h-64 md:h-80">
                <img src="{{ asset('assets/image/kanaka-slide2.jpg') }}" class="w-full h-full object-cover">

            </div>

        </div>
    </section>


    <!-- CTA -->
    <section class="mb-10 bg-yellow-400 py-12 text-center">
        <h2 class="text-lg md:text-3xl font-bold">TERTARIK DENGAN UNIT KAMI?</h2>
        <p class="mt-1 text-sm md:text-[20px] text-gray-700">Hubungi kami untuk mendapatkan informasi lebih lanjut.</p>

        <a href="https://wa.me/6281717865888?text=Halo%20Admin,%20saya%20butuh%20info%20lebih%20lanjut%20mengenai%20produk.%20Mohon%20bantuanya.%20Terimakasih!"
            target="_blank"
            class="mt-2 inline-block p-2 bg-black text-white rounded-lg md:text-lg font-semibold hover:bg-gray-400">
            Hubungi Kami
        </a>
    </section>

    <script>
        // Slider for About Section
        new Swiper(".aboutSwiper", {
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
@endsection
