@extends('layouts.app')

@section('title', 'Children\'s Ministry — Winners Chapel Int\'l Albany')

@section('content')

<!-- Hero -->
<section class="relative min-h-[50vh] flex items-center overflow-hidden bg-dark">
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1503919545889-aef636e10ad4?w=1920&q=80" alt="Children's Ministry"
             class="w-full h-full object-cover opacity-30">
        <div class="absolute inset-0 bg-gradient-to-r from-dark/95 via-dark/80 to-dark/60"></div>
        <div class="absolute inset-0 bg-grid opacity-20"></div>
    </div>

    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center py-24">
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 backdrop-blur border border-white/10 mb-6">
            <span class="w-2 h-2 rounded-full bg-secondary animate-pulse"></span>
            <span class="text-white/70 text-xs font-medium tracking-widest uppercase">Ages 0–12</span>
        </div>

        <h1 class="text-4xl md:text-5xl lg:text-6xl font-heading font-bold text-white" data-aos="fade-up">
            Children's Ministry
        </h1>
        <p class="mt-6 text-lg text-white/70 max-w-2xl mx-auto leading-relaxed" data-aos="fade-up" data-aos-delay="100">
            Teaching faith to children from one month to 12 years in a safe, joyful, and spiritually enriching environment.
        </p>
    </div>
</section>

<!-- Content -->
<section class="py-20 lg:py-28 bg-light">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-dark-muted/80 leading-relaxed mb-8 text-lg" data-aos="fade-up">
            The Children's Ministry is an energetic, entertaining, and dynamic department designed for our youngest members. We believe that every child is precious in the sight of God and deserves to be nurtured spiritually and emotionally.
        </p>

        <blockquote class="relative border-l-4 border-amber-500 pl-6 py-4 mb-12" data-aos="fade-right">
            <p class="text-dark/80 text-lg italic leading-relaxed">
                "Start children off on the way they should go, and even when they are old they will not turn from it."
            </p>
            <p class="text-dark-muted/60 text-sm mt-2">— Proverbs 22:6</p>
        </blockquote>

        <div class="flex items-center gap-4 mb-8" data-aos="fade-up">
            <div class="w-1 h-10 bg-amber-500 rounded-full"></div>
            <h2 class="text-2xl lg:text-3xl font-heading font-bold text-dark">What We Provide</h2>
        </div>

        <div class="grid sm:grid-cols-2 gap-6 mb-16">
            <div class="card p-6 bg-white flex items-start gap-4" data-aos="fade-up">
                <div class="w-10 h-10 rounded-xl bg-amber-100 flex items-center justify-center shrink-0">
                    <svg class="w-5 h-5 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                    </svg>
                </div>
                <p class="text-dark-muted/70 text-sm leading-relaxed">Ministry of the Word of Faith presented in ways children understand.</p>
            </div>

            <div class="card p-6 bg-white flex items-start gap-4" data-aos="fade-up" data-aos-delay="50">
                <div class="w-10 h-10 rounded-xl bg-amber-100 flex items-center justify-center shrink-0">
                    <svg class="w-5 h-5 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                </div>
                <p class="text-dark-muted/70 text-sm leading-relaxed">Trained church staff and committed volunteers who love children.</p>
            </div>

            <div class="card p-6 bg-white flex items-start gap-4" data-aos="fade-up" data-aos-delay="100">
                <div class="w-10 h-10 rounded-xl bg-amber-100 flex items-center justify-center shrink-0">
                    <svg class="w-5 h-5 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.066 2.573c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.573 1.066c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.066-2.573c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                </div>
                <p class="text-dark-muted/70 text-sm leading-relaxed">Modern teaching tools to make learning interactive and enjoyable.</p>
            </div>

            <div class="card p-6 bg-white flex items-start gap-4" data-aos="fade-up" data-aos-delay="150">
                <div class="w-10 h-10 rounded-xl bg-amber-100 flex items-center justify-center shrink-0">
                    <svg class="w-5 h-5 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                </div>
                <p class="text-dark-muted/70 text-sm leading-relaxed">Clean and safe toys, play equipment, and facilities.</p>
            </div>

            <div class="card p-6 bg-white flex items-start gap-4 sm:col-span-2" data-aos="fade-up" data-aos-delay="200">
                <div class="w-10 h-10 rounded-xl bg-amber-100 flex items-center justify-center shrink-0">
                    <svg class="w-5 h-5 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                    </svg>
                </div>
                <p class="text-dark-muted/70 text-sm leading-relaxed">A secure, well-monitored environment to ensure every child's safety.</p>
            </div>
        </div>

        <div class="rounded-2xl overflow-hidden shadow-xl" data-aos="zoom-in">
            <img src="https://images.unsplash.com/photo-1503919545889-aef636e10ad4?w=1200&q=80"
                 class="w-full h-72 lg:h-96 object-cover" alt="Children's Ministry">
        </div>
    </div>
</section>

@endsection
