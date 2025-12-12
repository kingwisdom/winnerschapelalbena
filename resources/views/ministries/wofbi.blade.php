@extends('layouts.app')

@section('title', 'WOFBI — Word of Faith Bible Institute')

@section('content')

    <!-- Hero -->
    <section class="py-32 bg-cover bg-center bg-no-repeat relative"
        style="background-image: url('{{ asset('https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgWT03l8sxFFkm0r7YMChaIVK3fsuB1UNSED4FMNPRLkJgKyvwzFvqkAesY-uTTlSsszFpgNJPocCsEWGq5Dame4UCa3TwjiCfhyphenhyphennWUy61EuNkSG4uXHK26sn80focj5ku8mRc7FouWS1A/w1200-h630-p-k-no-nu/DSC_0218.JPG') }}');"
        data-aos="fade-up" data-aos-duration="1000">
        <div class="absolute inset-0 bg-red-900/60"></div>

        <div class="relative max-w-4xl mx-auto px-4 text-center text-white">
            <h1 class="text-3xl md:text-4xl font-bold">Word of Faith Bible Institute (WOFBI)</h1>
            <p class="mt-4 max-w-2xl mx-auto">
                Training men and women for exploits through sound biblical teaching and spiritual development.
            </p>
        </div>
    </section>

    <!-- Main Content -->
    <section class="py-16">
        <div class="max-w-4xl mx-auto px-4">

            <!-- Intro -->
            <p class="text-slate-700 leading-relaxed mb-8" data-aos="fade-up" data-aos-duration="1000">
                The Word of Faith Bible Institute (WOFBI) is the training and leadership development arm of
                the Living Faith Church Worldwide. Established on September 1, 1986, in Kaduna, Nigeria, the institute has
                graduated over 50,000 students around the world.
            </p>

            <blockquote class="border-l-4 border-red-600 pl-4 italic text-slate-700 mb-8" data-aos="fade-up"
                data-aos-duration="1000">
                “And when Abram heard that his brother was taken captive, he armed his trained servants born
                in his own house, three hundred and eighteen, and pursued them unto Dan.”
                — Genesis 14:14
            </blockquote>

            <p class="text-slate-700 leading-relaxed mb-12" data-aos="fade-up" data-aos-duration="1000">
                This scripture is the anchor for the institute. Simply put, WOFBI trains kingdom soldiers,
                equips leaders, and raises men and women who excel spiritually and practically in their various fields.
            </p>

            <!-- Vision -->
            <div class="bg-white border rounded-lg shadow p-6 mb-12" data-aos="fade-up" data-aos-duration="1000">
                <h2 class="text-xl font-semibold mb-3">Our Vision</h2>
                <p class="text-slate-700 leading-relaxed">
                    To train believers for exploits and prepare them to fulfill destiny in ministry, career,
                    leadership, and personal development. Many global ministries, pastors, business leaders,
                    and professionals trace their foundations to WOFBI.
                </p>
            </div>

            <!-- Programs -->
            <h2 class="text-2xl font-semibold mb-6" data-aos="fade-up" data-aos-duration="1000">
                Certificate Programs
            </h2>

            <p class="text-slate-700 leading-relaxed mb-8" data-aos="fade-up" data-aos-duration="1000">
                WOFBI offers three levels of training. Each level runs multiple courses designed to strengthen
                spiritual depth and biblical understanding.
            </p>

            <!-- Program List -->
            <div class="space-y-12">

                <!-- BCC -->
                <div class="bg-white border rounded-lg p-6 shadow" data-aos="fade-up" data-aos-duration="1000">
                    <h3 class="text-xl font-semibold mb-4">Basic Certificate Course (BCC)</h3>
                    <ul class="space-y-2 text-slate-700 leading-relaxed">
                        <li>• Word Foundation (WFN)</li>
                        <li>• New Creation Fundamentals (NCF)</li>
                        <li>• Character Development (CDM)</li>
                        <li>• Principles of Answered Prayer (PAP)</li>
                        <li>• Principles of Faith (POF)</li>
                        <li>• Principles of Success (POS)</li>
                        <li>• Determining Divine Direction (DDD)</li>
                        <li>• Principles of Financial Prosperity (PFP)</li>
                        <li>• Family Life (FML)</li>
                        <li>• Principles of Divine Health (PDH)</li>
                        <li>• The Holy Spirit (THS)</li>
                    </ul>
                </div>

                <!-- LCC -->
                <div class="bg-white border rounded-lg p-6 shadow" data-aos="fade-up" data-aos-duration="1000">
                    <h3 class="text-xl font-semibold mb-4">Leadership Certificate Course (LCC)</h3>
                    <ul class="space-y-2 text-slate-700 leading-relaxed">
                        <li>• Biblical Business Strategy (BBS)</li>
                        <li>• Understanding the Power of Praise (UPP)</li>
                        <li>• Excellence in Ministry (EIM)</li>
                        <li>• Principles of Church Growth (PCG)</li>
                        <li>• Understanding the Anointing (UTA)</li>
                        <li>• Principles of Supernatural Supplies (PSS)</li>
                        <li>• Dynamics of Signs and Wonders (DSW)</li>
                        <li>• Dynamics of Holiness (DOH)</li>
                        <li>• Vision Analysis (VAN)</li>
                        <li>• Faith Complex (FCX)</li>
                        <li>• Success Concept (SCT)</li>
                    </ul>
                </div>

                <!-- LDC -->
                <div class="bg-white border rounded-lg p-6 shadow" data-aos="fade-up" data-aos-duration="1000">
                    <h3 class="text-xl font-semibold mb-4">Leadership Diploma Course (LDC)</h3>
                    <ul class="space-y-2 text-slate-700 leading-relaxed">
                        <li>• Biblical Management Principles</li>
                        <li>• Exploits in Ministry</li>
                        <li>• Word Dynamics</li>
                        <li>• Principles of Integrity</li>
                        <li>• Ministry and Family</li>
                        <li>• Growing in Power</li>
                        <li>• Financing the Ministry</li>
                        <li>• Spiritual Leadership</li>
                        <li>• Supernatural Wisdom</li>
                        <li>• Plan, Purpose and Pursuit</li>
                        <li>• Exploits of Faith</li>
                        <li>• Signs and Wonders Today</li>
                    </ul>
                </div>

            </div>

            <!-- Image -->
            <div class="mt-16 rounded-lg overflow-hidden shadow bg-slate-100" data-aos="fade-up" data-aos-duration="1000">
                <img src="{{ asset('https://community.softr.io/uploads/db9110/original/2X/7/74e6e7e382d0ff5d7773ca9a87e6f6f8817a68a6.jpeg') }}"
                    class="w-full h-64 object-cover">
            </div>

        </div>
    </section>

@endsection