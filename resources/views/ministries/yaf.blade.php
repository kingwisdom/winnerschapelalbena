@extends('layouts.app')

@section('title', 'Youth Alive Fellowship — Winners Chapel Int\'l Albany')

@section('content')

<!-- Hero -->
<section class="relative min-h-[50vh] flex items-center overflow-hidden bg-dark">
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1523580494863-6f3031224c94?w=1920&q=80" alt="Youth Alive"
             class="w-full h-full object-cover opacity-30">
        <div class="absolute inset-0 bg-gradient-to-r from-dark/95 via-dark/80 to-dark/60"></div>
        <div class="absolute inset-0 bg-grid opacity-20"></div>
    </div>

    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center py-24">
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 backdrop-blur border border-white/10 mb-6">
            <span class="w-2 h-2 rounded-full bg-secondary animate-pulse"></span>
            <span class="text-white/70 text-xs font-medium tracking-widest uppercase">Young Adults</span>
        </div>

        <h1 class="text-4xl md:text-5xl lg:text-6xl font-heading font-bold text-white" data-aos="fade-up">
            Youth Alive Fellowship
        </h1>
        <p class="mt-6 text-lg text-white/70 max-w-2xl mx-auto leading-relaxed" data-aos="fade-up" data-aos-delay="100">
            Empowering the next generation to follow God's plan for their lives with confidence, excellence, and purpose.
        </p>
    </div>
</section>

<!-- Content -->
<section class="py-20 lg:py-28 bg-light">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-dark-muted/80 leading-relaxed mb-8 text-lg" data-aos="fade-up">
            Youth Alive Fellowship (YAF) is the ministry arm of Winners Chapel designed for young adults. This ministry helps them navigate the transition into adulthood with spiritual guidance, community, and biblical wisdom.
        </p>

        <!-- Empowerment -->
        <div class="card p-8 lg:p-10 bg-white border-l-4 border-blue-600 mb-12" data-aos="zoom-in">
            <h3 class="text-xl font-heading font-bold text-dark mb-3">Empowering the Next Generation</h3>
            <p class="text-dark-muted/70 leading-relaxed">
                Entering adulthood often comes with big decisions — education, career paths, relationships, personal purpose. YAF exists to provide mentorship, scriptural insight, and a supportive environment where young adults grow in Christ and discover the direction God has for their lives.
            </p>
        </div>

        <!-- Scripture -->
        <blockquote class="relative border-l-4 border-blue-600 pl-6 py-4 mb-12" data-aos="fade-right">
            <p class="text-dark/80 text-lg italic leading-relaxed">
                "For I know the plans I have for you, declares the Lord, plans to prosper you and not to harm you, plans to give you hope and a future."
            </p>
            <p class="text-dark-muted/60 text-sm mt-2">— Jeremiah 29:11</p>
        </blockquote>

        <!-- Programs -->
        <div class="flex items-center gap-4 mb-8" data-aos="fade-up">
            <div class="w-1 h-10 bg-blue-600 rounded-full"></div>
            <h2 class="text-2xl lg:text-3xl font-heading font-bold text-dark">Youth Programs</h2>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4 mb-16" data-aos="fade-up">
            @foreach(['Youth Alive Monthly Congress', 'Praise Night', 'Marathon Prayer Night', 'AYAC', 'SHABACH', 'HALLELUJAH NIGHT', 'Game Night'] as $program)
            <div class="card p-4 bg-white flex items-center gap-3">
                <div class="w-2 h-2 rounded-full bg-blue-600 shrink-0"></div>
                <span class="text-dark-muted/80 text-sm">{{ $program }}</span>
            </div>
            @endforeach
        </div>

        <!-- Focus -->
        <div class="flex items-center gap-4 mb-8" data-aos="fade-up">
            <div class="w-1 h-10 bg-primary rounded-full"></div>
            <h2 class="text-2xl lg:text-3xl font-heading font-bold text-dark">Our Focus</h2>
        </div>

        <div class="grid sm:grid-cols-2 gap-6 mb-16" data-aos="fade-up">
            <div class="card p-6 bg-white">
                <div class="flex items-center gap-3 mb-2">
                    <svg class="w-5 h-5 text-blue-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                    </svg>
                    <span class="text-dark font-medium">Spiritual Growth</span>
                </div>
                <p class="text-dark-muted/60 text-sm">Helping young adults grow spiritually and build strong foundations.</p>
            </div>

            <div class="card p-6 bg-white">
                <div class="flex items-center gap-3 mb-2">
                    <svg class="w-5 h-5 text-blue-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                    </svg>
                    <span class="text-dark font-medium">Fellowship</span>
                </div>
                <p class="text-dark-muted/60 text-sm">Creating environments for authentic fellowship and friendships.</p>
            </div>

            <div class="card p-6 bg-white">
                <div class="flex items-center gap-3 mb-2">
                    <svg class="w-5 h-5 text-blue-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                    </svg>
                    <span class="text-dark font-medium">Mentorship</span>
                </div>
                <p class="text-dark-muted/60 text-sm">Providing mentorship for career, calling, and life decisions.</p>
            </div>

            <div class="card p-6 bg-white">
                <div class="flex items-center gap-3 mb-2">
                    <svg class="w-5 h-5 text-blue-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                    </svg>
                    <span class="text-dark font-medium">Influence</span>
                </div>
                <p class="text-dark-muted/60 text-sm">Raising a generation of influencers fulfilling God's purpose.</p>
            </div>
        </div>

        <div class="rounded-2xl overflow-hidden shadow-xl" data-aos="fade-up">
            <img src="{{ asset('assets/youth.jpg') }}" class="w-full h-72 lg:h-96 object-cover" alt="Youth Ministry">
        </div>
    </div>
</section>

@endsection
