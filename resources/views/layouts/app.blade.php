<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>@yield('title', 'Winners Chapel Int\'l Albany')</title>

    <link favicon href="{{ asset('/favicon.ico') }}" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Playfair+Display:wght@500;600;700&display=swap"
        rel="stylesheet">


    <meta name="description"
        content="@yield('meta_description', 'Winners Chapel International, Albany — faith, community and service')" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        // 'body': ['Open Sans', 'sans-serif'],
                        sans: ['Inter', 'sans-serif'],          // body font
                        heading: ['Playfair Display', 'serif'], // heading font
                    }
                }
            }
        }
    </script>
    <style>
        @layer base {
            body {
                @apply font-sans;
            }

            h1,
            h2,
            h3,
            h4,
            h5,
            h6 {
                @apply font-heading;
            }
        }
    </style>
</head>

<body class="antialiased text-red-800 bg-white">

    <!-- Preloader (optional) -->
    <div id="preloader" class="fixed inset-0 bg-white flex items-center justify-center z-50">
        <div class="animate-spin w-12 h-12 border-4 border-red-200 border-t-indigo-600 rounded-full"></div>
    </div>

    <header class="bg-white shadow-sm" x-data="{ openMobile: false }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">

                <!-- Logo -->
                <a href="/" class="flex items-center gap-3">
                    <img src="{{ asset('/logoo.png') }}" alt="Winners Chapel Albany" class="h-10 w-auto" />
                    <div class="hidden md:block">
                        <p class="font-semibold text-xl">Winners Chapel Int'l Albany</p>
                        <p class="text-xs text-gray-500">Faith. Freedom. Fellowship.</p>
                    </div>
                </a>

                <!-- Desktop Navigation -->
                <nav class="hidden md:flex items-center space-x-6">

                    <a href="/" class="text-sm font-medium text-gray-700 hover:text-gray-900">Home</a>

                    <!-- WHO WE ARE DROPDOWN -->
                    <div class="relative" x-data="{ open: false }">
                        <button @mouseenter="open = true" @mouseleave="open = false"
                            class="text-sm font-medium text-gray-700 hover:text-gray-700 flex items-center gap-1">
                            Who we are
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <div x-show="open" x-transition.opacity x-transition.duration.200ms @mouseenter="open = true"
                            @mouseleave="open = false"
                            class="absolute left-0 mt-2 w-48 bg-white border shadow-lg rounded-lg py-2 z-50">

                            <a href="/who-we-are/our-story"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-black">
                                Our Story
                            </a>

                            <a href="/who-we-are/the-mandate"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-black">
                                The Mandate
                            </a>

                            <a href="/who-we-are/pillars" class="block px-4 py-2 text-sm text-gray-700 hover:bg-black">
                                Pillars
                            </a>
                            <a href="/who-we-are/leadership"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-black">
                                Leadership
                            </a>
                        </div>
                    </div>

                    <!-- MINISTRIES DROPDOWN -->
                    <div class="relative" x-data="{ open: false }">
                        <button @mouseenter="open = true" @mouseleave="open = false"
                            class="text-sm font-medium text-gray-700 hover:text-indigo-700 flex items-center gap-1">
                            Ministries
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <div x-show="open" x-transition.opacity x-transition.duration.200ms @mouseenter="open = true"
                            @mouseleave="open = false"
                            class="absolute left-0 mt-2 w-48 bg-white border shadow-lg rounded-lg py-2 z-50">

                            <a href="/ministries/children"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-50">
                                Children Ministry
                            </a>
                            <a href="{{route('yaf')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-50">
                                Youth Alive Ministry
                            </a>

                            <a href="/ministries/teens"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-50">
                                Teens Ministry
                            </a>

                            <a href="/ministries/wsf" class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-50">
                                WSF
                            </a>
                            <a href="/ministries/wofbi"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-50">
                                WOFBI
                            </a>
                        </div>
                    </div>

                    <a href="{{ route('give') }}" class="text-sm font-medium text-gray-700 hover:text-gray-700">Give</a>
                    <a href="{{ route('contact') }}"
                        class="text-sm font-medium text-gray-700 hover:text-gray-700">Contact</a>
                </nav>

                <!-- Actions -->
                <div class="flex items-center gap-3">
                    <a href="https://www.youtube.com/@lfcww/streams" target="_blank"
                        class="hidden sm:inline-flex items-center px-4 py-2 text-sm font-semibold rounded-full bg-gray-600 text-white hover:bg-gray-700">
                        Watch Live
                    </a>

                    <!-- Mobile button -->
                    <button @click="openMobile = !openMobile"
                        class="md:hidden p-2 rounded-md inline-flex items-center justify-center text-gray-700 hover:bg-gray-100">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- MOBILE NAV -->
        <div x-show="openMobile" x-transition.origin.top x-transition.duration.200ms
            class="md:hidden border-t bg-white">

            <div class="px-4 pb-4 space-y-2">

                <a href="/" class="block py-2 text-red-700">Home</a>

                <!-- MOBILE WHO WE ARE DROPDOWN -->
                <div x-data="{ open: false }">
                    <button @click="open = !open" class="flex justify-between w-full py-2 text-red-700">
                        Who We Are
                        <span>▼</span>
                    </button>

                    <div x-show="open" x-transition class="pl-4 space-y-1">
                        <a href="/who-we-are/our-story" class="block py-1 text-gray-600">Our Story</a>
                        <a href="/who-we-are/the-mandate" class="block py-1 text-gray-600">The Mandate</a>
                        <a href="/who-we-are/pillars" class="block py-1 text-gray-600">Pillars</a>
                        <a href="/who-we-are/leadership" class="block py-1 text-gray-600">Leadership</a>
                    </div>
                </div>

                <!-- MOBILE MINISTRIES DROPDOWN -->
                <div x-data="{ open: false }">
                    <button @click="open = !open" class="flex justify-between w-full py-2 text-gray-700">
                        Ministries
                        <span>▼</span>
                    </button>

                    <div x-show="open" x-transition class="pl-4 space-y-1">

                        <a href="/ministries/children" class="block py-1 text-gray-600">Children Ministry</a>
                        <a href="{{route('yaf')}}" class="block py-1 text-gray-600">Youth Alive Ministry</a>
                        <a href="/ministries/teens" class="block py-1 text-gray-600">Teens Ministry</a>
                        <a href="/ministries/wsf" class="block py-1 text-gray-600">WSF Ministry</a>
                        <a href="/ministries/wofbi" class="block py-1 text-gray-600">WOFBI Ministry</a>
                    </div>
                </div>

                <a href="{{ route('give') }}" class="block py-2 text-gray-700">Give</a>
                <a href="{{ route('contact') }}" class="block py-2 text-gray-700">Contact</a>
            </div>
        </div>
    </header>


    <main id="site-content" class="min-h-screen">
        @yield('content')
    </main>

    <footer class="bg-black text-white py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-6xl mx-auto">
            <!-- Enhanced footer with three columns and social icons -->
            <div class="grid md:grid-cols-3 gap-10 mb-12">
                <!-- Location & Contact -->
                <div class="space-y-3">
                    <h3 class="text-lg font-semibold">Winners Chapel Albany</h3>
                    <p class="text-gray-400 text-sm">Faith. Freedom. Fellowship.</p>
                    <p class="text-sm text-gray-300 leading-relaxed">
                        Albany, NY 1524
                    </p>
                    <p class="text-sm text-gray-300 pt-2">
                        Phone: <span class="font-medium hover:text-red-400 transition cursor-pointer">+1 (385)
                            457-6738</span>
                    </p>
                    <p class="text-sm text-gray-300">
                        Email: <a href="mailto:info@wcialbany.org"
                            class="hover:text-red-400 transition">info@wcialbany.org</a>
                    </p>
                </div>

                <!-- Weekly Program -->
                <div>
                    <h4 class="font-semibold text-lg mb-4">Weekly Program</h4>
                    <ul class="text-sm text-gray-400 space-y-2">
                        <li class="hover:text-white hover:translate-x-1 transition cursor-pointer">Sunday Worship —
                            9:00am - 11:00am</li>
                        <li class="hover:text-white hover:translate-x-1 transition cursor-pointer">Mid-Week Communion —
                            Wed 7:00pm</li>
                        <li class="hover:text-white hover:translate-x-1 transition cursor-pointer">Daily Covenant Hour —
                            Mon–Fri 6:00am</li>
                        <li class="hover:text-white hover:translate-x-1 transition cursor-pointer">Saturday WSF</li>
                    </ul>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="font-semibold text-lg mb-4">Quick Links</h4>
                    <ul class="text-sm text-gray-400 space-y-2">
                        <li><a href="#" class="hover:text-red-400 hover:translate-x-1 transition">WOFBI</a></li>
                        <li><a href="#" class="hover:text-red-400 hover:translate-x-1 transition">Covenant Hour</a></li>
                        <li><a href="#" class="hover:text-red-400 hover:translate-x-1 transition">Gallery</a></li>
                        <li><a href="#" class="hover:text-red-400 hover:translate-x-1 transition">Bookstore</a></li>
                    </ul>
                </div>
            </div>

            <!-- Added social media icons section -->
            <div class="border-t border-gray-800 pt-8 mb-8">
                <h4 class="font-semibold text-lg mb-4">Follow Us</h4>
                <div class="flex gap-4">
                    <!-- Facebook -->
                    <a href="https://facebook.com" target="_blank"
                        class="w-10 h-10 rounded-full bg-gray-800 hover:bg-red-600 flex items-center justify-center transition transform hover:scale-110">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5c-.563-.074-1.396-.148-2.59-.148-2.624 0-4.41 1.748-4.41 4.919v2.229z" />
                        </svg>
                    </a>
                    <!-- Twitter/X -->
                    <a href="https://twitter.com" target="_blank"
                        class="w-10 h-10 rounded-full bg-gray-800 hover:bg-red-600 flex items-center justify-center transition transform hover:scale-110">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2s9 5 20 5a9.5 9.5 0 00-9-5.5c4.75 2.25 7-7 7-7a10.6 10.6 0 01-9.5 5M21 20.5a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0z" />
                        </svg>
                    </a>
                    <!-- Instagram -->
                    <a href="https://instagram.com" target="_blank"
                        class="w-10 h-10 rounded-full bg-gray-800 hover:bg-red-600 flex items-center justify-center transition transform hover:scale-110">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <rect x="2" y="2" width="20" height="20" rx="5" ry="5" fill="none" stroke="currentColor"
                                stroke-width="2" />
                            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z" stroke="currentColor" stroke-width="2"
                                fill="none" />
                            <circle cx="17.5" cy="6.5" r="1.5" fill="currentColor" />
                        </svg>
                    </a>
                    <!-- YouTube -->
                    <a href="https://www.youtube.com/@lfcww/streams" target="_blank"
                        class="w-10 h-10 rounded-full bg-gray-800 hover:bg-red-600 flex items-center justify-center transition transform hover:scale-110">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Bottom Bar -->
            <div class="border-t border-red-600 pt-8 text-center text-sm text-gray-400">
                <p>&copy; 2025 Winners Chapel Int'l Albany — All rights reserved.</p>
            </div>
        </div>
    </footer>


    <script>
        // Small UI helpers: hide preloader and toggle mobile nav
        window.addEventListener('load', () => {
            const pre = document.getElementById('preloader');
            if (pre) pre.style.display = 'none';
        });

        document.getElementById('mobile-nav-toggle')?.addEventListener('click', () => {
            const el = document.getElementById('mobile-nav');
            el.classList.toggle('hidden');
        });
    </script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init({
            duration: 1000,
            easing: 'ease-out-quart',
            once: true,
        });
    </script>

    @stack('scripts')
</body>

</html>