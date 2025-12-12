@extends('layouts.app')

@section('title', 'Children\'s Ministry — Winners Chapel Int\'l Albany')

@section('content')

    <!-- Hero (with background image + overlay) -->
    <section class="relative py-28 bg-cover bg-center bg-no-repeat"
        style="background-image: url('{{ asset('https://www.winnerschapelny.org/images/children.jpg') }}')">
        <div class="absolute inset-0 bg-black/60"></div>

        <div class="relative max-w-4xl mx-auto px-4 text-center">
            <h1 data-aos="fade-down" class="text-3xl md:text-4xl font-bold text-white">
                Children's Ministry
            </h1>

            <p data-aos="fade-up" data-aos-delay="150" class="mt-4 text-slate-200 max-w-2xl mx-auto">
                Teaching faith to children from one month to 12 years in a safe, joyful, and spiritually enriching
                environment.
            </p>
        </div>
    </section>

    <!-- Ministry Content -->
    <section class="py-16">
        <div class="max-w-4xl mx-auto px-4">

            <!-- Intro -->
            <p data-aos="fade-up" class="text-slate-700 leading-relaxed mb-8">
                The Children’s Ministry is an energetic, entertaining, and dynamic department designed for
                our youngest members. We believe that every child is precious in the sight of God and deserves
                to be nurtured spiritually and emotionally.
            </p>

            <!-- Scripture Quote -->
            <blockquote data-aos="fade-right" data-aos-delay="150"
                class="border-l-4 border-amber-500 pl-4 italic text-slate-700 mb-8">
                “Start children off on the way they should go,
                and even when they are old they will not turn from it.”
                — Proverbs 22:6
            </blockquote>

            <!-- What We Provide -->
            <h2 data-aos="fade-up" data-aos-delay="200" class="text-2xl font-semibold mb-4">
                What We Provide
            </h2>

            <ul class="space-y-4 text-slate-700 leading-relaxed mb-12">

                <li data-aos="fade-left" class="flex gap-3">
                    <span class="text-amber-500 text-xl">•</span>
                    Ministry of the Word of Faith presented in ways children understand.
                </li>

                <li data-aos="fade-left" data-aos-delay="100" class="flex gap-3">
                    <span class="text-amber-500 text-xl">•</span>
                    Trained church staff and committed volunteers who love children.
                </li>

                <li data-aos="fade-left" data-aos-delay="200" class="flex gap-3">
                    <span class="text-amber-500 text-xl">•</span>
                    Modern teaching tools to make learning interactive and enjoyable.
                </li>

                <li data-aos="fade-left" data-aos-delay="300" class="flex gap-3">
                    <span class="text-amber-500 text-xl">•</span>
                    Clean and safe toys, play equipment, and facilities.
                </li>

                <li data-aos="fade-left" data-aos-delay="400" class="flex gap-3">
                    <span class="text-amber-500 text-xl">•</span>
                    A secure, well-monitored environment to ensure every child's safety.
                </li>
            </ul>

            <!-- Image -->
            <div data-aos="zoom-in" data-aos-delay="150" class="rounded-lg overflow-hidden shadow bg-slate-100">
                <img src="{{ asset('https://community.softr.io/uploads/db9110/original/2X/7/74e6e7e382d0ff5d7773ca9a87e6f6f8817a68a6.jpeg') }}"
                    class="w-full h-64 object-cover">
            </div>

        </div>
    </section>

@endsection