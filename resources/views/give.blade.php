@extends('layouts.app')

@section('title', 'Give — Winners Chapel Int\'l Albany')

@section('content')

<!-- Hero -->
<section class="relative min-h-[60vh] flex items-center overflow-hidden bg-dark">
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1518458028785-8fbcd101ebb9?w=1920&q=80" alt="Giving"
             class="w-full h-full object-cover opacity-30">
        <div class="absolute inset-0 bg-gradient-to-r from-dark/95 via-dark/80 to-dark/60"></div>
        <div class="absolute inset-0 bg-grid opacity-20"></div>
    </div>

    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center py-24">
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 backdrop-blur border border-white/10 mb-6">
            <span class="w-2 h-2 rounded-full bg-secondary animate-pulse"></span>
            <span class="text-white/70 text-xs font-medium tracking-widest uppercase">Giving</span>
        </div>

        <h1 class="text-4xl md:text-5xl lg:text-6xl font-heading font-bold text-white" data-aos="fade-up">
            Give
        </h1>
        <p class="mt-6 text-lg text-white/70 max-w-2xl mx-auto leading-relaxed" data-aos="fade-up" data-aos-delay="100">
            Your giving helps advance the Gospel and support the work of the kingdom.
        </p>
    </div>
</section>

<!-- Main Giving Section -->
<section class="relative py-24 lg:py-32 bg-light overflow-hidden">
    <div class="absolute top-0 left-0 w-[500px] h-[500px] bg-secondary/5 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 right-0 w-[400px] h-[400px] bg-primary/5 rounded-full blur-3xl"></div>

    <div class="relative max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="inline-block px-4 py-1.5 rounded-full bg-secondary/10 text-secondary text-xs font-semibold tracking-widest uppercase mb-4">Give Through Zelle</span>
            <h2 class="section-title red-underline pb-4">Support the Ministry</h2>
            <p class="section-subtitle mt-6">Your generous giving enables us to reach more souls and strengthen this commission.</p>
        </div>

        <!-- Giving Cards -->
        <div class="grid md:grid-cols-2 gap-8 mb-20">
            <!-- Text to Give -->
            <div class="card bg-white overflow-hidden" data-aos="fade-right">
                <div class="bg-gradient-to-br from-primary to-primary-dark p-8 text-center relative overflow-hidden">
                    <div class="absolute inset-0 bg-grid opacity-10"></div>
                    <div class="relative">
                        <div class="w-16 h-16 rounded-2xl bg-white/10 flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-heading font-bold text-white mb-1">TEXT TO GIVE</h3>
                        <p class="text-white/70 text-sm">Quick and Easy</p>
                    </div>
                </div>
                <div class="p-8 text-center">
                    <p class="text-dark-muted/70 mb-6">Send a text to our giving number to make your donation:</p>
                    <div class="bg-gradient-to-r from-secondary/5 to-secondary/10 rounded-2xl p-6 mb-4 border border-secondary/20">
                        <p class="text-3xl font-bold text-primary font-mono tracking-wide">518-620-5025</p>
                    </div>
                    <p class="text-dark-muted/50 text-sm">Message <span class="font-semibold text-primary">"GIVE"</span> to get started</p>
                </div>
            </div>

            <!-- Zelle -->
            <div class="card bg-white overflow-hidden" data-aos="fade-left">
                <div class="bg-gradient-to-br from-secondary to-secondary-dark p-8 text-center relative overflow-hidden">
                    <div class="absolute inset-0 bg-grid opacity-10"></div>
                    <div class="relative">
                        <div class="w-16 h-16 rounded-2xl bg-white/10 flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-heading font-bold text-dark mb-1">GIVE THROUGH ZELLE</h3>
                        <p class="text-dark/70 text-sm">Direct Transfer</p>
                    </div>
                </div>
                <div class="p-8 text-center">
                    <p class="text-dark-muted/70 mb-6">Use Zelle from your bank app to send your gift directly:</p>
                    <div class="bg-gradient-to-r from-secondary/5 to-secondary/10 rounded-2xl p-6 mb-4 border border-secondary/20">
                        <p class="text-xl font-mono text-primary font-semibold break-all tracking-wide">wci_albany@hotmail.com</p>
                    </div>
                    <p class="text-dark-muted/50 text-sm">Available through most major banks</p>
                </div>
            </div>
        </div>

        <!-- Divider -->
        <div class="relative mb-20">
            <div class="absolute inset-0 flex items-center">
                <div class="w-full border-t border-dark/10"></div>
            </div>
            <div class="relative flex justify-center">
                <span class="bg-light px-6 text-dark-muted/40 text-sm">More Ways to Give</span>
            </div>
        </div>

        <!-- Additional Options -->
        <div class="grid sm:grid-cols-1 md:grid-cols-3 gap-6" data-aos="fade-up">
            <div class="group card bg-white p-8 text-center">
                <div class="w-16 h-16 rounded-2xl bg-secondary/10 flex items-center justify-center mx-auto mb-5 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-heading font-bold text-dark mb-3">In-Person Giving</h3>
                <p class="text-dark-muted/70 text-sm leading-relaxed">Give during our worship services at Winners Chapel Albany</p>
            </div>

            <div class="group card bg-white p-8 text-center">
                <div class="w-16 h-16 rounded-2xl bg-secondary/10 flex items-center justify-center mx-auto mb-5 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-heading font-bold text-dark mb-3">Mail Your Gift</h3>
                <p class="text-dark-muted/70 text-sm leading-relaxed">310 Fulton Avenue, Hempstead, NY 11550</p>
            </div>

            <div class="group card bg-white p-8 text-center">
                <div class="w-16 h-16 rounded-2xl bg-secondary/10 flex items-center justify-center mx-auto mb-5 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
                    </svg>
                </div>
                <h3 class="text-lg font-heading font-bold text-dark mb-3">Our Website</h3>
                <p class="text-dark-muted/70 text-sm leading-relaxed">WCIALBANY.ORG</p>
            </div>
        </div>
    </div>
</section>

<!-- Testimonial -->
<section class="relative py-20 bg-dark overflow-hidden">
    <div class="absolute inset-0 bg-grid opacity-10"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-secondary/5 rounded-full blur-3xl"></div>

    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white/5 backdrop-blur-sm rounded-2xl border border-white/10 p-10 lg:p-14" data-aos="fade-up">
            <svg class="w-12 h-12 text-secondary/40 mb-6" fill="currentColor" viewBox="0 0 24 24">
                <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
            </svg>
            <p class="text-white/80 text-xl leading-relaxed mb-8">
                "Thank you for your generous support. Every seed sown helps us reach more people, strengthen lives, and build the work God has committed to this commission."
            </p>
            <div class="flex items-center gap-3">
                <div class="w-1 h-8 bg-secondary rounded-full"></div>
                <div>
                    <p class="text-secondary font-semibold">Winners Chapel Albany</p>
                    <p class="text-white/40 text-sm">Thanking You in Advance</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
