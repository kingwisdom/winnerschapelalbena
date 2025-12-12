@extends('layouts.app')

@section('title', 'Our Leadership — Winners Chapel Int\'l ALBANY')

@section('content')

    <!-- Hero (with background image + overlay) -->
    <section class="relative py-28 bg-cover bg-center bg-no-repeat"
        style="background-image: url('{{ asset('https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgsPhmwUAVDxMmq8eizo1W71lAEvtvK5TFJET3UndT43yKFBldCHTHy13kISxEb-9j0EenXED0g9ZqFkoasvF1h42FPyDDwizugyexJt6aAjubjFWLY8umOHpsPthzumbHenpAOgV5nZrg/s1600/DSC_0242.JPG') }}')">
        <div class="absolute inset-0 bg-black/60"></div>

        <div class="relative max-w-4xl mx-auto px-4 text-center">
            <h1 data-aos="fade-down" class="text-3xl md:text-4xl font-bold text-white">
                Our Leadership
            </h1>
            <p data-aos="fade-up" data-aos-delay="150" class="mt-4 text-slate-200 max-w-2xl mx-auto">
                Meet the dedicated leaders God has placed over this commission to guide, teach, and serve His people.
            </p>
        </div>
    </section>

    <!-- Leadership Card -->
    <section class="py-16">
        <div class="max-w-4xl mx-auto px-4">

            <div data-aos="fade-up" data-aos-delay="200"
                class="bg-white rounded-lg shadow overflow-hidden flex flex-col md:flex-row">

                <!-- Image -->
                <div class="md:w-1/3 bg-slate-100" data-aos="zoom-in" data-aos-delay="300">
                    <img src="{{ asset('assets/pastor.jpg') }}" alt="Pastor Osas Ighodaro"
                        class="w-full h-full object-cover">
                </div>

                <!-- Content -->
                <div class="md:w-2/3 p-6" data-aos="fade-left" data-aos-delay="400">
                    <h2 class="text-2xl font-semibold">Osas Ighodaro</h2>
                    <p class="text-sm text-indigo-600 mb-4">Resident Pastor</p>

                    <p class="text-slate-700 leading-relaxed mb-4">
                        Osas Ighodaro is an ordained Pastor under the umbrella of the Living Faith Church Worldwide,
                        also known as Winners Chapel International. The ministry is headquartered at Faith Tabernacle,
                        Ota, Nigeria, under the leadership of Bishop David Oyedepo.
                    </p>

                    <p class="text-slate-700 leading-relaxed">
                        He carries a passion for seeing people walk in the light of God’s Word and experience practical
                        transformation. His leadership reflects dedication, humility, and a commitment to the Liberation
                        Mandate.
                    </p>
                </div>

            </div>

        </div>
    </section>

@endsection