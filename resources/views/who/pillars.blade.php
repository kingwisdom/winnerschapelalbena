@extends('layouts.app')

@section('title', 'Pillars of the Commission — Winners Chapel Int\'l ALBANY')

@section('content')

    <!-- Hero (with background image + overlay) -->
    <section class="relative py-28 bg-cover bg-center bg-no-repeat"
        style="background-image: url('{{ asset('https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgsPhmwUAVDxMmq8eizo1W71lAEvtvK5TFJET3UndT43yKFBldCHTHy13kISxEb-9j0EenXED0g9ZqFkoasvF1h42FPyDDwizugyexJt6aAjubjFWLY8umOHpsPthzumbHenpAOgV5nZrg/s1600/DSC_0242.JPG') }}')">
        <div class="absolute inset-0 bg-black/60"></div>

        <div class="relative max-w-4xl mx-auto px-4 text-center">
            <h1 data-aos="fade-down" class="text-3xl md:text-4xl font-bold text-white">
                Pillars of the Commission
            </h1>
            <p data-aos="fade-up" data-aos-delay="150" class="mt-4 text-slate-200 max-w-2xl mx-auto">
                The 12 biblical truths the Holy Spirit inspired our presiding Bishop to organize the Word of Faith teachings
                around.
            </p>
        </div>
    </section>

    <!-- Pillars -->
    <section class="py-16" data-aos="fade-up" data-aos-delay="150">
        <div class="max-w-4xl mx-auto px-4 space-y-10">

            <!-- 1. Faith -->
            <div class="bg-white border rounded-lg p-6 shadow-sm" data-aos="fade-up" data-aos-delay="100">
                <h2 class="text-xl font-semibold mb-2">1. Faith</h2>
                <p class="text-slate-700 leading-relaxed mb-3">
                    <strong>Scriptures:</strong> 1 John 5:4, Ephesians 6:16
                </p>
                <p class="text-slate-700 leading-relaxed">
                    Faith is the victory that overcomes the world. It is the foundation of our walk with God
                    and the force that empowers believers to dominate life’s challenges.
                </p>
            </div>

            <!-- 2. The Word -->
            <div class="bg-white border rounded-lg p-6 shadow-sm" data-aos="fade-up" data-aos-delay="150">
                <h2 class="text-xl font-semibold mb-2">2. The Word</h2>
                <p class="text-slate-700 leading-relaxed mb-3">
                    <strong>Scriptures:</strong> John 1:1–12, Hebrews 1:3
                </p>
                <p class="text-slate-700 leading-relaxed">
                    God’s Word is the source of life and power. All things are upheld by the Word of His power.
                </p>
            </div>

            <!-- 3. The Supernatural -->
            <div class="bg-white border rounded-lg p-6 shadow-sm" data-aos="fade-up" data-aos-delay="200">
                <h2 class="text-xl font-semibold mb-2">3. The Supernatural</h2>
                <p class="text-slate-700 leading-relaxed mb-3">
                    <strong>Scriptures:</strong> Psalm 82:5–7, John 3:8
                </p>
                <p class="text-slate-700 leading-relaxed">
                    Every believer is ordained to operate in the supernatural as a lifestyle.
                </p>
            </div>

            <!-- 4. The Holy Spirit -->
            <div class="bg-white border rounded-lg p-6 shadow-sm" data-aos="fade-up" data-aos-delay="250">
                <h2 class="text-xl font-semibold mb-2">4. The Holy Spirit</h2>
                <p class="text-slate-700 leading-relaxed mb-3">
                    <strong>Scriptures:</strong> Acts 1:1–8, Isaiah 10:27
                </p>
                <p class="text-slate-700 leading-relaxed">
                    The Holy Spirit empowers, guides, reveals truth, and destroys every yoke.
                </p>
            </div>

            <!-- 5. Prosperity -->
            <div class="bg-white border rounded-lg p-6 shadow-sm" data-aos="fade-up" data-aos-delay="300">
                <h2 class="text-xl font-semibold mb-2">5. Prosperity</h2>
                <p class="text-slate-700 leading-relaxed mb-3">
                    <strong>Scriptures:</strong> 3 John 2, Psalm 35:27, Zechariah 1:17
                </p>
                <p class="text-slate-700 leading-relaxed">
                    God delights in the prosperity of His people—spirit, soul, and body.
                </p>
            </div>

            <!-- 6. Prayer -->
            <div class="bg-white border rounded-lg p-6 shadow-sm" data-aos="fade-up" data-aos-delay="350">
                <h2 class="text-xl font-semibold mb-2">6. Prayer</h2>
                <p class="text-slate-700 leading-relaxed mb-3">
                    <strong>Scriptures:</strong> 1 John 5:14
                </p>
                <p class="text-slate-700 leading-relaxed">
                    Prayer is the believer’s platform to engage God’s will and receive answers.
                </p>
            </div>

            <!-- 7. Healing -->
            <div class="bg-white border rounded-lg p-6 shadow-sm" data-aos="fade-up" data-aos-delay="400">
                <h2 class="text-xl font-semibold mb-2">7. Healing</h2>
                <p class="text-slate-700 leading-relaxed mb-3">
                    <strong>Scriptures:</strong> Isaiah 53:3–4, Jeremiah 8:22, Matthew 8:17
                </p>
                <p class="text-slate-700 leading-relaxed">
                    Christ has paid the price for our divine health and healing.
                </p>
            </div>

            <!-- 8. Wisdom -->
            <div class="bg-white border rounded-lg p-6 shadow-sm" data-aos="fade-up" data-aos-delay="450">
                <h2 class="text-xl font-semibold mb-2">8. Wisdom</h2>
                <p class="text-slate-700 leading-relaxed mb-3">
                    <strong>Scriptures:</strong> Proverbs 24:3–4, Isaiah 33:6
                </p>
                <p class="text-slate-700 leading-relaxed">
                    Wisdom is the stability of our times and a core driver of success.
                </p>
            </div>

            <!-- 9. Success -->
            <div class="bg-white border rounded-lg p-6 shadow-sm" data-aos="fade-up" data-aos-delay="500">
                <h2 class="text-xl font-semibold mb-2">9. Success</h2>
                <p class="text-slate-700 leading-relaxed mb-3">
                    <strong>Scriptures:</strong> Joshua 1:8–10
                </p>
                <p class="text-slate-700 leading-relaxed">
                    Success is guaranteed when we meditate on and obey the Word of God.
                </p>
            </div>

            <!-- 10. Vision -->
            <div class="bg-white border rounded-lg p-6 shadow-sm" data-aos="fade-up" data-aos-delay="550">
                <h2 class="text-xl font-semibold mb-2">10. Vision</h2>
                <p class="text-slate-700 leading-relaxed mb-3">
                    <strong>Scriptures:</strong> Proverbs 29:18, Jeremiah 29:11
                </p>
                <p class="text-slate-700 leading-relaxed">
                    Vision gives direction and preserves destiny.
                </p>
            </div>

            <!-- 11. Consecration -->
            <div class="bg-white border rounded-lg p-6 shadow-sm" data-aos="fade-up" data-aos-delay="600">
                <h2 class="text-xl font-semibold mb-2">11. Consecration</h2>
                <p class="text-slate-700 leading-relaxed mb-3">
                    <strong>Scriptures:</strong> Hebrews 12:14, 2 Timothy 2:19
                </p>
                <p class="text-slate-700 leading-relaxed">
                    Living a life of holiness keeps us aligned with God’s purpose.
                </p>
            </div>

            <!-- 12. Praise -->
            <div class="bg-white border rounded-lg p-6 shadow-sm" data-aos="fade-up" data-aos-delay="650">
                <h2 class="text-xl font-semibold mb-2">12. Praise</h2>
                <p class="text-slate-700 leading-relaxed mb-3">
                    <strong>Scriptures:</strong> 2 Chronicles 20:20–22, Psalm 67:1–7, Psalm 149:1–9
                </p>
                <p class="text-slate-700 leading-relaxed">
                    Praise invokes divine intervention and guarantees victory.
                </p>
            </div>

        </div>
    </section>

@endsection