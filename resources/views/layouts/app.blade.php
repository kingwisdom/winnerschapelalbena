<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('title', 'Winners Chapel Int\'l Albany')</title>
    <link rel="icon" href="{{ asset('/favicon.ico') }}">
    <meta name="description"
        content="@yield('meta_description', 'Winners Chapel International, Albany — faith, community and service')">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,400&display=swap"
        rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased text-dark bg-light">

    <!-- Preloader -->
    <div id="preloader"
        class="fixed inset-0 bg-dark flex items-center justify-center z-[100] transition-opacity duration-500">
        <div class="flex flex-col items-center gap-4">
            <div class="w-12 h-12 border-2 border-primary border-t-transparent rounded-full animate-spin"></div>
            <p class="text-primary text-sm font-medium tracking-widest uppercase">Loading</p>
        </div>
    </div>

    <!-- Header -->
    <header x-data="{ openMobile: false, scrolled: false }"
        x-init="window.addEventListener('scroll', () => scrolled = window.scrollY > 40)"
        class="fixed top-0 left-0 right-0 z-50 transition-all duration-500"
        :class="scrolled ? 'bg-white/90 backdrop-blur-xl shadow-lg' : 'bg-transparent'">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">

                <!-- Logo -->
                <a href="/" class="flex items-center gap-3 group">
                    <img src="{{ asset('/logoo.png') }}" alt="Winners Chapel Albany"
                        class="h-10 w-auto transition-transform duration-300 group-hover:scale-105">
                    <div class="hidden md:block">
                        <p class="font-heading font-semibold text-xl transition-colors duration-300"
                            :class="scrolled ? 'text-primary' : 'text-white'">
                            Winners Chapel Int'l Albany
                        </p>
                        <p class="text-xs tracking-wider transition-colors duration-300"
                            :class="scrolled ? 'text-dark-muted/60' : 'text-white/60'">
                            Faith. Freedom. Fellowship.
                        </p>
                    </div>
                </a>

                <!-- Desktop Navigation -->
                <nav class="hidden lg:flex items-center gap-8">
                    <a href="/" class="text-sm font-medium transition-colors duration-300"
                        :class="scrolled ? 'text-dark hover:text-primary' : 'text-white/80 hover:text-white'">
                        Home
                    </a>

                    <!-- Who We Are Dropdown -->
                    <div class="relative" x-data="{ open: false }">
                        <button @mouseenter="open = true" @mouseleave="open = false"
                            class="text-sm font-medium flex items-center gap-1 transition-colors duration-300"
                            :class="scrolled ? 'text-dark hover:text-primary' : 'text-white/80 hover:text-white'">
                            Who We Are
                            <svg class="w-3.5 h-3.5 mt-0.5 transition-transform duration-200"
                                :class="open && 'rotate-180'" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div x-show="open" x-transition.opacity.origin.top.duration.200ms @mouseenter="open = true"
                            @mouseleave="open = false"
                            class="absolute left-0 mt-3 w-52 bg-white/95 backdrop-blur-xl rounded-2xl shadow-2xl border border-dark/5 py-3 z-50 overflow-hidden">
                            <div
                                class="absolute top-0 left-8 w-4 h-4 bg-white/95 rotate-45 -translate-y-2 border-l border-t border-dark/5">
                            </div>
                            <a href="/who-we-are/our-story"
                                class="block px-5 py-2.5 text-sm text-dark hover:bg-secondary/10 hover:text-primary font-medium transition-all duration-200">Our
                                Story</a>
                            <a href="/who-we-are/the-mandate"
                                class="block px-5 py-2.5 text-sm text-dark hover:bg-secondary/10 hover:text-primary font-medium transition-all duration-200">The
                                Mandate</a>
                            <a href="/who-we-are/pillars"
                                class="block px-5 py-2.5 text-sm text-dark hover:bg-secondary/10 hover:text-primary font-medium transition-all duration-200">Pillars</a>
                            <a href="/who-we-are/leadership"
                                class="block px-5 py-2.5 text-sm text-dark hover:bg-secondary/10 hover:text-primary font-medium transition-all duration-200">Leadership</a>
                        </div>
                    </div>

                    <!-- Ministries Dropdown -->
                    <div class="relative" x-data="{ open: false }">
                        <button @mouseenter="open = true" @mouseleave="open = false"
                            class="text-sm font-medium flex items-center gap-1 transition-colors duration-300"
                            :class="scrolled ? 'text-dark hover:text-primary' : 'text-white/80 hover:text-white'">
                            Ministries
                            <svg class="w-3.5 h-3.5 mt-0.5 transition-transform duration-200"
                                :class="open && 'rotate-180'" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div x-show="open" x-transition.opacity.origin.top.duration.200ms @mouseenter="open = true"
                            @mouseleave="open = false"
                            class="absolute left-0 mt-3 w-56 bg-white/95 backdrop-blur-xl rounded-2xl shadow-2xl border border-dark/5 py-3 z-50 overflow-hidden">
                            <div
                                class="absolute top-0 left-8 w-4 h-4 bg-white/95 rotate-45 -translate-y-2 border-l border-t border-dark/5">
                            </div>
                            <a href="/ministries/children"
                                class="block px-5 py-2.5 text-sm text-dark hover:bg-secondary/10 hover:text-primary font-medium transition-all duration-200">Children
                                Ministry</a>
                            <a href="{{ route('yaf') }}"
                                class="block px-5 py-2.5 text-sm text-dark hover:bg-secondary/10 hover:text-primary font-medium transition-all duration-200">Youth
                                Alive Ministry</a>
                            <a href="/ministries/teens"
                                class="block px-5 py-2.5 text-sm text-dark hover:bg-secondary/10 hover:text-primary font-medium transition-all duration-200">Teens
                                Ministry</a>
                            <a href="/ministries/wsf"
                                class="block px-5 py-2.5 text-sm text-dark hover:bg-secondary/10 hover:text-primary font-medium transition-all duration-200">WSF</a>
                            <a href="/ministries/wofbi"
                                class="block px-5 py-2.5 text-sm text-dark hover:bg-secondary/10 hover:text-primary font-medium transition-all duration-200">WOFBI</a>
                        </div>
                    </div>

                    <a href="{{ route('give') }}" class="text-sm font-medium transition-colors duration-300"
                        :class="scrolled ? 'text-dark hover:text-primary' : 'text-white/80 hover:text-white'">
                        Give
                    </a>
                    <a href="{{ route('contact') }}" class="text-sm font-medium transition-colors duration-300"
                        :class="scrolled ? 'text-dark hover:text-primary' : 'text-white/80 hover:text-white'">
                        Contact
                    </a>
                </nav>

                <!-- Actions -->
                <div class="flex items-center gap-4">
                    <a href="https://www.youtube.com/@lfcww/streams" target="_blank" class="hidden sm:inline-flex items-center gap-2 px-5 py-2.5 rounded-full text-sm font-semibold
                              bg-gradient-to-r from-secondary to-secondary-light text-dark
                              hover:from-secondary-dark hover:to-secondary
                              shadow-lg shadow-secondary/20 hover:shadow-xl hover:shadow-secondary/30
                              transition-all duration-300 hover:-translate-y-0.5">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                        </svg>
                        Watch Live
                    </a>

                    <!-- Mobile button -->
                    <button @click="openMobile = !openMobile"
                        class="lg:hidden relative w-10 h-10 rounded-xl flex items-center justify-center transition-all duration-300"
                        :class="scrolled ? 'text-dark bg-dark/5 hover:bg-dark/10' : 'text-white bg-white/10 hover:bg-white/20'">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path x-show="!openMobile" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                            <path x-show="openMobile" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation Drawer -->
        <div x-show="openMobile" x-transition:enter="transition duration-300 ease-out"
            x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
            x-transition:leave="transition duration-200 ease-in" x-transition:leave-start="translate-x-0"
            x-transition:leave-end="-translate-x-full" @click.away="openMobile = false"
            class="fixed inset-0 z-50 lg:hidden">

            <!-- Overlay -->
            <div x-show="openMobile" x-transition.opacity class="absolute inset-0 bg-dark/60 backdrop-blur-sm"></div>

            <!-- Drawer -->
            <div class="relative w-80 max-w-[85vw] h-full bg-white shadow-2xl overflow-y-auto">
                <div class="p-6">
                    <div class="flex justify-between items-center mb-8">
                        <img src="{{ asset('/logoo.png') }}" alt="Winners Chapel" class="h-10 w-auto">
                        <button @click="openMobile = false"
                            class="w-10 h-10 rounded-xl bg-dark/5 flex items-center justify-center text-dark hover:bg-dark/10 transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    <nav class="space-y-1">
                        <a href="/"
                            class="block px-4 py-3 rounded-xl text-dark font-medium hover:bg-secondary/10 hover:text-primary transition-all">Home</a>

                        <!-- Mobile Who We Are -->
                        <div x-data="{ open: false }">
                            <button @click="open = !open"
                                class="flex justify-between items-center w-full px-4 py-3 rounded-xl text-dark font-medium hover:bg-secondary/10 hover:text-primary transition-all">
                                Who We Are
                                <svg class="w-4 h-4 transition-transform duration-200" :class="open && 'rotate-180'"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div x-show="open" x-collapse class="pl-4 space-y-1">
                                <a href="/who-we-are/our-story"
                                    class="block px-4 py-2.5 rounded-lg text-sm text-dark-muted hover:bg-secondary/10 hover:text-primary transition-all">Our
                                    Story</a>
                                <a href="/who-we-are/the-mandate"
                                    class="block px-4 py-2.5 rounded-lg text-sm text-dark-muted hover:bg-secondary/10 hover:text-primary transition-all">The
                                    Mandate</a>
                                <a href="/who-we-are/pillars"
                                    class="block px-4 py-2.5 rounded-lg text-sm text-dark-muted hover:bg-secondary/10 hover:text-primary transition-all">Pillars</a>
                                <a href="/who-we-are/leadership"
                                    class="block px-4 py-2.5 rounded-lg text-sm text-dark-muted hover:bg-secondary/10 hover:text-primary transition-all">Leadership</a>
                            </div>
                        </div>

                        <!-- Mobile Ministries -->
                        <div x-data="{ open: false }">
                            <button @click="open = !open"
                                class="flex justify-between items-center w-full px-4 py-3 rounded-xl text-dark font-medium hover:bg-secondary/10 hover:text-primary transition-all">
                                Ministries
                                <svg class="w-4 h-4 transition-transform duration-200" :class="open && 'rotate-180'"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div x-show="open" x-collapse class="pl-4 space-y-1">
                                <a href="/ministries/children"
                                    class="block px-4 py-2.5 rounded-lg text-sm text-dark-muted hover:bg-secondary/10 hover:text-primary transition-all">Children
                                    Ministry</a>
                                <a href="{{ route('yaf') }}"
                                    class="block px-4 py-2.5 rounded-lg text-sm text-dark-muted hover:bg-secondary/10 hover:text-primary transition-all">Youth
                                    Alive Ministry</a>
                                <a href="/ministries/teens"
                                    class="block px-4 py-2.5 rounded-lg text-sm text-dark-muted hover:bg-secondary/10 hover:text-primary transition-all">Teens
                                    Ministry</a>
                                <a href="/ministries/wsf"
                                    class="block px-4 py-2.5 rounded-lg text-sm text-dark-muted hover:bg-secondary/10 hover:text-primary transition-all">WSF</a>
                                <a href="/ministries/wofbi"
                                    class="block px-4 py-2.5 rounded-lg text-sm text-dark-muted hover:bg-secondary/10 hover:text-primary transition-all">WOFBI</a>
                            </div>
                        </div>

                        <a href="{{ route('give') }}"
                            class="block px-4 py-3 rounded-xl text-dark font-medium hover:bg-secondary/10 hover:text-primary transition-all">Give</a>
                        <a href="{{ route('contact') }}"
                            class="block px-4 py-3 rounded-xl text-dark font-medium hover:bg-secondary/10 hover:text-primary transition-all">Contact</a>
                    </nav>

                    <div class="mt-8 pt-8 border-t border-dark/10">
                        <a href="https://www.youtube.com/@lfcww/streams" target="_blank"
                            class="flex items-center justify-center gap-2 w-full py-3 rounded-full bg-gradient-to-r from-secondary to-secondary-light text-dark font-semibold shadow-lg transition-all hover:-translate-y-0.5">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                            </svg>
                            Watch Live
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main id="site-content">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="relative bg-dark overflow-hidden">
        <!-- Decorative top border -->
        <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-secondary via-secondary-light to-secondary">
        </div>

        <!-- Background pattern -->
        <div class="absolute inset-0 bg-grid opacity-30"></div>
        <div class="absolute inset-0 bg-radial-gradient"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 lg:py-20">
            <div class="grid md:grid-cols-2 lg:grid-cols-12 gap-12 lg:gap-8">

                <!-- Brand Column -->
                <div class="lg:col-span-4 space-y-5">
                    <div class="flex items-center gap-3">
                        <img src="{{ asset('/logoo.png') }}" alt="Winners Chapel Albany"
                            class="h-10 w-auto brightness-0 invert">
                        <div>
                            <p class="font-heading font-semibold text-lg text-white">Winners Chapel Int'l Albany</p>
                            <p class="text-xs text-white/50 tracking-wider">Faith. Freedom. Fellowship.</p>
                        </div>
                    </div>
                    <p class="text-white/60 text-sm leading-relaxed max-w-xs">
                        Advancing the Kingdom of God through faith teaching and community transformation in Albany, New
                        York.
                    </p>
                    <div class="flex gap-3">
                        <a href="https://facebook.com" target="_blank"
                            class="w-10 h-10 rounded-xl bg-white/10 flex items-center justify-center text-white/60 hover:bg-secondary hover:text-dark transition-all duration-300 hover:-translate-y-0.5">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5c-.563-.074-1.396-.148-2.59-.148-2.624 0-4.41 1.748-4.41 4.919v2.229z" />
                            </svg>
                        </a>
                        <a href="https://twitter.com" target="_blank"
                            class="w-10 h-10 rounded-xl bg-white/10 flex items-center justify-center text-white/60 hover:bg-secondary hover:text-dark transition-all duration-300 hover:-translate-y-0.5">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                            </svg>
                        </a>
                        <a href="https://instagram.com" target="_blank"
                            class="w-10 h-10 rounded-xl bg-white/10 flex items-center justify-center text-white/60 hover:bg-secondary hover:text-dark transition-all duration-300 hover:-translate-y-0.5">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                <rect x="2" y="2" width="20" height="20" rx="5" ry="5" />
                                <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z" />
                                <circle cx="17.5" cy="6.5" r="1.5" />
                            </svg>
                        </a>
                        <a href="https://www.youtube.com/@lfcww/streams" target="_blank"
                            class="w-10 h-10 rounded-xl bg-white/10 flex items-center justify-center text-white/60 hover:bg-secondary hover:text-dark transition-all duration-300 hover:-translate-y-0.5">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="lg:col-span-2">
                    <h4 class="font-heading font-semibold text-white text-lg mb-6">Quick Links</h4>
                    <ul class="space-y-3">
                        <li><a href="#"
                                class="text-white/50 text-sm hover:text-secondary transition-colors duration-200">WOFBI</a>
                        </li>
                        <li><a href="#"
                                class="text-white/50 text-sm hover:text-secondary transition-colors duration-200">Covenant
                                Hour</a></li>
                        <li><a href="#"
                                class="text-white/50 text-sm hover:text-secondary transition-colors duration-200">Gallery</a>
                        </li>
                        <li><a href="#"
                                class="text-white/50 text-sm hover:text-secondary transition-colors duration-200">Bookstore</a>
                        </li>
                    </ul>
                </div>

                <!-- Weekly Program -->
                <div class="lg:col-span-3">
                    <h4 class="font-heading font-semibold text-white text-lg mb-6">Weekly Program</h4>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-3">
                            <div class="w-2 h-2 rounded-full bg-secondary mt-2 shrink-0"></div>
                            <div>
                                <p class="text-white text-sm font-medium">Sunday Worship</p>
                                <p class="text-white/50 text-xs">9:00am - 11:00am</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-3">
                            <div class="w-2 h-2 rounded-full bg-secondary mt-2 shrink-0"></div>
                            <div>
                                <p class="text-white text-sm font-medium">Mid-Week Communion</p>
                                <p class="text-white/50 text-xs">6:00 pm - 7:30 pm</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-3">
                            <div class="w-2 h-2 rounded-full bg-secondary mt-2 shrink-0"></div>
                            <div>
                                <p class="text-white text-sm font-medium">Daily Covenant Hour</p>
                                <p class="text-white/50 text-xs">Mon–Fri 6:00am</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-3">
                            <div class="w-2 h-2 rounded-full bg-secondary mt-2 shrink-0"></div>
                            <div>
                                <p class="text-white text-sm font-medium">Saturday WSF</p>
                                <p class="text-white/50 text-xs">5:00 pm - 6:00 pm</p>
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- Contact -->
                <div class="lg:col-span-3">
                    <h4 class="font-heading font-semibold text-white text-lg mb-6">Contact</h4>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-secondary shrink-0 mt-0.5" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <div>
                                <p class="text-white text-sm font-medium">Location</p>
                                <p class="text-white/50 text-sm">Albany, NY 1524</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-secondary shrink-0 mt-0.5" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <div>
                                <p class="text-white text-sm font-medium">Phone</p>
                                <p class="text-white/50 text-sm">+1 (385) 457-6738</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-secondary shrink-0 mt-0.5" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <div>
                                <p class="text-white text-sm font-medium">Email</p>
                                <a href="mailto:info@wcialbany.org"
                                    class="text-white/50 text-sm hover:text-secondary transition-colors">info@wcialbany.org</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Bar -->
            <div class="relative mt-16 pt-8 border-t border-white/10">
                <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                    <p class="text-white/40 text-sm">&copy; 2025 Winners Chapel Int'l Albany — All rights reserved.</p>
                    <div class="flex gap-6 text-xs text-white/30">
                        <span class="tracking-wider uppercase">Faith</span>
                        <span class="tracking-wider uppercase">Freedom</span>
                        <span class="tracking-wider uppercase">Fellowship</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init({
            duration: 800,
            easing: 'ease-out-cubic',
            once: true,
            offset: 100,
        });

        const hidePreloader = () => {
            const pre = document.getElementById('preloader');
            if (pre) {
                pre.style.opacity = '0';
                setTimeout(() => pre.style.display = 'none', 500);
            }
        };
        window.addEventListener('load', hidePreloader);
        setTimeout(hidePreloader, 3000);
    </script>

    @stack('scripts')
</body>

</html>