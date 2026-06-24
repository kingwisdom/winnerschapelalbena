@extends('layouts.app')

@section('title', 'Pillars of the Commission — Winners Chapel Int\'l ALBANY')

@section('content')

<!-- Hero -->
<section class="relative min-h-[55vh] flex items-center overflow-hidden bg-dark">
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1465146344425-f00d5f5c8f07?w=1920&q=80" alt="Pillars"
             class="w-full h-full object-cover opacity-30">
        <div class="absolute inset-0 bg-gradient-to-r from-dark/95 via-dark/80 to-dark/60"></div>
        <div class="absolute inset-0 bg-grid opacity-20"></div>
    </div>

    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center py-24">
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 backdrop-blur border border-white/10 mb-6">
            <span class="w-2 h-2 rounded-full bg-secondary animate-pulse"></span>
            <span class="text-white/70 text-xs font-medium tracking-widest uppercase">Our Foundation</span>
        </div>

        <h1 class="text-4xl md:text-5xl lg:text-6xl font-heading font-bold text-white" data-aos="fade-up">
            Pillars of the Commission
        </h1>
        <p class="mt-6 text-lg text-white/70 max-w-2xl mx-auto leading-relaxed" data-aos="fade-up" data-aos-delay="100">
            The 12 biblical truths the Holy Spirit inspired our presiding Bishop to organize the Word of Faith teachings around.
        </p>
    </div>
</section>

<!-- Pillars Grid -->
<section class="py-20 lg:py-28 bg-light">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

            @php
                $pillars = [
                    ['num' => '01', 'title' => 'Faith', 'scripture' => '1 John 5:4, Ephesians 6:16', 'desc' => 'Faith is the victory that overcomes the world. It is the foundation of our walk with God and the force that empowers believers to dominate life\'s challenges.'],
                    ['num' => '02', 'title' => 'The Word', 'scripture' => 'John 1:1–12, Hebrews 1:3', 'desc' => 'God\'s Word is the source of life and power. All things are upheld by the Word of His power.'],
                    ['num' => '03', 'title' => 'The Supernatural', 'scripture' => 'Psalm 82:5–7, John 3:8', 'desc' => 'Every believer is ordained to operate in the supernatural as a lifestyle.'],
                    ['num' => '04', 'title' => 'The Holy Spirit', 'scripture' => 'Acts 1:1–8, Isaiah 10:27', 'desc' => 'The Holy Spirit empowers, guides, reveals truth, and destroys every yoke.'],
                    ['num' => '05', 'title' => 'Prosperity', 'scripture' => '3 John 2, Psalm 35:27, Zechariah 1:17', 'desc' => 'God delights in the prosperity of His people — spirit, soul, and body.'],
                    ['num' => '06', 'title' => 'Prayer', 'scripture' => '1 John 5:14', 'desc' => 'Prayer is the believer\'s platform to engage God\'s will and receive answers.'],
                    ['num' => '07', 'title' => 'Healing', 'scripture' => 'Isaiah 53:3–4, Jeremiah 8:22, Matthew 8:17', 'desc' => 'Christ has paid the price for our divine health and healing.'],
                    ['num' => '08', 'title' => 'Wisdom', 'scripture' => 'Proverbs 24:3–4, Isaiah 33:6', 'desc' => 'Wisdom is the stability of our times and a core driver of success.'],
                    ['num' => '09', 'title' => 'Success', 'scripture' => 'Joshua 1:8–10', 'desc' => 'Success is guaranteed when we meditate on and obey the Word of God.'],
                    ['num' => '10', 'title' => 'Vision', 'scripture' => 'Proverbs 29:18, Jeremiah 29:11', 'desc' => 'Vision gives direction and preserves destiny.'],
                    ['num' => '11', 'title' => 'Consecration', 'scripture' => 'Hebrews 12:14, 2 Timothy 2:19', 'desc' => 'Living a life of holiness keeps us aligned with God\'s purpose.'],
                    ['num' => '12', 'title' => 'Praise', 'scripture' => '2 Chronicles 20:20–22, Psalm 67:1–7, Psalm 149:1–9', 'desc' => 'Praise invokes divine intervention and guarantees victory.'],
                ];
            @endphp

            @foreach($pillars as $pillar)
            <div class="group card bg-white p-6 lg:p-8 border border-dark/5" data-aos="fade-up" data-aos-delay="{{ $loop->index * 50 }}">
                <div class="flex items-center gap-4 mb-5">
                    <span class="text-3xl lg:text-4xl font-heading font-bold text-secondary/40 group-hover:text-secondary transition-colors duration-500">{{ $pillar['num'] }}</span>
                    <div class="flex-1 h-px bg-dark/10 group-hover:bg-secondary/30 transition-colors duration-500"></div>
                </div>
                <h3 class="text-xl font-heading font-bold text-dark mb-2 group-hover:text-primary transition-colors">{{ $pillar['title'] }}</h3>
                <p class="text-xs text-secondary font-medium uppercase tracking-wider mb-3">{{ $pillar['scripture'] }}</p>
                <p class="text-dark-muted/70 text-sm leading-relaxed">{{ $pillar['desc'] }}</p>
            </div>
            @endforeach

        </div>
    </div>
</section>

<!-- Bottom CTA -->
<section class="relative py-20 bg-dark overflow-hidden">
    <div class="absolute inset-0 bg-grid opacity-10"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-secondary/5 rounded-full blur-3xl"></div>

    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl lg:text-4xl font-heading font-bold text-white mb-6" data-aos="fade-up">Rooted in These Truths</h2>
        <p class="text-white/60 max-w-2xl mx-auto leading-relaxed mb-8" data-aos="fade-up" data-aos-delay="100">
            These 12 pillars form the foundation of everything we do. They are not just doctrines — they are the principles by which we live, grow, and fulfill our destiny in Christ.
        </p>
        <div class="flex flex-wrap justify-center gap-3" data-aos="fade-up" data-aos-delay="200">
            @foreach(['Faith', 'Word', 'Supernatural', 'Spirit', 'Prosperity', 'Prayer', 'Healing', 'Wisdom', 'Success', 'Vision', 'Consecration', 'Praise'] as $tag)
                <span class="pill bg-white/10 text-white/70 border border-white/10 hover:bg-secondary/20 hover:text-secondary hover:border-secondary/30 transition-all duration-300">{{ $tag }}</span>
            @endforeach
        </div>
    </div>
</section>

@endsection
