@extends('frontend/layouts/app')

@section('content')
    <section class="py-10">
        <div class="max-w-7xl mx-auto px-4 mt-10 md:px-8 lg:mt-20">
            <div class="text-center mb-10">
                <h2 class="text-1xl md:text-3xl font-bold text-gray-800 mb-1">HUBUNGI KAMI</h2>
            </div>

            <!-- Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                <!-- Contact Info -->
                <div class="bg-white mt-[-30px] shadow rounded-2xl p-1 space-y-4">
                    <div class="flex items-center gap-3">
                        <div class="bg-blue-100 p-3 rounded-lg text-blue-600">
                            <i class="fa-solid fa-building"></i>
                        </div>
                        <div>
                            <h4 class="text-sm font-semibold text-gray-700">Kantor kami</h4>
                            <p class="text-gray-500 text-xs">JL. Telaga Kahuripan, Gallery Marketing Samasta - Blok E Bogor,
                                Jawa Barat
                                16330</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-3">
                        <div class="bg-blue-100 p-3 rounded-lg text-blue-600">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div>
                            <h4 class="text-sm font-semibold text-gray-700">Phone</h4>
                            <p class="text-gray-500 text-xs">+6281717865888</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-3">
                        <div class="bg-blue-100 p-3 rounded-lg text-blue-600">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div>
                            <h4 class="text-sm font-semibold text-gray-700">Email</h4>
                            <p class="text-gray-500 text-xs">Kartini.nabindra@gmail.com</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-3">
                        <div class="bg-blue-100 p-3 rounded-lg text-blue-600">
                            <i class="fa-solid fa-globe"></i>
                        </div>
                        <div>
                            <h4 class="text-sm font-semibold text-gray-700">Website</h4>
                            <p class="text-gray-500 text-xs">www.telagakahuripanofficial.com</p>
                        </div>
                    </div>

                    <!-- Map -->
                    <div class="mt-6">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.32427758551!2d106.7085634440739!3d-6.480551259740603!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ddbf2cdf74b7%3A0xfdd790ae081d4849!2sMarketing%20Gallery%20Telaga%20Kahuripan!5e0!3m2!1sid!2sid!4v1765891664039!5m2!1sid!2sid"
                            width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="bg-white shadow rounded-2xl p-2">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Kirimkan Pesan kepada kami</h3>
                    <form class="space-y-4">
                        <div>
                            <label class="text-sm block text-gray-600 mb-1">Nama Lengkap</label>
                            <input type="text"
                                class="w-full border rounded-lg p-2 focus:ring-2 focus:ring-blue-400 focus:outline-none">
                        </div>

                        <div>
                            <label class="text-sm block text-gray-600 mb-1">Alamat E-mail</label>
                            <input type="email"
                                class="w-full border rounded-lg p-2 focus:ring-2 focus:ring-blue-400 focus:outline-none">
                        </div>

                        <div>
                            <label class="text-sm block text-gray-600 mb-1">Nomor Handphone</label>
                            <input type="text"
                                class="w-full border rounded-lg p-2 focus:ring-2 focus:ring-blue-400 focus:outline-none">
                        </div>

                        <div>
                            <label class="text-sm block text-gray-600 mb-1">Pesan</label>
                            <textarea rows="4" class="w-full border rounded-lg p-2 focus:ring-2 focus:ring-blue-400 focus:outline-none"></textarea>
                        </div>

                        <button type="submit"
                            class="text-sm w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 rounded-lg transition">
                            Kirim Pesan
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </section>
@endsection
