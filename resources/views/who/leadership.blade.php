@extends('layouts.app')

@section('title', 'Our Leadership — Winners Chapel Int\'l ALBANY')

@section('content')

<!-- Hero -->
<section class="relative min-h-[55vh] flex items-center overflow-hidden bg-dark">
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1511632765486-a01980e01a18?w=1920&q=80" alt="Leadership"
             class="w-full h-full object-cover opacity-30">
        <div class="absolute inset-0 bg-gradient-to-r from-dark/95 via-dark/80 to-dark/60"></div>
        <div class="absolute inset-0 bg-grid opacity-20"></div>
    </div>

    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center py-24">
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 backdrop-blur border border-white/10 mb-6">
            <span class="w-2 h-2 rounded-full bg-secondary animate-pulse"></span>
            <span class="text-white/70 text-xs font-medium tracking-widest uppercase">Meet Our Leaders</span>
        </div>

        <h1 class="text-4xl md:text-5xl lg:text-6xl font-heading font-bold text-white" data-aos="fade-up">
            Our Leadership
        </h1>
        <p class="mt-6 text-lg text-white/70 max-w-2xl mx-auto leading-relaxed" data-aos="fade-up" data-aos-delay="100">
            Meet the dedicated leaders God has placed over this commission to guide, teach, and serve His people.
        </p>
    </div>
</section>

<!-- Leadership Card -->
<section class="py-20 lg:py-28 bg-light">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="card bg-white overflow-hidden flex flex-col lg:flex-row" data-aos="fade-up">
            <!-- Image -->
            <div class="lg:w-2/5 relative overflow-hidden bg-gradient-to-br from-primary/5 to-secondary/5">
                <img src="{{ asset('assets/pastor.jpg') }}" alt="Pastor Osas Ighodaro"
                     class="w-full h-72 lg:h-full object-cover lg:absolute lg:inset-0 transition-transform duration-700 hover:scale-105">
            </div>

            <!-- Content -->
            <div class="lg:w-3/5 p-8 lg:p-12">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-secondary/10 text-secondary text-xs font-semibold tracking-widest uppercase mb-4">
                    Resident Pastor
                </div>

                <h2 class="text-3xl lg:text-4xl font-heading font-bold text-dark mb-2">Osas Ighodaro</h2>
                <p class="text-primary font-medium mb-6">Ordained Pastor, Living Faith Church Worldwide</p>

                <div class="space-y-4 text-dark-muted/80 leading-relaxed">
                    <p>Osas Ighodaro is an ordained Pastor under the umbrella of the Living Faith Church Worldwide, also known as Winners Chapel International. The ministry is headquartered at Faith Tabernacle, Ota, Nigeria, under the leadership of Bishop David Oyedepo.</p>

                    <p>He carries a passion for seeing people walk in the light of God's Word and experience practical transformation. His leadership reflects dedication, humility, and a commitment to the Liberation Mandate.</p>
                </div>

                <div class="mt-8 pt-8 border-t border-dark/5 flex items-center gap-4">
                    <div class="w-1 h-8 bg-secondary rounded-full"></div>
                    <p class="text-sm text-dark-muted/60">"Leading with faith, serving with love."</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
