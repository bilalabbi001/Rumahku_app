@extends('frontend/layouts/app')

<style>
    .parallax {
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    @media (max-width: 768px) {
        .parallax {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    }
</style>

@section('content')
    <header class="relative h-screen flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="parallax bg-[url('')] h-full w-full" style="background-image: url('assets/img/cover/cover.jpg')"
                alt="Majestic mountain landscape with snow-capped peaks under golden sunrise"></div>
            <div class="absolute inset-0 bg-black opacity-50"></div>
        </div>

        <div class="z-10 text-center px-4 mt-32">
            <h1 class="text-xl md:text-2xl font-light text-white">
                SELAMAT DATANG DI
            </h1>
            <h3 class="text-2xl md:text-7xl font-bold text-white animate-fade-in">
                TELAGA KAHURIPAN
            </h3>
            <p class="text-xs md:text-3xl font-bold text-white mb-9 max-w-2xl mx-auto">
                KEMBALI KE ALAM INDONESIA
            </p>
        </div>
    </header>

    <div class="container mx-auto px-4 py-4">
        <!-- Header Section -->
        <div class="text-center mb-6 lg:mt-10 fade-in">
            <h1 class="text-1xl md:text-3xl font-bold text-gray-800">TEMUKAN PROPERTI IMPIAN ANDA</h1>
            <p class=" text-xs text-gray-600 max-w-2xl mx-auto font-semibold lg:mt-2 lg:text-lg">Jelajahi berbagai kategori
                properti yang kami sediakan untuk memenuhi kebutuhan Anda</p>
        </div>

        <!-- Filter Section -->
        <div class="flex flex-wrap justify-center mb-6 gap-2 fade-in">
            <button class="text-xs filter-btn p-2 rounded-lg bg-blue-600 text-white font-medium lg:text-[18px]"
                data-filter="all">Semua</button>
            <button
                class="text-xs filter-btn p-2 rounded-lg bg-white text-gray-700 border border-gray-200 font-medium lg:text-[18px]"
                data-filter="residential">Residensial</button>
            <button
                class="text-xs filter-btn p-2 rounded-lg bg-white text-gray-700 border border-gray-200 font-medium lg:text-[18px]"
                data-filter="commercial">Komersial</button>
            {{-- <button class="filter-btn px-4 py-2 rounded-full bg-white text-gray-700 border border-gray-200 font-medium "
                data-filter="land">Tanah</button>
            <button class="filter-btn px-4 py-2 rounded-full bg-white text-gray-700 border border-gray-200 font-medium "
                data-filter="luxury">Mewah</button> --}}
        </div>

        <!-- Categories Grid -->

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

            <!-- Category Card 1 - Aluna -->
            <div class="category-card group residential fade-in" data-category="residential">
                <div
                    class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 group-hover:shadow-lg">
                    <div class="relative overflow-hidden h-48">
                        <img src="{{ asset('assets/image/aluna.png') }}"
                            alt="Rumah modern minimalis dengan taman depan dan garasi"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        <div class="absolute bottom-4 left-4">
                            <span
                                class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">Residensial</span>
                        </div>
                    </div>
                    <div class="p-2">
                        <div class="flex items-center">
                            {{-- <i class="fas fa-home text-blue-500 mr-2"></i> --}}
                            <h3 class="text-1xl font-bold text-gray-800 lg:mb-2">CLUSTER ALUNA</h3>
                        </div>
                        <p class="text-xs text-gray-600 mb-2  lg:text-sm">Temukan berbagai pilihan rumah mulai dari tipe
                            sederhana hingga mewah.</p>
                        <a href="{{ Route('aluna') }}"
                            class="bg-blue-600 text-xs block text-center rounded py-1 lg:py-2 text-white font-medium lg:text-[18px]">
                            Lihat Properti
                            {{-- <i class="fas fa-chevron-right ml-1 text-sm"></i> --}}
                        </a>
                    </div>
                </div>
            </div>

            <!-- Category Card 2 - PutaNutu -->
            <div class="category-card group residential fade-in" data-category="residential">
                <div
                    class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 group-hover:shadow-lg">
                    <div class="relative overflow-hidden h-48">
                        <img src="{{ asset('assets/image/putanutu.png') }}"
                            alt="Rumah modern minimalis dengan taman depan dan garasi"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        <div class="absolute bottom-4 left-4">
                            <span
                                class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">Residensial</span>
                        </div>
                    </div>
                    <div class="p-2">
                        <div class="flex items-center">
                            {{-- <i class="fas fa-home text-blue-500 mr-2"></i> --}}
                            <h3 class="text-1xl font-bold text-gray-800 lg:mb-2">CLUSTER PUTANUTU</h3>
                        </div>
                        <p class="text-xs text-gray-600 mb-2 lg:text-sm">Temukan berbagai pilihan rumah mulai dari tipe
                            sederhana hingga mewah.
                        </p>
                        <a href="{{ Route('putanutu') }}"
                            class="bg-blue-600 text-xs block text-center rounded py-1 lg:py-2 text-white font-medium lg:text-[18px]">
                            Lihat Properti
                            {{-- <i class="fas fa-chevron-right ml-1 text-sm"></i> --}}
                        </a>
                    </div>
                </div>
            </div>

            {{-- <!-- Category Card 3 - Ace -->
            <div class="category-card group residential fade-in" data-category="residential">
                <div
                    class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 group-hover:shadow-lg">
                    <div class="relative overflow-hidden h-48">
                        <img src="{{ asset('assets/image/Acee.jpg') }}"
                            alt="Rumah modern minimalis dengan taman depan dan garasi"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        <div class="absolute bottom-4 left-4">
                            <span
                                class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">Residensial</span>
                        </div>
                    </div>
                    <div class="p-2">
                        <div class="flex items-center">
                            <i class="fas fa-home text-blue-500 mr-2"></i>
                            <h3 class="text-1xl font-bold text-gray-800 lg:mb-2">CLUSTER ACE</h3>
                        </div>
                        <p class="text-xs text-gray-600 mb-2 lg:text-sm">Temukan berbagai pilihan rumah mulai dari tipe
                            sederhana
                            hingga mewah.
                        </p>
                        <a href="{{ Route('ace') }}"
                            class=" text-xs block text-end px-4  text-blue-600 font-medium hover:text-blue-800 group-hover:underline lg:py-2 lg:text-[18px]">
                            Lihat Properti
                            <i class="fas fa-chevron-right ml-1 text-sm"></i>
                        </a>
                    </div>
                </div>
            </div> --}}

            <!-- Category Card 4 - Breeze -->
            {{-- <div class="category-card group residential fade-in" data-category="residential">
                <div
                    class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 group-hover:shadow-lg">
                    <div class="relative overflow-hidden h-48">
                        <img src="{{ asset('assets/image/putanutu.png') }}"
                            alt="Rumah modern minimalis dengan taman depan dan garasi"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        <div class="absolute bottom-4 left-4">
                            <span
                                class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">Residensial</span>
                        </div>
                    </div>
                    <div class="p-2">
                        <div class="flex items-center">
                            <i class="fas fa-home text-blue-500 mr-2"></i>
                            <h3 class="text-1xl font-bold text-gray-800 lg:mb-2">CLUSTER BREEZE</h3>
                        </div>
                        <p class="text-xs text-gray-600 mb-2 lg:text-sm">Temukan berbagai pilihan rumah mulai dari tipe
                            sederhana
                            hingga mewah.
                        </p>
                        <a href="{{ Route('breeze') }}"
                            class=" text-xs block text-end px-4  text-blue-600 font-medium hover:text-blue-800 group-hover:underline lg:py-2 lg:text-[18px]">
                            Lihat Properti
                            <i class="fas fa-chevron-right ml-1 text-sm"></i>
                        </a>
                    </div>
                </div>
            </div> --}}

            <!-- Category Card 4 - Ruko -->
            <div class="category-card group residential fade-in" data-category="commercial">
                <div
                    class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 group-hover:shadow-lg">
                    <div class="relative overflow-hidden h-48">
                        <img src="{{ asset('assets/image/kanaka.png') }}"
                            alt="Ruko modern dan minimalis dengan halaman depan yang luas"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        <div class="absolute bottom-4 left-4">
                            <span
                                class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">Commercial</span>
                        </div>
                    </div>
                    <div class="p-2">
                        <div class="flex items-center">
                            {{-- <i class="fas fa-home text-blue-500 mr-2"></i> --}}
                            <h3 class="text-1xl font-bold text-gray-800 lg:mb-2">KANAKA</h3>
                        </div>
                        <p class="text-xs  text-gray-600 mb-2 lg:text-sm">Temukan area komersil mulai dari harga termurah.
                        </p>
                        <a href="{{ Route('kanaka') }}"
                            class="bg-blue-600 text-xs block text-center rounded py-1 lg:py-2 text-white font-medium lg:text-[18px]">
                            Lihat Properti
                            {{-- <i class="fas fa-chevron-right ml-1 text-sm"></i> --}}
                        </a>
                    </div>
                </div>
            </div>

            <!-- Category Card 4 - Tanah -->
            {{-- <div class="category-card group land fade-in" data-category="land">
                <div
                    class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 group-hover:shadow-lg">
                    <div class="relative overflow-hidden h-48">
                        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/2869d3ef-af07-483e-bd72-2716383f8787.png"
                            alt="Lahan kosong siap bangun dengan pemandangan pegunungan di belakang"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        <div class="absolute bottom-4 left-4">
                            <span
                                class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded">Tanah</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <i class="fas fa-map-marked-alt text-green-500 mr-2"></i>
                            <h3 class="text-xl font-bold text-gray-800">Tanah</h3>
                        </div>
                        <p class="text-gray-600 mb-4">Pilihan tanah siap bangun di lokasi strategis dengan prospek
                            pengembangan yang menjanjikan.</p>
                        <a href="#"
                            class="inline-flex items-center text-green-600 font-medium hover:text-green-800 group-hover:underline">
                            Lihat Properti
                            <i class="fas fa-chevron-right ml-1 text-sm"></i>
                        </a>
                    </div>
                </div>
            </div> --}}

            <!-- Category Card 5 - Villa -->
            {{-- <div class="category-card group luxury fade-in" data-category="luxury">
                <div
                    class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 group-hover:shadow-lg">
                    <div class="relative overflow-hidden h-48">
                        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/6a1eea2b-71e1-48db-ab03-9e39da5e9742.png"
                            alt="Villa mewah dengan kolam renang pribadi dan pemandangan pantai"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        <div class="absolute bottom-4 left-4">
                            <span
                                class="bg-yellow-100 text-yellow-800 text-xs font-medium px-2.5 py-0.5 rounded">Mewah</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <i class="fas fa-umbrella-beach text-yellow-500 mr-2"></i>
                            <h3 class="text-xl font-bold text-gray-800">Villa Mewah</h3>
                        </div>
                        <p class="text-gray-600 mb-4">Villa eksklusif dengan fasilitas premium di lokasi terbaik untuk gaya
                            hidup mewah.</p>
                        <a href="#"
                            class="inline-flex items-center text-yellow-600 font-medium hover:text-yellow-800 group-hover:underline">
                            Lihat Properti
                            <i class="fas fa-chevron-right ml-1 text-sm"></i>
                        </a>
                    </div>
                </div>
            </div> --}}

            <!-- Category Card 6 - Gedung Kantor -->
            {{-- <div class="category-card group commercial fade-in" data-category="commercial">
                <div
                    class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 group-hover:shadow-lg">
                    <div class="relative overflow-hidden h-48">
                        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/454f4b01-3a3e-4dac-afe5-294d5894fd87.png"
                            alt="Gedung kantor modern dengan fasad kaca di distrik bisnis kota"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        <div class="absolute bottom-4 left-4">
                            <span
                                class="bg-purple-100 text-purple-800 text-xs font-medium px-2.5 py-0.5 rounded">Komersial</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <i class="fas fa-briefcase text-purple-500 mr-2"></i>
                            <h3 class="text-xl font-bold text-gray-800">Gedung Kantor</h3>
                        </div>
                        <p class="text-gray-600 mb-4">Spasi perkantoran premium dengan fasilitas lengkap di lokasi bisnis
                            strategis.</p>
                        <a href="#"
                            class="inline-flex items-center text-purple-600 font-medium hover:text-purple-800 group-hover:underline">
                            Lihat Properti
                            <i class="fas fa-chevron-right ml-1 text-sm"></i>
                        </a>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>

    <!-- Content Section 1 -->
    <section class="px-4 py-10 bg-white">
        <div class="container mb-10 mx-auto">
            <h2 class="mb-2 text-1xl md:text-3xl font-bold text-gray-800"> SEBUAH LOTUS HIDUP SEIMBANG </h2>
            <div class="grid md:grid-cols-2 gap-8 items-center">
                <div>
                    <p class="text-[15px] lg:text-[20px] text-gray-600 mb-3">
                        Terinspirasi oleh pesona halus Teratai atau "Bunga
                        Kehidupan", kami mendedikasikan Telaga Kahuripan sebagai
                        hunian luas yang dibangun untuk menghidupkan kembali
                        prestise kehidupan hijau dan semilir nuansa nyaman,
                        menyeimbangkan nuansa alam yang autentik dengan konsep
                        modern.
                    </p>
                    <p class="text-[15px] lg:text-[20px] text-gray-600">
                        Dianggap sakral, Teratai dengan sempurna melambangkan konsep
                        ilahi hidup sehat. Sebagaimana benih Teratai mampu bertahan
                        ribuan tahun tanpa air, kami mempersembahkan rumah abadi
                        yang akan bertahan sepanjang hidup Anda yang indah,
                        dilengkapi dengan berbagai kenyamanan yang menyenangkan dan
                        mengasyikkan.
                    </p>
                </div>
                <div class="h-64 md:h-auto rounded-lg overflow-hidden shadow-xl">
                    <img src="{{ asset('assets/img/cover/cover1.jpg') }}"
                        alt="Teratai dengan sempurna melambangkan konsep ilahi hidup sehat"
                        class="w-full h-full object-cover" />
                </div>
            </div>
        </div>
    </section>
@endsection

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Filter functionality
        const filterButtons = document.querySelectorAll('.filter-btn');
        const categoryCards = document.querySelectorAll('.category-card');

        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                const filterValue = this.getAttribute('data-filter');

                // Update active button
                filterButtons.forEach(btn => {
                    btn.classList.remove('bg-blue-600', 'text-white');
                    btn.classList.add('bg-white', 'text-gray-700', 'border',
                        'border-gray-200');
                });

                this.classList.remove('bg-white', 'text-gray-700', 'border', 'border-gray-200');
                this.classList.add('bg-blue-600', 'text-white');

                // Filter cards
                categoryCards.forEach(card => {
                    if (filterValue === 'all' || card.getAttribute('data-category') ===
                        filterValue) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });

        // Add animation delay to cards
        const cards = document.querySelectorAll('.fade-in');
        cards.forEach((card, index) => {
            card.style.animationDelay = `${index * 0.1}s`;
        });
    });
</script>
