@extends('layouts.app')

@section('title', 'Winners Satellite Fellowship — Winners Chapel Int\'l Albany')

@section('content')

    <!-- Hero (with background image + overlay) -->
    <section class="relative py-28 bg-cover bg-center bg-no-repeat" {{--
        style="background-image: url('{{ asset('images/wsf/wsf-hero.jpg') }}')" --}}
        style="background-image: url('{{ asset('https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgsPhmwUAVDxMmq8eizo1W71lAEvtvK5TFJET3UndT43yKFBldCHTHy13kISxEb-9j0EenXED0g9ZqFkoasvF1h42FPyDDwizugyexJt6aAjubjFWLY8umOHpsPthzumbHenpAOgV5nZrg/s1600/DSC_0242.JPG') }}')">
        <div class="absolute inset-0 bg-black/60"></div>

        <div class="relative max-w-4xl mx-auto px-4 text-center">
            <h1 data-aos="fade-down" class="text-3xl md:text-4xl font-bold text-white">
                Winners Satellite Fellowship (WSF)
            </h1>

            <p data-aos="fade-up" data-aos-delay="150" class="mt-4 text-slate-200 max-w-2xl mx-auto">
                Building faith, community, and spiritual strength through small-group fellowship in homes.
            </p>
        </div>
    </section>

    <!-- Main Content -->
    <section class="py-16">
        <div class="max-w-4xl mx-auto px-4">

            <!-- Scripture -->
            <blockquote data-aos="fade-right" data-aos-delay="150"
                class="border-l-4 border-green-600 pl-4 italic text-slate-700 mb-12">
                “And they, continuing daily with one accord in the temple, and breaking bread from house to house,
                did eat their meat with gladness and singleness of heart, praising God, and having favour with all
                the people. And the Lord added to the church daily such as should be saved.”
                — Acts 2:46–47
            </blockquote>

            <!-- Intro -->
            <p data-aos="fade-up" class="text-slate-700 leading-relaxed mb-8">
                Winners Satellite Fellowship (WSF) is the home-cell fellowship structure of the Living Faith Church
                Worldwide. It is designed to foster spiritual growth, accountability, and strong relationships among
                members through intimate gatherings in homes across various communities.
            </p>

            <!-- Purpose Block -->
            <div data-aos="zoom-in" data-aos-delay="150" class="bg-white border shadow rounded-lg p-6 mb-12">
                <h2 class="text-xl font-semibold mb-3">Our Purpose</h2>
                <p class="text-slate-700 leading-relaxed">
                    WSF brings the church closer to the people, enabling members to fellowship, pray, study Scriptures
                    together, and support one another in love. It is a platform where discipleship is strengthened,
                    needs are met, and every believer is nurtured within a family-like environment.
                </p>
            </div>

            <!-- Benefits -->
            <h2 data-aos="fade-up" class="text-2xl font-semibold mb-4">Why WSF?</h2>

            <ul data-aos="fade-up" data-aos-delay="150" class="space-y-4 text-slate-700 leading-relaxed mb-12">
                <li class="flex gap-3">
                    <span class="text-green-600 text-xl">•</span>
                    It builds strong Christian relationships and community support.
                </li>
                <li class="flex gap-3">
                    <span class="text-green-600 text-xl">•</span>
                    Members grow through prayers, Bible study, and shared testimonies.
                </li>
                <li class="flex gap-3">
                    <span class="text-green-600 text-xl">•</span>
                    It provides care, encouragement, and spiritual accountability.
                </li>
                <li class="flex gap-3">
                    <span class="text-green-600 text-xl">•</span>
                    It ensures every member is known, valued, and spiritually supported.
                </li>
            </ul>

            <!-- Image -->
            <div data-aos="fade-up" data-aos-delay="200" class="rounded-lg overflow-hidden shadow bg-slate-100">
                <img src="{{ asset('https://community.softr.io/uploads/db9110/original/2X/7/74e6e7e382d0ff5d7773ca9a87e6f6f8817a68a6.jpeg') }}"
                    class="w-full h-64 object-cover">
            </div>

        </div>
    </section>

@endsection