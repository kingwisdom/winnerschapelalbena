@extends('layouts.app')

@section('title', 'Teens Ministry — Winners Chapel Int\'l Albany')

@section('content')

<!-- Hero -->
<section class="relative min-h-[50vh] flex items-center overflow-hidden bg-dark">
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac?w=1920&q=80" alt="Teens Ministry"
             class="w-full h-full object-cover opacity-30">
        <div class="absolute inset-0 bg-gradient-to-r from-dark/95 via-dark/80 to-dark/60"></div>
        <div class="absolute inset-0 bg-grid opacity-20"></div>
    </div>

    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center py-24">
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 backdrop-blur border border-white/10 mb-6">
            <span class="w-2 h-2 rounded-full bg-secondary animate-pulse"></span>
            <span class="text-white/70 text-xs font-medium tracking-widest uppercase">Ages 13–19</span>
        </div>

        <h1 class="text-4xl md:text-5xl lg:text-6xl font-heading font-bold text-white" data-aos="fade-up">
            Teens Ministry
        </h1>
        <p class="mt-6 text-lg text-white/70 max-w-2xl mx-auto leading-relaxed" data-aos="fade-up" data-aos-delay="100">
            Empowering teenagers to grow spiritually, discover purpose, and navigate life with God's wisdom.
        </p>
    </div>
</section>

<!-- Content -->
<section class="py-20 lg:py-28 bg-light">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-dark-muted/80 leading-relaxed mb-8 text-lg" data-aos="fade-up">
            Today's youth face new and complex challenges. We believe God's eternal truths provide the answers they need. Our mission is to raise responsible citizens and visionary leaders who influence society and stand boldly for Christ.
        </p>

        <p class="text-dark-muted/80 leading-relaxed mb-12" data-aos="fade-up" data-aos-delay="100">
            We help teens experience God's freedom spiritually, socially, and emotionally. They are trained to apply Scripture to real-life situations, strengthening their confidence and walk with God.
        </p>

        <!-- Mission -->
        <div class="card p-8 lg:p-10 bg-white border-l-4 border-purple-500 mb-12" data-aos="zoom-in">
            <h3 class="text-xl font-heading font-bold text-dark mb-3">Our Mission</h3>
            <p class="text-dark-muted/70 leading-relaxed">
                To raise teenagers who understand their identity in Christ, embrace discipline, develop strong character, and conquer their world for Jesus.
            </p>
        </div>

        <!-- Scripture -->
        <blockquote class="relative border-l-4 border-purple-500 pl-6 py-4 mb-12" data-aos="fade-right">
            <p class="text-dark/80 text-lg italic leading-relaxed">
                "Let no one despise your youth, but be an example to believers in word, conduct, love, spirit, faith, purity."
            </p>
            <p class="text-dark-muted/60 text-sm mt-2">— 1 Timothy 4:12</p>
        </blockquote>

        <div class="rounded-2xl overflow-hidden shadow-xl" data-aos="fade-up">
            <img src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac?w=1200&q=80"
                 class="w-full h-72 lg:h-96 object-cover" alt="Teens Ministry">
        </div>
    </div>
</section>

@endsection
