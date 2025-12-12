@extends('layouts.app')

@section('title', 'Our Ministries — Winners Chapel Int\'l Albany')

@section('content')

    <!-- Hero -->
    <section class="bg-indigo-50 py-16">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h1 class="text-3xl md:text-4xl font-bold">Our Ministries</h1>
            <p class="mt-4 text-slate-600 max-w-2xl mx-auto">
                Every ministry is designed to build, nurture, and empower believers at all stages of life.
                Explore each department and discover where you or your family can connect and grow.
            </p>
        </div>
    </section>

    <!-- Ministries Grid -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4 grid gap-10 sm:grid-cols-2 lg:grid-cols-3">

            <!-- Children -->
            <a href="{{ route('children') }}"
                class="bg-white border rounded-lg shadow hover:shadow-md transition overflow-hidden">
                <img src="{{ asset('https://community.softr.io/uploads/db9110/original/2X/7/74e6e7e382d0ff5d7773ca9a87e6f6f8817a68a6.jpeg') }}"
                    class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold">Children's Ministry</h3>
                    <p class="text-slate-600 mt-2 text-sm">
                        Raising children in the knowledge of God through fun, faith-filled teachings.
                    </p>
                </div>
            </a>

            <!-- Teens -->
            <a href="{{ route('teens') }}"
                class="bg-white border rounded-lg shadow hover:shadow-md transition overflow-hidden">
                <img src="{{ asset('https://community.softr.io/uploads/db9110/original/2X/7/74e6e7e382d0ff5d7773ca9a87e6f6f8817a68a6.jpeg') }}"
                    class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold">Teens Ministry</h3>
                    <p class="text-slate-600 mt-2 text-sm">
                        Helping teenagers build identity, confidence, and strong spiritual foundations.
                    </p>
                </div>
            </a>

            <!-- Youth Alive Fellowship -->
            <a href="{{ route('yaf') }}"
                class="bg-white border rounded-lg shadow hover:shadow-md transition overflow-hidden">
                <img src="{{ asset('https://community.softr.io/uploads/db9110/original/2X/7/74e6e7e382d0ff5d7773ca9a87e6f6f8817a68a6.jpeg') }}"
                    class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold">Youth Alive Fellowship</h3>
                    <p class="text-slate-600 mt-2 text-sm">
                        Empowering young adults for purpose, leadership, and spiritual strength.
                    </p>
                </div>
            </a>

            <!-- WSF -->
            <a href="{{ route('wsf') }}"
                class="bg-white border rounded-lg shadow hover:shadow-md transition overflow-hidden">
                <img src="{{ asset('https://community.softr.io/uploads/db9110/original/2X/7/74e6e7e382d0ff5d7773ca9a87e6f6f8817a68a6.jpeg') }}"
                    class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold">Winners Satellite Fellowship (WSF)</h3>
                    <p class="text-slate-600 mt-2 text-sm">
                        House fellowship system designed to build community and spiritual strength.
                    </p>
                </div>
            </a>

            <!-- WOFBI -->
            <a href="{{ route('wofbi') }}"
                class="bg-white border rounded-lg shadow hover:shadow-md transition overflow-hidden">
                <img src="{{ asset('https://community.softr.io/uploads/db9110/original/2X/7/74e6e7e382d0ff5d7773ca9a87e6f6f8817a68a6.jpeg') }}"
                    class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold">WOFBI</h3>
                    <p class="text-slate-600 mt-2 text-sm">
                        Training believers for exploits through the Word of Faith Bible Institute.
                    </p>
                </div>
            </a>

        </div>
    </section>

@endsection