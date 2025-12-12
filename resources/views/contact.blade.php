@extends('layouts.app')

@section('title', 'Contact Us — Winners Chapel Int\'l Albany')

@section('content')

    <!-- Hero Section -->
    <section class="relative py-32 bg-cover bg-center bg-no-repeat"
        style="background-image: url('{{ asset('images/banners/contact-banner.jpg') }}');" data-aos="fade-up"
        data-aos-duration="1000">
        <div class="absolute inset-0 bg-blue-900/60"></div>

        <div class="relative max-w-4xl mx-auto px-4 text-center text-white">
            <h1 class="text-4xl md:text-5xl font-bold" data-aos="fade-up" data-aos-duration="1000">Contact Us</h1>
            <p class="mt-4 text-lg max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                We would love to hear from you. Reach out with questions, testimonies,
                prayer requests, or inquiries about our services.
            </p>
        </div>
    </section>

    <!-- Contact + Form -->
    <section class="py-20 bg-white">
        <div class="max-w-6xl mx-auto grid lg:grid-cols-2 gap-12 px-4">

            <!-- Contact Info -->
            <div data-aos="fade-right" data-aos-duration="1000">

                <h2 class="text-3xl font-semibold text-slate-800 mb-8">Get in Touch</h2>

                <p class="text-slate-600 mb-8 leading-relaxed">
                    Whether you’re visiting for the first time or part of our church family,
                    our team is here to support you. Contact us anytime—we’re ready to help.
                </p>

                <div class="space-y-8">

                    <!-- Location -->
                    <div class="flex items-start gap-4" data-aos="fade-up" data-aos-duration="1000">
                        <div class="p-4 rounded-xl bg-blue-100 text-blue-700 text-2xl">📍</div>
                        <div>
                            <h3 class="font-semibold text-slate-800 text-lg">Our Location</h3>
                            <p class="text-slate-600 leading-relaxed">
                                Winners Chapel Int'l Albany <br>
                                Albany , NY,1524
                            </p>
                        </div>
                    </div>

                    <!-- Phone -->
                    <div class="flex items-start gap-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                        <div class="p-4 rounded-xl bg-green-100 text-green-700 text-2xl">📞</div>
                        <div>
                            <h3 class="font-semibold text-slate-800 text-lg">Phone</h3>
                            <p class="text-slate-600 leading-relaxed">
                                +1 (385) 457-6738
                            </p>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="flex items-start gap-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <div class="p-4 rounded-xl bg-yellow-100 text-yellow-700 text-2xl">📧</div>
                        <div>
                            <h3 class="font-semibold text-slate-800 text-lg">Email</h3>
                            <p class="text-slate-600">contact@wcialbany.org</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="bg-white border rounded-2xl shadow-lg p-10" data-aos="fade-left" data-aos-duration="1000">
                <h2 class="text-3xl font-semibold text-slate-800 mb-8">Send Us a Message</h2>

                <form action="#" method="POST" class="space-y-6">

                    <div>
                        <label class="block text-slate-700 font-medium mb-1">Name</label>
                        <input type="text"
                            class="w-full border rounded-lg px-4 py-3 outline-none focus:ring-2 focus:ring-blue-500 transition"
                            placeholder="Your Name">
                    </div>

                    <div>
                        <label class="block text-slate-700 font-medium mb-1">Email</label>
                        <input type="email"
                            class="w-full border rounded-lg px-4 py-3 outline-none focus:ring-2 focus:ring-blue-500 transition"
                            placeholder="you@example.com">
                    </div>

                    <div>
                        <label class="block text-slate-700 font-medium mb-1">Phone</label>
                        <input type="text"
                            class="w-full border rounded-lg px-4 py-3 outline-none focus:ring-2 focus:ring-blue-500 transition"
                            placeholder="Your Phone Number">
                    </div>

                    <div>
                        <label class="block text-slate-700 font-medium mb-1">Subject</label>
                        <input type="text"
                            class="w-full border rounded-lg px-4 py-3 outline-none focus:ring-2 focus:ring-blue-500 transition"
                            placeholder="Message Subject">
                    </div>

                    <div>
                        <label class="block text-slate-700 font-medium mb-1">Message</label>
                        <textarea rows="6"
                            class="w-full border rounded-lg px-4 py-3 outline-none focus:ring-2 focus:ring-blue-500 transition"
                            placeholder="Write your message here..."></textarea>
                    </div>

                    <button type="submit"
                        class="w-full bg-blue-600 text-white py-3 rounded-lg font-medium text-lg hover:bg-blue-700 shadow transition">
                        Send Message
                    </button>

                </form>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="py-20 bg-slate-50">
        <div class="max-w-5xl mx-auto px-4 text-center">

            <h2 class="text-3xl font-semibold text-slate-800 mb-8" data-aos="fade-up" data-aos-duration="1000">
                Find Us on the Map
            </h2>

            <div class="rounded-2xl overflow-hidden shadow-xl" data-aos="zoom-in" data-aos-duration="1000">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3025.668051915421!2d-73.625!3d40.702!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0:0x0!2zMzDCsDQyJzA3LjIiTiA3M8KwMzcnMjAuMCJX!5e0!3m2!1sen!2sus!4v0000000000"
                    width="100%" height="450" style="border:0;" allowfullscreen loading="lazy">
                </iframe>
            </div>

        </div>
    </section>

@endsection