@extends('layouts.app')

@section('title', 'Our Story — Winners Chapel Int\'l ALBANY')

@section('content')

<!-- Hero -->
<section class="relative min-h-[55vh] flex items-center overflow-hidden bg-dark">
    <div class="absolute inset-0">
        <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgsPhmwUAVDxMmq8eizo1W71lAEvtvK5TFJET3UndT43yKFBldCHTHy13kISxEb-9j0EenXED0g9ZqFkoasvF1h42FPyDDwizugyexJt6aAjubjFWLY8umOHpsPthzumbHenpAOgV5nZrg/s1600/DSC_0242.JPG"
             class="w-full h-full object-cover opacity-40" loading="lazy">
        <div class="absolute inset-0 bg-gradient-to-r from-dark/95 via-dark/80 to-dark/60"></div>
        <div class="absolute inset-0 bg-grid opacity-20"></div>
    </div>

    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center py-24">
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 backdrop-blur border border-white/10 mb-6">
            <span class="w-2 h-2 rounded-full bg-secondary animate-pulse"></span>
            <span class="text-white/70 text-xs font-medium tracking-widest uppercase">Our Heritage</span>
        </div>

        <h1 class="text-4xl md:text-5xl lg:text-6xl font-heading font-bold text-white" data-aos="fade-up">
            Our Story
        </h1>
        <p class="mt-6 text-lg text-white/70 max-w-2xl mx-auto leading-relaxed" data-aos="fade-up" data-aos-delay="100">
            Learn about the journey of Bishop David O. Oyedepo and the Living Faith Church Worldwide — a story of vision, faith, and God's grace.
        </p>
    </div>
</section>

<!-- Bishop Section -->
<section class="py-20 lg:py-28 bg-light">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center gap-4 mb-8" data-aos="fade-right">
            <div class="w-1 h-10 bg-secondary rounded-full"></div>
            <h2 class="text-2xl lg:text-3xl font-heading font-bold text-dark">Our Bishop — Dr. David Oyedepo</h2>
        </div>

        <div class="space-y-6 text-dark-muted/80 leading-relaxed" data-aos="fade-up">
            <p>David Oyedepo is the President of David Oyedepo Ministries International (DOMI). DOMI is the umbrella organization comprising Living Faith Church Worldwide (a global network of churches), World Mission Agency (WMA), Dominion Publishing House, Covenant University, Landmark University, and several Social Development Missions projects.</p>

            <p>Born on September 27, 1954, in Osogbo, Nigeria, he grew up in a spiritually vibrant home. His grandmother helped shape his early Christian walk, teaching him prayer and the importance of tithing from childhood.</p>

            <p>He was "born again" in 1969 through the influence of his teacher, Ms. Betty Lasher. He later studied Architecture at Kwara State Polytechnic before entering full-time ministry. He also holds a Ph.D. in Human Development from Honolulu University.</p>
        </div>
    </div>
</section>

<!-- Mandate Section -->
<section class="relative py-20 lg:py-28 bg-dark overflow-hidden">
    <div class="absolute inset-0 bg-grid opacity-10"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-secondary/5 rounded-full blur-3xl"></div>

    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center gap-4 mb-8" data-aos="fade-left">
            <div class="w-1 h-10 bg-secondary rounded-full"></div>
            <h2 class="text-2xl lg:text-3xl font-heading font-bold text-white">The Mandate</h2>
        </div>

        <p class="text-white/70 leading-relaxed mb-8" data-aos="fade-up">
            In May 1981, during an eighteen-hour vision, God delivered a mandate to him:
        </p>

        <blockquote class="relative border-l-4 border-secondary pl-6 py-4 mb-8" data-aos="zoom-in">
            <svg class="absolute -top-4 -left-2 w-8 h-8 text-secondary/30" fill="currentColor" viewBox="0 0 24 24">
                <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
            </svg>
            <p class="text-white/90 text-lg italic leading-relaxed">
                "The hour has come to liberate the world from all oppressions of the devil through the preaching of the Word of Faith, and I am sending you to undertake this task."
            </p>
        </blockquote>

        <p class="text-white/70 leading-relaxed" data-aos="fade-up">
            This inaugurated what we know today as the Living Faith Church Worldwide, formerly called Liberation Faith Hour Ministries.
        </p>
    </div>
