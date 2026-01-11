@extends('layouts.app')

@section('title', 'Home — Winners Chapel Int\'l ALBANY')

@section('content')
    <!-- HERO SLIDER -->
    <section id="home" class="relative bg-gradient-to-b from-white to-gray-50 overflow-hidden">
        <div class="absolute inset-0">
            <img src="{{ asset('https://www.psephizo.com/wp-content/uploads/2018/02/worship-image.jpg') }}" alt="Church"
                class="w-full h-full object-cover opacity-20">
        </div>

        <div class="relative max-w-7xl mx-auto px-4 py-16 lg:py-24 grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">

            <!-- LEFT CONTENT -->
            <div class="space-y-6" data-aos="fade-right">
                <p class="text-sm font-medium text-gray-600">Welcome to</p>

                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight text-gray-900" data-aos="fade-up"
                    data-aos-delay="150">
                    WINNERS CHAPEL INT'L, ALBANY
                </h1>

                <p class="text-lg text-gray-700 max-w-xl" data-aos="fade-up" data-aos-delay="250">
                    OUR MANDATE: “The hour has come to liberate the world...”
                </p>

                <div class="flex flex-wrap gap-3" data-aos="fade-up" data-aos-delay="350">
                    <a href="{{ route('watch') }}"
                        class="inline-flex items-center px-5 py-3 rounded-full bg-gray-800 text-white font-semibold shadow hover:bg-black transition">
                        Watch Live
                        <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7-7 7M5 5v14" />
                        </svg>
                    </a>

                    <a href="{{ route('give') }}"
                        class="inline-flex items-center px-5 py-3 rounded-full border border-gray-200 text-black font-medium hover:bg-gray-50 transition">
                        Give
                    </a>
                </div>

                <div class="mt-6 grid gap-4 sm:grid-cols-3">
                    <div class="p-4 rounded-lg bg-white shadow hover:scale-105 transition transform" data-aos="zoom-in"
                        data-aos-delay="200">
                        <p class="text-sm text-gray-500">Next Service</p>
                        <p class="mt-1 font-semibold text-gray-800">Sunday <br> 09:00 AM - 11:00 AM</p>
                    </div>

                    <div class="p-4 rounded-lg bg-white shadow hover:scale-105 transition transform" data-aos="zoom-in"
                        data-aos-delay="300">
                        <p class="text-sm text-gray-500">Location</p>
                        <p class="mt-1 font-semibold text-gray-800">1524 Central Ave , Albany , NY, 12205</p>
                    </div>

                    <div class="p-4 rounded-lg bg-white shadow hover:scale-105 transition transform" data-aos="zoom-in"
                        data-aos-delay="400">
                        <p class="text-sm text-gray-500">Contact</p>
                        <p class="mt-1 font-semibold text-gray-800"><a href="tel:+15187134041">+1 (518) 713-4041</a></p>
                    </div>
                </div>
            </div>

            <!-- HERO SLIDER -->
            <div class="flex items-center justify-center" data-aos="fade-left">
                <div class="w-full max-w-md relative">
                    <div class="overflow-hidden rounded-lg shadow-lg">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="{{ asset('https://www.clearview.org/wp-content/uploads/2023/05/bible-study.jpeg') }}"
                                        class="w-full h-auto object-cover" alt="Winners Chapel">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('https://i0.wp.com/buildingjerusalem.blog/wp-content/uploads/2021/10/grow-church-prayer-meeting.jpg?fit=642%2C428&ssl=1') }}"
                                        class="w-full h-auto object-cover" alt="Service">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('assets/group.jpg') }}" class="w-full h-auto object-cover"
                                        alt="Community">
                                </div>
                            </div>

                            <div class="swiper-pagination"></div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!-- SERVICES -->
    <section id="services" class="py-16 bg-white relative z-10">
        <div class="max-w-7xl mx-auto px-4">

            <div class="text-center max-w-2xl mx-auto mb-12" data-aos="fade-up">
                <h2 class="text-3xl font-bold text-gray-900">Services</h2>
                <p class="mt-2 text-gray-600">Faith teaching, community outreach, training</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Communion Service -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl hover:-translate-y-2 transition-all duration-500"
                    data-aos="fade-up" data-aos-delay="150">
                    <div class="h-48 overflow-hidden">
                        <img src="{{ asset('assets/communion.png') }}" alt="Communion Service"
                            class="w-full h-full object-cover hover:scale-110 transition duration-700">
                    </div>

                    <div class="p-6">
                        <h3 class="text-lg font-semibold mb-2">Communion Service</h3>
                        <p class="text-sm text-gray-600">
                            Experience the life-transforming power of the Communion every week.
                        </p>
                    </div>
                </div>

                <!-- Sunday Service -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl hover:-translate-y-2 transition-all duration-500"
                    data-aos="fade-up" data-aos-delay="250">
                    <div class="h-48 overflow-hidden">
                        <img src="{{ asset('assets/sunday_service.png') }}" alt="Sunday Service"
                            class="w-full h-full object-cover hover:scale-110 transition duration-700">
                    </div>

                    <div class="p-6">
                        <h3 class="text-lg font-semibold mb-2">Sunday Worship Service</h3>
                        <p class="text-sm text-gray-600">
                            Join us every Sunday for a powerful encounter with God’s Word.
                        </p>
                    </div>
                </div>

                <!-- Covenant Hour of Prayer -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl hover:-translate-y-2 transition-all duration-500"
                    data-aos="fade-up" data-aos-delay="350">
                    <div class="h-48 overflow-hidden">
                        <img src="{{ asset('https://www.winnerschapelny.org/images/2021/11/12/whatsapp-image-2021-11-11-at-2.42.11-pm.jpeg') }}"
                            alt="Covenant Hour of Prayer"
                            class="w-full h-full object-cover hover:scale-110 transition duration-700">
                    </div>

                    <div class="p-6">
                        <h3 class="text-lg font-semibold mb-2">Covenant Hour of Prayer</h3>
                        <p class="text-sm text-gray-600">
                            Start your day with divine empowerment through early morning prayer.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>


    <!-- BLOG -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4">

            <div class="flex justify-between items-center mb-6" data-aos="fade-up">
                <h3 class="text-2xl font-bold text-gray-900"></h3>
                <a href="#" class="text-gray-600 hover:underline font-medium">>></a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <article class="bg-white rounded-lg shadow overflow-hidden hover:scale-105 transition transform"
                    data-aos="zoom-in" data-aos-delay="150">
                    <img src="https://www.winnerschapelny.org/images/2022/03/30/wofbi-2021-b.jpg"
                        class="w-full h-40 object-cover">
                    <div class="p-4">
                        <h4 class="font-semibold">Winners Satellite Fellowship</h4>
                        <p class="text-sm text-gray-600 mt-2">The Winners Satellite Fellowship...</p>
                        <a href="#" class="mt-3 inline-block text-gray-600 text-sm hover:underline">Read more →</a>
                    </div>
                </article>

                <article class="bg-white rounded-lg shadow overflow-hidden hover:scale-105 transition transform"
                    data-aos="zoom-in" data-aos-delay="250">
                    <img src="https://www.winnerschapelny.org/images/2022/03/30/wofbi-2021-b.jpg"
                        class="w-full h-40 object-cover">
                    <div class="p-4">
                        <h4 class="font-semibold">WOFBI</h4>
                        <p class="text-sm text-gray-600 mt-2">The Word of Faith Bible Institute...</p>
                        <a href="#" class="mt-3 inline-block text-gray-600 text-sm hover:underline">Read more →</a>
                    </div>
                </article>

                <article class="bg-white rounded-lg shadow overflow-hidden hover:scale-105 transition transform"
                    data-aos="zoom-in" data-aos-delay="350">
                    <img src="{{ asset('assets/upcoming.jpg') }}" class="w-full h-40 object-cover">
                    <div class="p-4">
                        <h4 class="font-semibold">Upcoming Events</h4>
                        <p class="text-sm text-gray-600 mt-2">Click below for our upcoming events.</p>
                        <a href="#" class="mt-3 inline-block text-gray-600 text-sm hover:underline">Read more →</a>
                    </div>
                </article>

            </div>
        </div>
    </section>


    <!-- Include Swiper.js -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper-container', {
            loop: true,
            autoplay: { delay: 5000 },
            pagination: { el: '.swiper-pagination', clickable: true },
            navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
        });
    </script>
@endsection