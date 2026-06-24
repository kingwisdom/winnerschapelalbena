@extends('layouts.app')

@section('title', 'WOFBI — Word of Faith Bible Institute')

@section('content')

<!-- Hero -->
<section class="relative min-h-[55vh] flex items-center overflow-hidden bg-dark">
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?w=1920&q=80" alt="WOFBI"
             class="w-full h-full object-cover opacity-30">
        <div class="absolute inset-0 bg-gradient-to-r from-dark/95 via-dark/80 to-dark/60"></div>
        <div class="absolute inset-0 bg-grid opacity-20"></div>
    </div>

    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center py-24">
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 backdrop-blur border border-white/10 mb-6">
            <span class="w-2 h-2 rounded-full bg-secondary animate-pulse"></span>
            <span class="text-white/70 text-xs font-medium tracking-widest uppercase">Bible Institute</span>
        </div>

        <h1 class="text-4xl md:text-5xl lg:text-6xl font-heading font-bold text-white" data-aos="fade-up">
            Word of Faith Bible Institute
        </h1>
        <p class="mt-6 text-lg text-white/70 max-w-3xl mx-auto leading-relaxed" data-aos="fade-up" data-aos-delay="100">
            Training men and women for exploits through sound biblical teaching and spiritual development.
        </p>
    </div>
</section>

