@extends('layouts.app')

@section('title', 'Who We Are — Winners Chapel Int\'l ALBANY')

@section('content')

    <section class="bg-indigo-50 py-16">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h1 class="text-3xl md:text-4xl font-bold">Who We Are</h1>
            <p class="mt-4 text-slate-600 max-w-2xl mx-auto">
                At Winners Chapel Int'l, Albany, we are committed to teaching faith, transforming lives, and raising a
                people of purpose through the Word of God.
            </p>
        </div>
    </section>

    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

            <!-- Our Story -->
            <a href="{{ route('who.story') }}" class="block p-6 bg-white shadow rounded-lg hover:shadow-md transition">
                <h3 class="text-xl font-semibold mb-2">Our Story</h3>
                <p class="text-slate-600 text-sm">
                    Discover the journey, vision, and heritage behind the Winners Family.
                </p>
            </a>

            <!-- Mandate -->
            <a href="{{ route('who.mandate') }}" class="block p-6 bg-white shadow rounded-lg hover:shadow-md transition">
                <h3 class="text-xl font-semibold mb-2">The Mandate</h3>
                <p class="text-slate-600 text-sm">
                    Learn about the divine mandate given to Bishop David O. Oyedepo.
                </p>
            </a>

            <!-- Pillars -->
            <a href="{{ route('who.pillars') }}" class="block p-6 bg-white shadow rounded-lg hover:shadow-md transition">
                <h3 class="text-xl font-semibold mb-2">Pillars of the Commission</h3>
                <p class="text-slate-600 text-sm">
                    Explore the 12 biblical pillars that guide our commission.
                </p>
            </a>

            <!-- Leadership -->
            <a href="{{ route('who.leadership') }}" class="block p-6 bg-white shadow rounded-lg hover:shadow-md transition">
                <h3 class="text-xl font-semibold mb-2">Our Leadership</h3>
                <p class="text-slate-600 text-sm">
                    Meet the pastors and leaders serving our church family.
                </p>
            </a>

        </div>
    </section>

@endsection