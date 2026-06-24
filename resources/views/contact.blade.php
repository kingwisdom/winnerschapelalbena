@extends('layouts.app')

@section('title', 'Contact Us — Winners Chapel Int\'l Albany')

@section('content')

<!-- Hero -->
<section class="relative min-h-[55vh] flex items-center overflow-hidden bg-dark">
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1423666639041-f56000c27a9a?w=1920&q=80" alt="Contact"
             class="w-full h-full object-cover opacity-30">
        <div class="absolute inset-0 bg-gradient-to-r from-dark/95 via-dark/80 to-dark/60"></div>
        <div class="absolute inset-0 bg-grid opacity-20"></div>
    </div>

    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center py-24">
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 backdrop-blur border border-white/10 mb-6">
            <span class="w-2 h-2 rounded-full bg-secondary animate-pulse"></span>
            <span class="text-white/70 text-xs font-medium tracking-widest uppercase">Get in Touch</span>
        </div>

        <h1 class="text-4xl md:text-5xl lg:text-6xl font-heading font-bold text-white" data-aos="fade-up">
            Contact Us
        </h1>
        <p class="mt-6 text-lg text-white/70 max-w-2xl mx-auto leading-relaxed" data-aos="fade-up" data-aos-delay="100">
            We would love to hear from you. Reach out with questions, testimonies, prayer requests, or inquiries about our services.
        </p>
    </div>
</section>

<!-- Contact + Form -->
<section class="relative py-24 lg:py-32 bg-light overflow-hidden">
    <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-secondary/5 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-primary/5 rounded-full blur-3xl"></div>

    <div class="relative max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16">

            <!-- Contact Info -->
            <div data-aos="fade-right">
                <span class="inline-block px-4 py-1.5 rounded-full bg-primary/10 text-primary text-xs font-semibold tracking-widest uppercase mb-4">Reach Us</span>
                <h2 class="text-3xl lg:text-4xl font-heading font-bold text-dark red-underline pb-4">Get in Touch</h2>

                <p class="text-dark-muted/70 leading-relaxed mt-8 mb-12">
                    Whether you're visiting for the first time or part of our church family, our team is here to support you. Contact us anytime — we're ready to help.
                </p>

                <div class="space-y-8">
                    <!-- Location -->
                    <div class="flex items-start gap-5 group" data-aos="fade-up">
                        <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-primary/10 to-primary/5 flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-heading font-semibold text-dark text-lg">Our Location</h3>
                            <p class="text-dark-muted/70 mt-1">Winners Chapel Int'l Albany<br>Albany, NY 1524</p>
                        </div>
                    </div>

                    <!-- Phone -->
                    <div class="flex items-start gap-5 group" data-aos="fade-up" data-aos-delay="100">
                        <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-secondary/10 to-secondary/5 flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-6 h-6 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-heading font-semibold text-dark text-lg">Phone</h3>
                            <p class="text-dark-muted/70 mt-1">+1 (385) 457-6738</p>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="flex items-start gap-5 group" data-aos="fade-up" data-aos-delay="200">
                        <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-accent/10 to-accent/5 flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-heading font-semibold text-dark text-lg">Email</h3>
                            <a href="mailto:contact@wcialbany.org" class="text-dark-muted/70 mt-1 hover:text-primary transition-colors">contact@wcialbany.org</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="bg-white rounded-3xl shadow-xl p-8 lg:p-10 border border-dark/5" data-aos="fade-left">
                <h3 class="text-2xl font-heading font-bold text-dark mb-8">Send Us a Message</h3>

                <form action="#" method="POST" class="space-y-6">
                    <div>
                        <label class="block text-sm font-medium text-dark mb-2">Name</label>
                        <input type="text" class="input-field" placeholder="Your Name">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-dark mb-2">Email</label>
                        <input type="email" class="input-field" placeholder="you@example.com">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-dark mb-2">Phone</label>
                        <input type="text" class="input-field" placeholder="Your Phone Number">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-dark mb-2">Subject</label>
                        <input type="text" class="input-field" placeholder="Message Subject">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-dark mb-2">Message</label>
                        <textarea rows="5" class="input-field resize-none" placeholder="Write your message here..."></textarea>
                    </div>

                    <button type="submit" class="btn-gold w-full justify-center text-base py-3.5">
                        Send Message
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Map -->
<section class="relative py-20 bg-dark overflow-hidden">
    <div class="absolute inset-0 bg-grid opacity-10"></div>
    <div class="relative max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12" data-aos="fade-up">
            <span class="inline-block px-4 py-1.5 rounded-full bg-secondary/10 text-secondary text-xs font-semibold tracking-widest uppercase mb-4">Location</span>
            <h2 class="text-3xl lg:text-4xl font-heading font-bold text-white">Find Us on the Map</h2>
        </div>

        <div class="rounded-2xl overflow-hidden shadow-2xl border border-white/10" data-aos="zoom-in">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3025.668051915421!2d-73.625!3d40.702!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0:0x0!2zMzDCsDQyJzA3LjIiTiA3M8KwMzcnMjAuMCJX!5e0!3m2!1sen!2sus!4v0000000000"
                width="100%" height="450" style="border:0;" allowfullscreen loading="lazy">
            </iframe>
        </div>
    </div>
</section>

@endsection
