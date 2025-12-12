@extends('layouts.app')

@section('title', 'Give — Winners Chapel Int\'l Albany')

@section('content')

    <!-- Hero -->
    <section class="py-32 bg-cover bg-center bg-no-repeat relative"
        style="background-image: url('{{ asset('https://sjdh.org/wp-content/uploads/2016/08/giving.jpg') }}');"
        data-aos="fade-up" data-aos-duration="1000">
        <div class="absolute inset-0 bg-yellow-900/60"></div>

        <div class="relative max-w-3xl mx-auto px-4 text-center text-white">
            <h1 class="text-3xl md:text-4xl font-bold">Give</h1>
            <p class="mt-4">
                Your giving helps advance the Gospel and support the work of the kingdom.
            </p>
        </div>
    </section>

    <!-- Main Content -->
    <section class="bg-gradient-to-r from-slate-900 to-slate-700 text-white py-16 px-4 sm:px-6 lg:px-8">
        <div class="max-w-6xl mx-auto text-center">
            <h1 class="text-4xl sm:text-5xl font-bold mb-4">Give Through Zelle</h1>
            <p class="text-xl text-gray-200 max-w-2xl mx-auto">Support our ministry and bless the work of the Kingdom
                through secure, convenient giving.</p>
        </div>
    </section>

    <!-- Main Content -->
    <main class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <!-- Zelle Giving Methods -->
        <div class="grid md:grid-cols-2 gap-8 mb-16">
            <!-- Text to Give -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                <div class="bg-gradient-to-r from-blue-500 to-blue-600 text-white p-8 text-center">
                    <div class="text-5xl mb-4">📱</div>
                    <h2 class="text-2xl font-bold mb-2">TEXT TO GIVE</h2>
                    <p class="text-blue-100">Quick and Easy</p>
                </div>
                <div class="p-8">
                    <p class="text-gray-600 mb-4">Send a text to our giving number to make your donation:</p>
                    <div class="bg-gray-100 rounded-lg p-6 mb-6">
                        <p class="text-3xl font-bold text-blue-600 font-mono text-center tracking-wide">518-620-5025</p>
                    </div>
                    <p class="text-gray-500 text-sm text-center">Message "GIVE" to get started</p>
                </div>
            </div>

            <!-- Zelle Email -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                <div class="bg-gradient-to-r from-emerald-500 to-emerald-600 text-white p-8 text-center">
                    <div class="text-5xl mb-4">💳</div>
                    <h2 class="text-2xl font-bold mb-2">GIVE THROUGH ZELLE</h2>
                    <p class="text-emerald-100">Direct Transfer</p>
                </div>
                <div class="p-8">
                    <p class="text-gray-600 mb-4">Use Zelle from your bank app to send your gift directly:</p>
                    <div class="bg-gray-100 rounded-lg p-6 mb-6">
                        <p class="text-lg font-mono text-blue-600 font-semibold text-center break-all">
                            wci_albany@hotmail.com</p>
                    </div>
                    <p class="text-gray-500 text-sm text-center">Available through most major banks</p>
                </div>
            </div>
        </div>

        <!-- Divider -->
        <div class="border-b-2 border-gray-200 mb-16"></div>

        <!-- Other Giving Methods -->
        <div>
            <h2 class="text-3xl font-bold text-gray-900 mb-12 text-center">Additional Giving Options</h2>

            <div class="grid sm:grid-cols-1 md:grid-cols-3 gap-6">
                <!-- In-Person -->
                <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow text-center">
                    <div class="text-4xl mb-4">🤝</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">In-Person Giving</h3>
                    <p class="text-gray-600">Give during our worship services at Winners Chapel Albany</p>
                </div>

                <!-- Mail -->
                <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow text-center">
                    <div class="text-4xl mb-4">✉️</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Mail Your Gift</h3>
                    <p class="text-gray-600 text-sm">310 Fulton Avenue, Hempstead, NY 11550</p>
                </div>

                <!-- Visit Website -->
                <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow text-center">
                    <div class="text-4xl mb-4">🌐</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Our Website</h3>
                    <p class="text-gray-600">WCIALBANY.ORG</p>
                </div>
            </div>
        </div>
    </main>

    <!-- Testimonial Section -->
    <section class="bg-blue-50 py-12 px-4 sm:px-6 lg:px-8 my-16">
        <div class="max-w-4xl mx-auto">
            <div class="bg-white rounded-lg shadow-lg p-8 border-l-4 border-blue-600">
                <p class="text-gray-700 text-lg mb-4 leading-relaxed">
                    "Thank you for your generous support. Every seed sown helps us reach more people, strengthen lives, and
                    build the work God has committed to this commission."
                </p>
                <p class="text-gray-600 font-semibold">— Winners Chapel Albany</p>
            </div>
        </div>
    </section>



@endsection