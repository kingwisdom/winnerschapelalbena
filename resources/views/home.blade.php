@extends('layouts.app')

@section('title', 'Home — Winners Chapel Int\'l ALBANY')

@section('content')

<!-- Hero -->
<section class="relative min-h-screen flex items-center overflow-hidden bg-dark">
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1438232992991-995b7058bbb3?w=1920&q=80" alt="Church worship"
            class="w-full h-full object-cover opacity-30 scale-105">
        <div class="absolute inset-0 bg-gradient-to-r from-dark/95 via-dark/80 to-dark/60"></div>
        <div class="absolute inset-0 bg-grid opacity-20"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-32 lg:py-40">
        <div class="grid lg:grid-cols-2 gap-16 items-center">

            <!-- Left Content -->
            <div class="space-y-8" data-aos="fade-right">
                <div
                    class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 backdrop-blur border border-white/10">
                    <span class="w-2 h-2 rounded-full bg-secondary animate-pulse"></span>
                    <span class="text-white/70 text-xs font-medium tracking-widest uppercase">Welcome to</span>
                </div>

                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-heading font-bold text-white leading-tight"
                    data-aos="fade-up" data-aos-delay="100">
                    Winners Chapel
                    <span class="block text-secondary">Int'l, Albany</span>
                </h1>

                <p class="text-lg sm:text-xl text-white/70 max-w-xl leading-relaxed" data-aos="fade-up"
                    data-aos-delay="200">
                    "The hour has come to liberate the world from all oppressions of the devil through the preaching of
                    the Word of Faith."
                </p>

                <div class="flex flex-wrap gap-4" data-aos="fade-up" data-aos-delay="300">
                    <a href="https://youtube.com/@winnerschapelintlalbany1373?si=h5IfjYNjl4Vjpi0A" target="_blank"
                        class="btn-gold text-base px-8 py-3.5">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                        </svg>
                        Watch Live
                    </a>
                    <a href="{{ route('give') }}"
                        class="btn-outline text-base px-8 py-3.5 border-white/30 hover:border-secondary hover:text-secondary">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                        Give
                    </a>
                </div>
            </div>

            <!-- Right - Image Carousel -->
            <div data-aos="fade-left" data-aos-delay="200">
                <div class="relative">
                    <div
                        class="absolute -inset-4 bg-gradient-to-br from-secondary/20 to-primary/20 rounded-3xl blur-2xl">
                    </div>
                    <div class="relative overflow-hidden rounded-2xl shadow-2xl">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="{{asset('assets/group.jpg')}}"
                                        class="w-full h-[400px] lg:h-[500px] object-cover" alt="Winners Chapel">
                                </div>
                                <div class="swiper-slide">
                                    <img src="http://www.winnerschapelmanchester.org.uk/wp-content/uploads/2026/01/jan-2026-theme.png"
                                        class="w-full h-[400px] lg:h-[500px] object-cover" alt="Service">
                                </div>
                            </div>
                            <div class="swiper-pagination !bottom-4"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll indicator -->
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 text-white/40">
        <span class="text-xs tracking-widest uppercase">Scroll</span>
        <div class="w-5 h-8 rounded-full border-2 border-white/20 flex justify-center pt-1.5">
            <div class="w-1 h-2 rounded-full bg-secondary animate-bounce"></div>
        </div>
    </div>
</section>

