@extends('frontend/layouts/app')

@section('content')
    <div class="container mx-auto px-4 py-5 mb-10">
        <!-- Header Section -->
        <div class="text-center mt-[60px] mb-6 lg:mt-20 fade-in">
            <h1 class="text-1xl md:text-3xl font-bold text-gray-800">TEMUKAN PROPERTI IMPIAN ANDA</h1>
            <p class=" text-xs text-gray-600 max-w-2xl mx-auto lg:mt-2 lg:text-[18px]">Jelajahi berbagai kategori properti
                yang kami sediakan untuk memenuhi kebutuhan Anda</p>
        </div>

        <!-- Filter Section -->
        <div class="flex flex-wrap justify-center mb-6 gap-2 fade-in">
            <button class="text-xs filter-btn p-2 rounded-lg bg-blue-600 text-white font-medium lg:text-[18px]"
                data-filter="all"> Semua
            </button>
            <button
                class="text-xs filter-btn p-2 rounded-lg bg-white text-gray-700 border border-gray-200 font-medium lg:text-[18px]"
                data-filter="residential"> Residensial
            </button>
            <button
                class="text-xs filter-btn p-2 rounded-lg bg-white text-gray-700 border border-gray-200 font-medium lg:text-[18px]"
                data-filter="commercial"> Komersial
            </button>

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
                            <p class="text-xs text-gray-600 mb-2  lg:text-[16px]">Temukan berbagai pilihan rumah mulai dari
                                tipe sederhana hingga mewah.
                            </p>
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
                            <p class="text-xs text-gray-600 mb-2 lg:text-[16px]">Temukan berbagai pilihan rumah mulai dari
                                tipe sederhana hingga mewah.
                            </p>
                            <a href="{{ Route('putanutu') }}"
                                class="bg-blue-600 text-xs block text-center rounded py-1 lg:py-2 text-white font-medium lg:text-[18px]">
                                Lihat Properti
                                {{-- <i class="fas fa-chevron-right ml-1 text-sm"></i> --}}
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Category Card 4 - Ruko -->
                <div class="category-card group residential fade-in" data-category="commercial">
                    <div
                        class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 group-hover:shadow-lg">
                        <div class="relative overflow-hidden h-48">
                            <img src="{{ asset('assets/image/kanaka.png') }}"
                                alt="Ruko modern dan minimalis dengan halaman yang luas"
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
                            <p class="text-xs lg:text-[16px] text-gray-600 mb-2">Temukan area komersil mulai dari harga
                                termurah dengan fasilitas yang mewah.
                            </p>
                            <a href="{{ Route('kanaka') }}"
                                class="bg-blue-600 text-xs block text-center rounded py-1 lg:py-2 text-white font-medium lg:text-[18px]">
                                Lihat Properti
                                {{-- <i class="fas fa-chevron-right ml-1 text-sm"></i> --}}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
