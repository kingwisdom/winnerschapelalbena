@extends('layouts.app')

@section('title', 'Youth Alive Fellowship — Winners Chapel Int\'l Albany')

@section('content')

    <!-- Hero (with background image + overlay) -->
    <section class="relative py-28 bg-cover bg-center bg-no-repeat" {{--
        style="background-image: url('{{ asset('images/yaf/yaf-hero.jpg') }}')" --}}
        style="background-image: url('{{ asset('https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgsPhmwUAVDxMmq8eizo1W71lAEvtvK5TFJET3UndT43yKFBldCHTHy13kISxEb-9j0EenXED0g9ZqFkoasvF1h42FPyDDwizugyexJt6aAjubjFWLY8umOHpsPthzumbHenpAOgV5nZrg/s1600/DSC_0242.JPG') }}')">
        <div class="absolute inset-0 bg-black/60"></div>

        <div class="relative max-w-4xl mx-auto px-4 text-center">
            <h1 data-aos="fade-down" class="text-3xl md:text-4xl font-bold text-white">
                Youth Alive Fellowship
            </h1>

            <p data-aos="fade-up" data-aos-delay="150" class="mt-4 text-slate-200 max-w-2xl mx-auto">
                Empowering the next generation to follow God’s plan for their lives with confidence, excellence, and
                purpose.
            </p>
        </div>
    </section>

    <!-- Main Content -->
    <section class="py-16">
        <div class="max-w-4xl mx-auto px-4">

            <!-- Intro -->
            <p data-aos="fade-up" class="text-slate-700 leading-relaxed mb-8">
                Youth Alive Fellowship (YAF) is the ministry arm of Winners Chapel designed for young adults.
                This ministry helps them navigate the transition into adulthood with spiritual guidance,
                community, and biblical wisdom.
            </p>

            <!-- Empowerment Block -->
            <div data-aos="zoom-in" data-aos-delay="150" class="bg-white border shadow rounded-lg p-6 mb-12">
                <h2 class="text-xl font-semibold mb-3">Empowering the Next Generation</h2>
                <p class="text-slate-700 leading-relaxed">
                    Entering adulthood often comes with big decisions — education, career paths, relationships,
                    personal purpose. YAF exists to provide mentorship, scriptural insight, and a supportive environment
                    where young adults grow in Christ and discover the direction God has for their lives.
                </p>
            </div>

            <!-- Scripture Quote -->
            <blockquote data-aos="fade-right" data-aos-delay="200"
                class="border-l-4 border-blue-600 pl-4 italic text-slate-700 mb-12">
                “For I know the plans I have for you, declares the Lord, plans to prosper you and not to harm you,
                plans to give you hope and a future.”
                — Jeremiah 29:11
            </blockquote>

            <!-- Purpose Statement -->
            <h2 data-aos="fade-up" class="text-2xl font-semibold mb-4">Youth Programs includes</h2>

            <ul data-aos="fade-up" data-aos-delay="150" class="space-y-4 text-slate-700 leading-relaxed mb-12">
                <li class="flex gap-3">
                    <span class="text-blue-600 text-xl">•</span>
                    Youth Alive Monthtly Congress
                </li>
                <li class="flex gap-3">
                    <span class="text-blue-600 text-xl">•</span>
                    Praise Night
                </li>
                <li class="flex gap-3">
                    <span class="text-blue-600 text-xl">•</span>
                    Marathon Prayer Night
                </li>
                <li class="flex gap-3">
                    <span class="text-blue-600 text-xl">•</span>
                    AYAC
                </li>
                <li class="flex gap-3">
                    <span class="text-blue-600 text-xl">•</span>
                    SHABACH
                </li>
                <li class="flex gap-3">
                    <span class="text-blue-600 text-xl">•</span>
                    HALLELUJAH NIGHT
                </li>
                <li class="flex gap-3">
                    <span class="text-blue-600 text-xl">•</span>
                    Game Night
                </li>

            </ul>
            <!-- Purpose Statement -->
            <h2 data-aos="fade-up" class="text-2xl font-semibold mb-4">Our Focus</h2>

            <ul data-aos="fade-up" data-aos-delay="150" class="space-y-4 text-slate-700 leading-relaxed mb-12">
                <li class="flex gap-3">
                    <span class="text-blue-600 text-xl">•</span>
                    Helping young adults grow spiritually and build strong foundations.
                </li>
                <li class="flex gap-3">
                    <span class="text-blue-600 text-xl">•</span>
                    Creating environments for authentic fellowship and friendships.
                </li>
                <li class="flex gap-3">
                    <span class="text-blue-600 text-xl">•</span>
                    Providing mentorship for career, calling, and life decisions.
                </li>
                <li class="flex gap-3">
                    <span class="text-blue-600 text-xl">•</span>
                    Raising a generation of influencers fulfilling God’s purpose.
                </li>
            </ul>

            <!-- Image -->
            <div data-aos="fade-up" data-aos-delay="200" class="rounded-lg overflow-hidden shadow bg-slate-100">
                <img src="{{ asset('assets/youth.jpg') }}" class="w-full h-64 object-cover">
            </div>

        </div>
    </section>

@endsection