<!-- Info Bar -->
<section class="relative -mt-16 z-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-3 gap-6" data-aos="fade-up">
            <div class="card p-8 text-center bg-white">
                <div class="w-14 h-14 rounded-2xl bg-secondary/10 flex items-center justify-center mx-auto mb-5">
                    <svg class="w-7 h-7 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <p class="text-xs uppercase tracking-widest text-dark-muted/60 mb-2">Next Service</p>
                <p class="text-xl font-heading font-bold text-dark">Sunday<br><span class="text-primary">09:00 - 11:00
                        AM</span></p>
            </div>

            <div class="card p-8 text-center bg-white">
                <div class="w-14 h-14 rounded-2xl bg-secondary/10 flex items-center justify-center mx-auto mb-5">
                    <svg class="w-7 h-7 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
                <p class="text-xs uppercase tracking-widest text-dark-muted/60 mb-2">Location</p>
                <p class="text-xl font-heading font-bold text-dark">1524 Central Ave,<br><span
                        class="text-primary">Albany, NY 12205</span></p>
            </div>

            <div class="card p-8 text-center bg-white">
                <div class="w-14 h-14 rounded-2xl bg-secondary/10 flex items-center justify-center mx-auto mb-5">
                    <svg class="w-7 h-7 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                </div>
                <p class="text-xs uppercase tracking-widest text-dark-muted/60 mb-2">Contact</p>
                <p class="text-xl font-heading font-bold text-dark">
                    <a href="tel:+15187134041" class="hover:text-primary transition-colors">+1 (518) 713-4041</a>
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Services -->
<section class="relative py-24 lg:py-32 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-b from-[#1A1A2E] via-[#2D2D44] to-dark"></div>
    <div class="absolute inset-0 bg-grid opacity-10"></div>
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[800px] h-[800px] bg-secondary/5 rounded-full blur-3xl">
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
            <span
                class="inline-block px-4 py-1.5 rounded-full bg-secondary/10 text-secondary text-xs font-semibold tracking-widest uppercase mb-4">Our
                Services</span>
            <h2 class="section-title text-white red-underline pb-4">Join Us in Worship</h2>
            <p class="section-subtitle text-white/60 mt-6">Experience the life-transforming power of God's Word through
                our services designed to build your faith.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Communion Service -->
            <div class="group relative bg-white/5 backdrop-blur-sm rounded-2xl overflow-hidden border border-white/10 hover:border-secondary/50 transition-all duration-500 hover:-translate-y-2"
                data-aos="fade-up">
                <div class="h-56 overflow-hidden">
                    <img src="{{ asset('assets/communion.png') }}" alt="Communion Service"
                        class="w-full h-full object-cover group-hover:scale-110 transition-all duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-dark/80 via-transparent to-transparent"></div>
                </div>
                <div class="p-8">
                    <h3 class="text-xl font-heading font-bold text-white mb-3">Communion Service</h3>
                    <p class="text-white/60 text-sm leading-relaxed">Experience the life-transforming power of the
                        Communion every week.</p>
                </div>
                <div class="absolute top-4 left-4">
                    <span class="pill bg-secondary/20 text-secondary border border-secondary/30">Wed 7:00 PM</span>
                </div>
            </div>

            <!-- Sunday Service -->
            <div class="group relative bg-white/5 backdrop-blur-sm rounded-2xl overflow-hidden border border-white/10 hover:border-secondary/50 transition-all duration-500 hover:-translate-y-2"
                data-aos="fade-up" data-aos-delay="100">
                <div class="h-56 overflow-hidden">
                    <img src="{{ asset('assets/sunday_service.png') }}" alt="Sunday Service"
                        class="w-full h-full object-cover group-hover:scale-110 transition-all duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-dark/80 via-transparent to-transparent"></div>
                </div>
                <div class="p-8">
                    <h3 class="text-xl font-heading font-bold text-white mb-3">Sunday Worship Service</h3>
                    <p class="text-white/60 text-sm leading-relaxed">Join us every Sunday for a powerful encounter with
                        God's Word.</p>
                </div>
                <div class="absolute top-4 left-4">
                    <span class="pill bg-secondary/20 text-secondary border border-secondary/30">Sun 9:00 AM</span>
                </div>
            </div>

            <!-- Covenant Hour -->
            <div class="group relative bg-white/5 backdrop-blur-sm rounded-2xl overflow-hidden border border-white/10 hover:border-secondary/50 transition-all duration-500 hover:-translate-y-2"
                data-aos="fade-up" data-aos-delay="200">
                <div class="h-56 overflow-hidden">
                    <img src="{{ asset('assets/COP.jpg') }}" alt="Covenant Hour of Prayer"
                        class="w-full h-full object-cover group-hover:scale-110 transition-all duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-dark/80 via-transparent to-transparent"></div>
                </div>
                <div class="p-8">
                    <h3 class="text-xl font-heading font-bold text-white mb-3">Covenant Hour of Prayer</h3>
                    <p class="text-white/60 text-sm leading-relaxed">Start your day with divine empowerment through
                        early morning prayer.</p>
                </div>
                <div class="absolute top-4 left-4">
                    <span class="pill bg-secondary/20 text-secondary border border-secondary/30">Mon–Fri 6:00 AM</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Blog -->
<section class="relative py-24 lg:py-32 bg-light overflow-hidden">
    <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-secondary/5 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-primary/5 rounded-full blur-3xl"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-end gap-6 mb-16" data-aos="fade-up">
            <div>
                <span
                    class="inline-block px-4 py-1.5 rounded-full bg-primary/10 text-primary text-xs font-semibold tracking-widest uppercase mb-4">Blog</span>
                <h2 class="section-title red-underline pb-4">Latest Information</h2>
                <p class="section-subtitle mt-6 mb-0">Stay updated with the latest news and announcements from our
                    church.</p>
            </div>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

            @forelse($blogs as $post)
            <a href="{{ route('blog.show', $post->slug) }}" class="group card bg-white overflow-hidden"
                data-aos="fade-up">
                <div class="h-52 overflow-hidden relative">
                    <!-- <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" -->
                    <img src="https://wcialbany.org/manage/storage/app/public/{{ $post->image }}"
                        alt="{{ $post->title }}"
                        class="w-full h-full object-cover group-hover:scale-110 transition-all duration-700">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    </div>
                </div>

                <div class="p-6">
                    <h4
                        class="font-heading font-bold text-lg text-dark mb-2 group-hover:text-primary transition-colors">
                        {{ $post->title }}
                    </h4>
                    <p class="text-dark-muted/70 text-sm leading-relaxed">
                        {{ Str::limit($post->content, 200) }}
                    </p>

                    <span
                        class="mt-4 inline-flex items-center gap-2 text-sm font-medium text-primary group-hover:gap-3 transition-all">
                        Read More
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </span>
                </div>
            </a>
            @empty
            <div class="col-span-full text-center py-20">
                <div class="w-20 h-20 rounded-2xl bg-primary/10 flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                    </svg>
                </div>
                <p class="text-dark-muted/60 text-lg">No posts created yet.</p>
            </div>
            @endforelse
        </div>
    </div>
</section>

<!-- Swiper -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script>
    new Swiper('.swiper-container', {
        loop: true,
        autoplay: {
            delay: 5000
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
            renderBullet: function(index, className) {
                return '<span class="' + className +
                    '" style="background: #C9A94E; width: 10px; height: 10px;"></span>';
            }
        },
    });
</script>
@endsection