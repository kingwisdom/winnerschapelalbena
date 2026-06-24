@extends('layouts.app')

@section('title', 'Winners Satellite Fellowship — Winners Chapel Int\'l Albany')

@section('content')

<!-- Hero -->
<section class="relative min-h-[50vh] flex items-center overflow-hidden bg-dark">
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1438232992991-995b7058bbb3?w=1920&q=80" alt="WSF"
             class="w-full h-full object-cover opacity-30">
        <div class="absolute inset-0 bg-gradient-to-r from-dark/95 via-dark/80 to-dark/60"></div>
        <div class="absolute inset-0 bg-grid opacity-20"></div>
    </div>

    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center py-24">
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 backdrop-blur border border-white/10 mb-6">
            <span class="w-2 h-2 rounded-full bg-secondary animate-pulse"></span>
            <span class="text-white/70 text-xs font-medium tracking-widest uppercase">Home Fellowship</span>
        </div>

        <h1 class="text-4xl md:text-5xl lg:text-6xl font-heading font-bold text-white" data-aos="fade-up">
            Winners Satellite Fellowship
        </h1>
        <p class="mt-6 text-lg text-white/70 max-w-2xl mx-auto leading-relaxed" data-aos="fade-up" data-aos-delay="100">
            Building faith, community, and spiritual strength through small-group fellowship in homes.
        </p>
    </div>
</section>

<!-- Content -->
<section class="py-20 lg:py-28 bg-light">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Scripture -->
        <blockquote class="relative border-l-4 border-green-600 pl-6 py-4 mb-12" data-aos="fade-right">
            <p class="text-dark/80 text-lg italic leading-relaxed">
                "And they, continuing daily with one accord in the temple, and breaking bread from house to house, did eat their meat with gladness and singleness of heart, praising God, and having favour with all the people. And the Lord added to the church daily such as should be saved."
            </p>
            <p class="text-dark-muted/60 text-sm mt-2">— Acts 2:46–47</p>
        </blockquote>

        <p class="text-dark-muted/80 leading-relaxed mb-8 text-lg" data-aos="fade-up">
            Winners Satellite Fellowship (WSF) is the home-cell fellowship structure of the Living Faith Church Worldwide. It is designed to foster spiritual growth, accountability, and strong relationships among members through intimate gatherings in homes across various communities.
        </p>

        <!-- Purpose -->
        <div class="card p-8 lg:p-10 bg-white border-l-4 border-green-600 mb-12" data-aos="zoom-in">
            <h3 class="text-xl font-heading font-bold text-dark mb-3">Our Purpose</h3>
            <p class="text-dark-muted/70 leading-relaxed">
                WSF brings the church closer to the people, enabling members to fellowship, pray, study Scriptures together, and support one another in love. It is a platform where discipleship is strengthened, needs are met, and every believer is nurtured within a family-like environment.
            </p>
        </div>

        <!-- Why WSF -->
        <div class="flex items-center gap-4 mb-8" data-aos="fade-up">
            <div class="w-1 h-10 bg-green-600 rounded-full"></div>
            <h2 class="text-2xl lg:text-3xl font-heading font-bold text-dark">Why WSF?</h2>
        </div>

        <div class="grid sm:grid-cols-2 gap-6 mb-16" data-aos="fade-up">
            <div class="card p-6 bg-white flex items-start gap-4">
                <div class="w-10 h-10 rounded-xl bg-green-100 flex items-center justify-center shrink-0">
                    <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                </div>
                <div>
                    <h4 class="font-medium text-dark mb-1">Relationships</h4>
                    <p class="text-dark-muted/60 text-sm">Builds strong Christian relationships and community support.</p>
                </div>
            </div>

            <div class="card p-6 bg-white flex items-start gap-4">
                <div class="w-10 h-10 rounded-xl bg-green-100 flex items-center justify-center shrink-0">
                    <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                    </svg>
                </div>
                <div>
                    <h4 class="font-medium text-dark mb-1">Growth</h4>
                    <p class="text-dark-muted/60 text-sm">Members grow through prayers, Bible study, and shared testimonies.</p>
                </div>
            </div>

            <div class="card p-6 bg-white flex items-start gap-4">
                <div class="w-10 h-10 rounded-xl bg-green-100 flex items-center justify-center shrink-0">
                    <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                </div>
                <div>
                    <h4 class="font-medium text-dark mb-1">Support</h4>
                    <p class="text-dark-muted/60 text-sm">Provides care, encouragement, and spiritual accountability.</p>
                </div>
            </div>

            <div class="card p-6 bg-white flex items-start gap-4">
                <div class="w-10 h-10 rounded-xl bg-green-100 flex items-center justify-center shrink-0">
                    <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                    </svg>
                </div>
                <div>
                    <h4 class="font-medium text-dark mb-1">Value</h4>
                    <p class="text-dark-muted/60 text-sm">Every member is known, valued, and spiritually supported.</p>
                </div>
            </div>
        </div>

        <div class="rounded-2xl overflow-hidden shadow-xl" data-aos="fade-up">
            <img src="{{ asset('assets/wsf.png') }}" class="w-full h-72 lg:h-96 object-cover" alt="WSF">
        </div>
    </div>
</section>

@endsection
