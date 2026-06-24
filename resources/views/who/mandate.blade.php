@extends('layouts.app')

@section('title', 'The Mandate — Winners Chapel Int\'l ALBANY')

@section('content')

<!-- Hero -->
<section class="relative min-h-[55vh] flex items-center overflow-hidden bg-dark">
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1501281668745-f7f57925c3b4?w=1920&q=80" alt="The Mandate"
             class="w-full h-full object-cover opacity-30">
        <div class="absolute inset-0 bg-gradient-to-r from-dark/95 via-dark/80 to-dark/60"></div>
        <div class="absolute inset-0 bg-grid opacity-20"></div>
    </div>

    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center py-24">
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 backdrop-blur border border-white/10 mb-6">
            <span class="w-2 h-2 rounded-full bg-secondary animate-pulse"></span>
            <span class="text-white/70 text-xs font-medium tracking-widest uppercase">Divine Assignment</span>
        </div>

        <h1 class="text-4xl md:text-5xl lg:text-6xl font-heading font-bold text-white" data-aos="fade-up">
            The Mandate
        </h1>
        <p class="mt-6 text-lg text-white/70 max-w-2xl mx-auto leading-relaxed" data-aos="fade-up" data-aos-delay="100">
            The divine assignment delivered to Bishop David O. Oyedepo in an eighteen-hour vision.
        </p>
    </div>
</section>

<!-- Main Content -->
<section class="py-20 lg:py-28 bg-light">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center gap-4 mb-8" data-aos="fade-right">
            <div class="w-1 h-10 bg-secondary rounded-full"></div>
            <h2 class="text-2xl lg:text-3xl font-heading font-bold text-dark">The Winners Mandate</h2>
        </div>

        <div class="space-y-6 text-dark-muted/80 leading-relaxed" data-aos="fade-up">
            <p>Winners Chapel International, Albany is a branch of the Living Faith Church Worldwide and part of a global network committed to the liberation of humanity through the teaching and preaching of the Word of Faith.</p>

            <p>Living Faith Church Worldwide, also known as Winners' Chapel International, is an end-time liberation ministry presided over by Bishop David O. Oyedepo, with global headquarters in Canaanland, Ota, Nigeria.</p>

            <p>Our core mission is the development and liberation of mankind by awakening the God-given potentials inside people of every race and nation through Christ-centered teaching.</p>
        </div>

        <!-- Vision Quote -->
        <div class="relative my-16" data-aos="zoom-in">
            <div class="absolute inset-0 bg-gradient-to-r from-secondary/5 to-secondary/10 rounded-3xl"></div>
            <div class="relative bg-white/80 backdrop-blur rounded-3xl border border-secondary/20 p-10 lg:p-14">
                <svg class="w-10 h-10 text-secondary/40 mb-6" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                </svg>
                <p class="text-dark text-xl italic leading-relaxed">
                    "The hour has come to liberate the world from all oppressions of the devil through the preaching of the Word of Faith, and I am sending you to undertake this task."
                </p>
            </div>
        </div>

        <div class="space-y-6 text-dark-muted/80 leading-relaxed" data-aos="fade-up">
            <p>This mandate was delivered to Bishop Oyedepo during an eighteen-hour encounter in May 1981. Since then, the church has continued to spread worldwide, bringing deliverance, healing, and transformation to millions.</p>

            <p>Testimonies of dramatic changes, breakthroughs, and miracles continue to validate the divine nature of this assignment and its impact across the nations.</p>
        </div>
    </div>
</section>

<!-- Stats -->
<section class="relative py-20 bg-dark overflow-hidden">
    <div class="absolute inset-0 bg-grid opacity-10"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-secondary/5 rounded-full blur-3xl"></div>

    <div class="relative max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-3 gap-8">
            <div class="text-center" data-aos="fade-up">
                <p class="text-5xl lg:text-6xl font-heading font-bold text-secondary">1981</p>
                <p class="text-white/60 mt-3 text-sm uppercase tracking-widest">Year of the Mandate</p>
            </div>
            <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                <p class="text-5xl lg:text-6xl font-heading font-bold text-secondary">18</p>
                <p class="text-white/60 mt-3 text-sm uppercase tracking-widest">Hour Vision</p>
            </div>
            <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                <p class="text-5xl lg:text-6xl font-heading font-bold text-secondary">Global</p>
                <p class="text-white/60 mt-3 text-sm uppercase tracking-widest">Reach & Impact</p>
            </div>
        </div>
    </div>
</section>

@endsection
