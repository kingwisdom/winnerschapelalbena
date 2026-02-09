@extends('layouts.app')

@section('title', 'Home — Winners Chapel Int\'l ALBANY')

@section('content')
<!-- HERO SLIDER -->
<section id="home" class="relative bg-gradient-to-b from-white to-red-500 overflow-hidden">
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
                <a href="https://youtube.com/@winnerschapelintlalbany1373?si=h5IfjYNjl4Vjpi0A"
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
        </div>

        <!-- HERO SLIDER -->
        <div class="flex items-center justify-center" data-aos="fade-left">
            <div class="w-full max-w-md relative">
                <div class="overflow-hidden rounded-lg shadow-lg">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="https://www.winnerschapelmanchester.org.uk/wp-content/uploads/2026/02/feb-2026-1-1.png"
                                    class="w-full h-auto object-cover" alt="Winners Chapel">
                            </div>
                            <div class="swiper-slide">
                                <img src="http://www.winnerschapelmanchester.org.uk/wp-content/uploads/2026/01/jan-2026-theme.png"
                                    class="w-full h-auto object-cover" alt="Service">
                            </div>
                            <!-- <div class="swiper-slide">
                                <img src="{{ asset('assets/group.jpg') }}" class="w-full h-auto object-cover"
                                    alt="Community">
                            </div> -->
                        </div>

                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-next"></div>
                        <!-- <div class="swiper-button-prev"></div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- SERVICES -->
<section id="services" class="relative bg-gradient-to-b from-[#5a0000] to-black py-20">

    <div class="max-w-7xl mx-auto px-6">

        <!-- Top Info Row -->
        <div class="grid gap-6 md:grid-cols-3 mb-16">

            <!-- Next Service -->
            <div class="bg-white text-center p-8 rounded-md shadow-xl hover:-translate-y-1 transition duration-300">
                <p class="text-sm uppercase tracking-widest text-gray-500">
                    Next Service
                </p>
                <p class="mt-3 text-xl font-bold text-gray-900">
                    Sunday <br> 09:00 AM - 11:00 AM
                </p>
            </div>

            <!-- Location -->
            <div class="bg-white text-center p-8 rounded-md shadow-xl hover:-translate-y-1 transition duration-300">
                <p class="text-sm uppercase tracking-widest text-gray-500">
                    Location
                </p>
                <p class="mt-3 text-xl font-bold text-gray-900">
                    1524 Central Ave , Albany , NY, 12205
                </p>
            </div>

            <!-- Contact -->
            <div class="bg-white text-center p-8 rounded-md shadow-xl hover:-translate-y-1 transition duration-300">
                <p class="text-sm uppercase tracking-widest text-gray-500">
                    Contact
                </p>
                <p class="mt-3 text-xl font-bold text-gray-900">
                    <a href="tel:+15187134041" class="hover:text-[#7a0000] transition">
                        +1 (518) 713-4041
                    </a>
                </p>
            </div>

        </div>

        <!-- Section Heading -->
        <div class="text-center max-w-2xl mx-auto mb-16">
            <h2 class="text-4xl font-bold uppercase tracking-wider text-white">
                Services
            </h2>
            <p class="mt-4 text-gray-300">
                Faith teaching, community outreach, training
            </p>
        </div>

        <!-- Service Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">

            <!-- Communion Service -->
            <div
                class="bg-white rounded-xl overflow-hidden shadow-xl hover:-translate-y-2 hover:shadow-2xl transition duration-500">
                <div class="h-56 overflow-hidden">
                    <img src="{{ asset('assets/communion.png') }}" alt="Communion Service"
                        class="w-full h-full object-cover hover:scale-110 transition duration-700">
                </div>
                <div class="p-8 text-center">
                    <h3 class="text-xl font-bold mb-3">
                        Communion Service
                    </h3>
                    <p class="text-gray-600">
                        Experience the life-transforming power of the Communion every week.
                    </p>
                </div>
            </div>

            <!-- Sunday Service -->
            <div
                class="bg-white rounded-xl overflow-hidden shadow-xl hover:-translate-y-2 hover:shadow-2xl transition duration-500">
                <div class="h-56 overflow-hidden">
                    <img src="{{ asset('assets/sunday_service.png') }}" alt="Sunday Service"
                        class="w-full h-full object-cover hover:scale-110 transition duration-700">
                    <!-- manage/storage/app/public/' . $post->image -->
                </div>
                <div class="p-8 text-center">
                    <h3 class="text-xl font-bold mb-3">
                        Sunday Worship Service
                    </h3>
                    <p class="text-gray-600">
                        Join us every Sunday for a powerful encounter with God’s Word.
                    </p>
                </div>
            </div>

            <!-- Covenant Hour of Prayer -->
            <div
                class="bg-white rounded-xl overflow-hidden shadow-xl hover:-translate-y-2 hover:shadow-2xl transition duration-500">
                <div class="h-56 overflow-hidden">
                    <img src="https://www.winnerschapelny.org/images/2021/11/12/whatsapp-image-2021-11-11-at-2.42.11-pm.jpeg"
                        alt="Covenant Hour of Prayer"
                        class="w-full h-full object-cover hover:scale-110 transition duration-700">
                </div>
                <div class="p-8 text-center">
                    <h3 class="text-xl font-bold mb-3">
                        Covenant Hour of Prayer
                    </h3>
                    <p class="text-gray-600">
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
            <h3 class="text-2xl font-bold text-gray-900">Latest Information</h3>
            <!-- <a href="#" class="text-gray-600 hover:underline font-medium">View All →</a> -->
        </div>

        <div x-data="{ open: false, title: '', content: '', image: '' }" class="grid grid-cols-1 md:grid-cols-3 gap-6">

            @forelse($blogs as $post)
            <article class="bg-white rounded-lg shadow overflow-hidden hover:scale-105 transition transform"
                data-aos="zoom-in" data-aos-delay="150">
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}"
                    class="w-full h-40 object-cover">

                <div class="p-4">
                    <h4 class="font-semibold">{{ $post->title }}</h4>
                    <p class="text-sm text-gray-600 mt-2">
                        {{ Str::limit($post->content, 250) }}
                    </p>

                    <button @click="
                    open = true; 
                    title = '{{ addslashes($post->title) }}'; 
                    content = `{{ addslashes($post->content) }}`; 
                    image = '{{ asset('manage/storage/app/public/' . $post->image) }}'
                " class="mt-3 inline-block text-gray-600 text-sm hover:underline">
                        Read more →
                    </button>
                </div>
            </article>
            @empty
            <p class="text-slate-600">No posts created yet.</p>
            @endforelse


            <!-- MODAL -->
            <div x-show="open" x-transition
                class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
                <div @click.away="open = false"
                    class="bg-white w-11/12 md:w-2/3 lg:w-1/2 rounded-lg shadow-lg overflow-hidden">
                    <img :src="image" class="w-full h-56 object-cover">

                    <div class="p-6 max-h-[60vh] overflow-y-auto">
                        <h2 class="text-xl font-bold mb-4" x-text="title"></h2>
                        <p class="text-gray-700 leading-relaxed" x-text="content"></p>
                    </div>

                    <div class="p-4 text-right border-t">
                        <button @click="open = false"
                            class="px-4 py-2 bg-gray-800 text-white rounded hover:bg-gray-700">
                            Close
                        </button>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>


<!-- Include Swiper.js -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="//unpkg.com/alpinejs" defer></script>
<script>
    const swiper = new Swiper('.swiper-container', {
        loop: true,
        autoplay: {
            delay: 5000
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev'
        },
    });
</script>
@endsection