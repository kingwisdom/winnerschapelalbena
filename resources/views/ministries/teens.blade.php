@extends('layouts.app')

@section('title', 'Teens Ministry — Winners Chapel Int\'l Albany')

@section('content')

    <!-- Hero (with background image + overlay) -->
    <section class="relative py-28 bg-cover bg-center bg-no-repeat"
        style="background-image: url('{{ asset('https://www.winnerschapelny.org/images/children.jpg') }}')">
        <div class="absolute inset-0 bg-black/60"></div>

        <div class="relative max-w-4xl mx-auto px-4 text-center">
            <h1 data-aos="fade-down" class="text-3xl md:text-4xl font-bold text-white">
                Teens Ministry
            </h1>

            <p data-aos="fade-up" data-aos-delay="150" class="mt-4 text-slate-200 max-w-2xl mx-auto">
                Empowering teenagers to grow spiritually, discover purpose, and navigate life with God’s wisdom.
            </p>
        </div>
    </section>

    <!-- Main Content -->
    <section class="py-16">
        <div class="max-w-4xl mx-auto px-4">

            <p data-aos="fade-up" class="text-slate-700 leading-relaxed mb-8">
                Today’s youth face new and complex challenges. We believe God’s eternal truths provide the answers they
                need.
                Our mission is to raise responsible citizens and visionary leaders who influence society and stand boldly
                for Christ.
            </p>

            <p data-aos="fade-up" data-aos-delay="150" class="text-slate-700 leading-relaxed mb-8">
                We help teens experience God’s freedom spiritually, socially, and emotionally. They are trained to apply
                Scripture to real-life situations, strengthening their confidence and walk with God.
            </p>

            <!-- Mission Highlight -->
            <div data-aos="zoom-in" data-aos-delay="200" class="bg-white border rounded-lg shadow p-6 mb-12">
                <h2 class="text-xl font-semibold mb-3">Our Mission</h2>
                <p class="text-slate-700 leading-relaxed">
                    To raise teenagers who understand their identity in Christ, embrace discipline, develop strong
                    character, and conquer their world for Jesus.
                </p>
            </div>

            <!-- Scripture Block -->
            <blockquote data-aos="fade-right" data-aos-delay="250"
                class="border-l-4 border-purple-500 pl-4 italic text-slate-700 mb-12">
                “Let no one despise your youth, but be an example to believers in word, conduct, love, spirit, faith,
                purity.” — 1 Timothy 4:12
            </blockquote>

            <!-- Image -->
            <div data-aos="fade-up" data-aos-delay="300" class="rounded-lg overflow-hidden shadow bg-slate-100">
                <img src="{{ asset('images/ministries/teens-group.jpg') }}" class="w-full h-64 object-cover">
            </div>

        </div>
    </section>

@endsection