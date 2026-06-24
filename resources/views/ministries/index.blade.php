@extends('layouts.app')

@section('title', 'Our Ministries — Winners Chapel Int\'l Albany')

@section('content')

<!-- Hero -->
<section class="relative min-h-[55vh] flex items-center overflow-hidden bg-dark">
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1511632765486-a01980e01a18?w=1920&q=80" alt="Ministries"
             class="w-full h-full object-cover opacity-30">
        <div class="absolute inset-0 bg-gradient-to-r from-dark/95 via-dark/80 to-dark/60"></div>
        <div class="absolute inset-0 bg-grid opacity-20"></div>
    </div>

    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center py-24">
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 backdrop-blur border border-white/10 mb-6">
            <span class="w-2 h-2 rounded-full bg-secondary animate-pulse"></span>
            <span class="text-white/70 text-xs font-medium tracking-widest uppercase">Our Departments</span>
        </div>

        <h1 class="text-4xl md:text-5xl lg:text-6xl font-heading font-bold text-white" data-aos="fade-up">
            Our Ministries
        </h1>
        <p class="mt-6 text-lg text-white/70 max-w-2xl mx-auto leading-relaxed" data-aos="fade-up" data-aos-delay="100">
            Every ministry is designed to build, nurture, and empower believers at all stages of life.
        </p>
    </div>
</section>

<!-- Ministries Grid -->
<section class="relative py-24 lg:py-32 bg-light overflow-hidden">
    <div class="absolute top-0 left-0 w-[500px] h-[500px] bg-secondary/5 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 right-0 w-[400px] h-[400px] bg-primary/5 rounded-full blur-3xl"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">

            @php
                $ministries = [
                    ['name' => 'Children\'s Ministry', 'route' => 'children', 'desc' => 'Raising children in the knowledge of God through fun, faith-filled teachings.', 'color' => 'from-amber-500/20 to-amber-600/10', 'icon' => 'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253'],
                    ['name' => 'Teens Ministry', 'route' => 'teens', 'desc' => 'Helping teenagers build identity, confidence, and strong spiritual foundations.', 'color' => 'from-purple-500/20 to-purple-600/10', 'icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z'],
                    ['name' => 'Youth Alive Fellowship', 'route' => 'yaf', 'desc' => 'Empowering young adults for purpose, leadership, and spiritual strength.', 'color' => 'from-blue-500/20 to-blue-600/10', 'icon' => 'M13 10V3L4 14h7v7l9-11h-7z'],
                    ['name' => 'Winners Satellite Fellowship', 'route' => 'wsf', 'desc' => 'House fellowship system designed to build community and spiritual strength.', 'color' => 'from-green-500/20 to-green-600/10', 'icon' => 'M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6'],
                    ['name' => 'WOFBI', 'route' => 'wofbi', 'desc' => 'Training believers for exploits through the Word of Faith Bible Institute.', 'color' => 'from-red-500/20 to-red-600/10', 'icon' => 'M12 14l9-5-9-5-9 5 9 5zm0 7l-9-5 9-5 9 5-9 5zm0-7l-9-5 9-5 9 5-9 5z'],
                ];
            @endphp

            @foreach($ministries as $m)
            <a href="{{ route($m['route']) }}" class="group card bg-white overflow-hidden" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                <div class="h-48 bg-gradient-to-br {{ $m['color'] }} flex items-center justify-center relative overflow-hidden">
                    <div class="absolute inset-0 bg-grid opacity-10"></div>
                    <svg class="w-16 h-16 text-dark/20 group-hover:scale-110 transition-transform duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="{{ $m['icon'] }}"/>
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-heading font-bold text-dark mb-2 group-hover:text-primary transition-colors">{{ $m['name'] }}</h3>
                    <p class="text-dark-muted/70 text-sm leading-relaxed">{{ $m['desc'] }}</p>
                    <div class="mt-4 flex items-center gap-2 text-sm font-medium text-primary opacity-0 group-hover:opacity-100 transition-opacity">
                        Learn More
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </div>
                </div>
            </a>
            @endforeach

        </div>
    </div>
</section>

@endsection