</section>

<!-- Church History -->
<section class="py-20 lg:py-28 bg-light">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center gap-4 mb-8" data-aos="fade-right">
            <div class="w-1 h-10 bg-primary rounded-full"></div>
            <h2 class="text-2xl lg:text-3xl font-heading font-bold text-dark">Living Faith Church — The Beginning</h2>
        </div>

        <p class="text-dark-muted/80 leading-relaxed mb-8" data-aos="fade-up">
            The church began in Kaduna but later moved to Lagos in 1989 following God's instruction. Attendance grew rapidly, filling roads and surrounding buildings with worshippers hungry for the Word. This led to the construction of the now-famous Faith Tabernacle.
        </p>

        <div class="grid md:grid-cols-2 gap-8 mb-8">
            <div class="card p-8 bg-white" data-aos="fade-right">
                <h3 class="text-xl font-heading font-bold text-dark mb-4">Largest Church Auditorium</h3>
                <p class="text-dark-muted/70 leading-relaxed text-sm">
                    In 1998, construction began on a 50,000-seat sanctuary known as the Faith Tabernacle. Built in just 12 months without debt, it is recognized as the largest church auditorium in the world. It was dedicated on September 18, 1999.
                </p>
            </div>

            <div class="card p-8 bg-white" data-aos="fade-left">
                <h3 class="text-xl font-heading font-bold text-dark mb-4">Canaanland</h3>
                <p class="text-dark-muted/70 leading-relaxed text-sm">
                    Canaanland in Ota, Nigeria, is a 5,000-acre city hosting the Faith Tabernacle, the church secretariat, Covenant University, Faith Academy, housing estates, manufacturing facilities, restaurants, and more.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Ministry Overview -->
<section class="py-20 lg:py-28 bg-light-alt">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center gap-4 mb-8" data-aos="fade-right">
            <div class="w-1 h-10 bg-secondary rounded-full"></div>
            <h2 class="text-2xl lg:text-3xl font-heading font-bold text-dark">Christian Ministry</h2>
        </div>

        <p class="text-dark-muted/80 leading-relaxed mb-6" data-aos="fade-up">
            Bishop Oyedepo's ministry emphasizes the Word of Faith movement. He acknowledges influences such as Kenneth Copeland, Gloria Copeland, the late Kenneth E. Hagin, T.L. Osborn, and Arch-Bishop Benson Idahosa.
        </p>

        <p class="text-dark-muted/80 leading-relaxed mb-6" data-aos="fade-up" data-aos-delay="100">
            Teachings are organized under the "12 Pillars of Destiny," covering Faith, The Word, Prosperity, the Holy Spirit, Praise, Consecration, Success, Wisdom, Healing, Prayer, Vision, and the Supernatural.
        </p>

        <p class="text-dark-muted/80 leading-relaxed" data-aos="fade-up" data-aos-delay="200">
            Winners Chapel operates WOFBI — a training institute for leadership, ministry, and spiritual development for believers across the globe.
        </p>
    </div>
</section>

<!-- Family Life -->
<section class="py-20 lg:py-28 bg-light">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center gap-4 mb-8" data-aos="fade-left">
            <div class="w-1 h-10 bg-primary rounded-full"></div>
            <h2 class="text-2xl lg:text-3xl font-heading font-bold text-dark">Family Life</h2>
        </div>

        <p class="text-dark-muted/80 leading-relaxed mb-6" data-aos="fade-up">
            In 1982, Bishop Oyedepo married Faith Abiola Oyedepo. They have four children: David Jr., Isaac, Love, and Joy. In 2007, David Jr. and Isaac Oyedepo were ordained as pastors by Kenneth Copeland.
        </p>

        <p class="text-dark-muted/80 leading-relaxed" data-aos="fade-up" data-aos-delay="100">
            Today, their family continues to play an active role in the ministry, with a shared commitment to spreading the Word and transforming lives.
        </p>
    </div>
</section>

@endsection