<!-- Main Content -->
<section class="py-20 lg:py-28 bg-light">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-dark-muted/80 leading-relaxed mb-8 text-lg" data-aos="fade-up">
            The Word of Faith Bible Institute (WOFBI) is the training and leadership development arm of the Living Faith Church Worldwide. Established on September 1, 1986, in Kaduna, Nigeria, the institute has graduated over 50,000 students around the world.
        </p>

        <blockquote class="relative border-l-4 border-primary pl-6 py-4 mb-8" data-aos="fade-right">
            <p class="text-dark/80 text-lg italic leading-relaxed">
                "And when Abram heard that his brother was taken captive, he armed his trained servants born in his own house, three hundred and eighteen, and pursued them unto Dan."
            </p>
            <p class="text-dark-muted/60 text-sm mt-2">— Genesis 14:14</p>
        </blockquote>

        <p class="text-dark-muted/80 leading-relaxed mb-12" data-aos="fade-up">
            This scripture is the anchor for the institute. Simply put, WOFBI trains kingdom soldiers, equips leaders, and raises men and women who excel spiritually and practically in their various fields.
        </p>

        <!-- Vision -->
        <div class="card p-8 lg:p-10 bg-white border-l-4 border-secondary mb-16" data-aos="zoom-in">
            <h3 class="text-xl font-heading font-bold text-dark mb-3">Our Vision</h3>
            <p class="text-dark-muted/70 leading-relaxed">
                To train believers for exploits and prepare them to fulfill destiny in ministry, career, leadership, and personal development. Many global ministries, pastors, business leaders, and professionals trace their foundations to WOFBI.
            </p>
        </div>

        <!-- Programs -->
        <div class="flex items-center gap-4 mb-8" data-aos="fade-up">
            <div class="w-1 h-10 bg-primary rounded-full"></div>
            <h2 class="text-2xl lg:text-3xl font-heading font-bold text-dark">Certificate Programs</h2>
        </div>

        <p class="text-dark-muted/70 mb-10" data-aos="fade-up">WOFBI offers three levels of training. Each level runs multiple courses designed to strengthen spiritual depth and biblical understanding.</p>

        <div class="space-y-8">
            <!-- BCC -->
            <div class="card p-8 bg-white" data-aos="fade-up">
                <div class="flex items-center gap-4 mb-6">
                    <span class="flex items-center justify-center w-12 h-12 rounded-xl bg-gradient-to-br from-primary/10 to-primary/5 text-primary font-heading font-bold text-lg">1</span>
                    <h3 class="text-xl font-heading font-bold text-dark">Basic Certificate Course (BCC)</h3>
                </div>
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-3">
                    @foreach(['Word Foundation (WFN)', 'New Creation Fundamentals (NCF)', 'Character Development (CDM)', 'Principles of Answered Prayer (PAP)', 'Principles of Faith (POF)', 'Principles of Success (POS)', 'Determining Divine Direction (DDD)', 'Principles of Financial Prosperity (PFP)', 'Family Life (FML)', 'Principles of Divine Health (PDH)', 'The Holy Spirit (THS)'] as $course)
                    <div class="flex items-center gap-2 text-sm text-dark-muted/80">
                        <svg class="w-4 h-4 text-primary shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                        </svg>
                        {{ $course }}
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- LCC -->
            <div class="card p-8 bg-white" data-aos="fade-up">
                <div class="flex items-center gap-4 mb-6">
                    <span class="flex items-center justify-center w-12 h-12 rounded-xl bg-gradient-to-br from-secondary/10 to-secondary/5 text-secondary font-heading font-bold text-lg">2</span>
                    <h3 class="text-xl font-heading font-bold text-dark">Leadership Certificate Course (LCC)</h3>
                </div>
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-3">
                    @foreach(['Biblical Business Strategy (BBS)', 'Understanding the Power of Praise (UPP)', 'Excellence in Ministry (EIM)', 'Principles of Church Growth (PCG)', 'Understanding the Anointing (UTA)', 'Principles of Supernatural Supplies (PSS)', 'Dynamics of Signs and Wonders (DSW)', 'Dynamics of Holiness (DOH)', 'Vision Analysis (VAN)', 'Faith Complex (FCX)', 'Success Concept (SCT)'] as $course)
                    <div class="flex items-center gap-2 text-sm text-dark-muted/80">
                        <svg class="w-4 h-4 text-secondary shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                        </svg>
                        {{ $course }}
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- LDC -->
            <div class="card p-8 bg-white" data-aos="fade-up">
                <div class="flex items-center gap-4 mb-6">
                    <span class="flex items-center justify-center w-12 h-12 rounded-xl bg-gradient-to-br from-accent/10 to-accent/5 text-accent font-heading font-bold text-lg">3</span>
                    <h3 class="text-xl font-heading font-bold text-dark">Leadership Diploma Course (LDC)</h3>
                </div>
                <div class="grid sm:grid-cols-2 lg:grid-cols-2 gap-3">
                    @foreach(['Biblical Management Principles', 'Exploits in Ministry', 'Word Dynamics', 'Principles of Integrity', 'Ministry and Family', 'Growing in Power', 'Financing the Ministry', 'Spiritual Leadership', 'Supernatural Wisdom', 'Plan, Purpose and Pursuit', 'Exploits of Faith', 'Signs and Wonders Today'] as $course)
                    <div class="flex items-center gap-2 text-sm text-dark-muted/80">
                        <svg class="w-4 h-4 text-accent shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                        </svg>
                        {{ $course }}
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="mt-16 rounded-2xl overflow-hidden shadow-xl" data-aos="fade-up">
            <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?w=1200&q=80"
                 class="w-full h-72 lg:h-96 object-cover" alt="WOFBI">
        </div>
    </div>
</section>

<!-- Stats -->
<section class="relative py-20 bg-dark overflow-hidden">
    <div class="absolute inset-0 bg-grid opacity-10"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-secondary/5 rounded-full blur-3xl"></div>

    <div class="relative max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-3 gap-8 text-center">
            <div data-aos="fade-up">
                <p class="text-5xl lg:text-6xl font-heading font-bold text-secondary">1986</p>
                <p class="text-white/60 mt-3 text-sm uppercase tracking-widest">Founded</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="100">
                <p class="text-5xl lg:text-6xl font-heading font-bold text-secondary">50K+</p>
                <p class="text-white/60 mt-3 text-sm uppercase tracking-widest">Graduates Worldwide</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="200">
                <p class="text-5xl lg:text-6xl font-heading font-bold text-secondary">3</p>
                <p class="text-white/60 mt-3 text-sm uppercase tracking-widest">Program Levels</p>
            </div>
        </div>
    </div>
</section>

@endsection
