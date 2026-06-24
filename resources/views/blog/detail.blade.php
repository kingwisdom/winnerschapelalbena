@extends('layouts.app')

@section('title', $post->title . ' — Winners Chapel Int\'l Albany')
@section('meta_description', Str::limit($post->content, 160))

@section('content')

<!-- Hero -->
<section class="relative min-h-[70vh] flex items-end overflow-hidden bg-dark">
    <div class="absolute inset-0">
        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="w-full h-full object-cover">
        <!-- <img src="https://wcialbany.org/manage/storage/app/public/{{ $post->image }}"
             alt="{{ $post->title }}"
             class="w-full h-full object-cover"> -->
        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/60 to-transparent"></div>
        <div class="absolute inset-0 bg-grid opacity-20"></div>
    </div>

    <div class="relative w-full max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 pb-16 lg:pb-24">
        <div class="max-w-3xl">
            <a href="/"
                class="inline-flex items-center gap-2 text-white/60 hover:text-white text-sm font-medium mb-8 transition-colors group">
                <svg class="w-4 h-4 group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                </svg>
                Back to Home
            </a>

            <div
                class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/10 backdrop-blur border border-white/10 mb-5">
                <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
                <span class="text-white/70 text-xs font-medium tracking-widest uppercase">Blog Post</span>
            </div>

            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-heading font-bold text-white leading-tight"
                data-aos="fade-up">
                {{ $post->title }}
            </h1>

            <div class="flex items-center gap-4 mt-6 text-white/50 text-sm" data-aos="fade-up" data-aos-delay="100">
                <span class="flex items-center gap-1.5">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    {{ $post->created_at->format('F d, Y') }}
                </span>
                <span class="w-1 h-1 rounded-full bg-white/20"></span>
                <span class="flex items-center gap-1.5">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                    Winners Chapel Albany
                </span>
            </div>
        </div>
    </div>
</section>

<!-- Content -->
<section class="py-16 lg:py-24 bg-light">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-3 gap-12">
            <!-- Main Content -->
            <div class="lg:col-span-2">
                <div class="prose prose-lg max-w-none prose-headings:font-heading prose-headings:text-dark prose-p:text-dark-muted/80 prose-p:leading-relaxed prose-a:text-primary prose-a:no-underline hover:prose-a:underline prose-strong:text-dark prose-blockquote:border-l-primary prose-blockquote:text-dark-muted/70 prose-blockquote:italic"
                    data-aos="fade-up">
                    {!! nl2br(e($post->content)) !!}
                </div>

                <div class="mt-12 pt-8 border-t border-dark/10 flex items-center justify-between" data-aos="fade-up">
                    <a href="/" class="btn-primary text-sm px-5 py-2.5">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                        </svg>
                        Back to Home
                    </a>

                    <a href="mailto:info@wcialbany.org"
                        class="text-sm text-dark-muted/60 hover:text-primary transition-colors flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        Share via Email
                    </a>
                </div>
            </div>

            <!-- Sidebar -->
            <aside class="lg:col-span-1" data-aos="fade-left">
                <div class="sticky top-28 space-y-8">
                    <!-- Recent Posts -->
                    <div class="bg-white rounded-2xl p-6 shadow-lg border border-dark/5">
                        <h3 class="font-heading font-bold text-lg text-dark mb-5 flex items-center gap-2">
                            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Recent Posts
                        </h3>

                        <div class="space-y-4">
                            @forelse($recent as $r)
                            <a href="{{ route('blog.show', $r->slug) }}" class="flex items-start gap-3 group">
                                <img src="{{ asset('storage/' . $r->image) }}" alt="{{ $r->title }}"
                                    class="w-14 h-14 rounded-xl object-cover shrink-0">
                                <div>
                                    <h4
                                        class="text-sm font-medium text-dark group-hover:text-primary transition-colors leading-snug">
                                        {{ $r->title }}</h4>
                                    <p class="text-xs text-dark-muted/50 mt-1">{{ $r->created_at->format('M d, Y') }}
                                    </p>
                                </div>
                            </a>
                            @if(!$loop->last)
                            <div class="border-t border-dark/5"></div>
                            @endif
                            @empty
                            <p class="text-dark-muted/50 text-sm">No other posts yet.</p>
                            @endforelse
                        </div>
                    </div>

                    <!-- Quick Links -->
                    <div class="bg-gradient-to-br from-primary to-primary-dark rounded-2xl p-6 shadow-lg">
                        <h3 class="font-heading font-bold text-lg text-white mb-3">Get Involved</h3>
                        <p class="text-white/70 text-sm leading-relaxed mb-5">
                            Join us this Sunday and experience the life-transforming power of God's Word.
                        </p>
                        <a href="/contact"
                            class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full bg-white text-primary font-semibold text-sm hover:bg-white/90 transition-all">
                            Plan Your Visit
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </a>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>

<!-- Related Posts -->
@if($recent->count() > 0)
<section class="relative py-20 lg:py-28 bg-dark overflow-hidden">
    <div class="absolute inset-0 bg-grid opacity-10"></div>
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[800px] h-[800px] bg-primary/5 rounded-full blur-3xl"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl lg:text-4xl font-heading font-bold text-white red-underline pb-4">More Articles</h2>
            <p class="text-white/60 mt-6 max-w-xl mx-auto">Continue reading more faith-building content from our church.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            @foreach($recent as $r)
            <a href="{{ route('blog.show', $r->slug) }}"
                class="group bg-white/5 backdrop-blur-sm rounded-2xl overflow-hidden border border-white/10 hover:border-primary/50 transition-all duration-500 hover:-translate-y-2"
                data-aos="fade-up">
                <div class="h-48 overflow-hidden">
                    <img src="{{ asset('storage/' . $r->image) }}" alt="{{ $r->title }}"
                        class="w-full h-full object-cover group-hover:scale-110 transition-all duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-dark/80 via-transparent to-transparent"></div>
                </div>
                <div class="p-6">
                    <p class="text-white/40 text-xs mb-2">{{ $r->created_at->format('M d, Y') }}</p>
                    <h3 class="text-lg font-heading font-bold text-white group-hover:text-primary transition-colors">
                        {{ $r->title }}</h3>
                    <p class="text-white/50 text-sm mt-2 leading-relaxed">{{ Str::limit(strip_tags($r->content), 120) }}
                    </p>
                    <span
                        class="inline-flex items-center gap-2 text-sm font-medium text-primary mt-4 opacity-0 group-hover:opacity-100 transition-opacity">
                        Read More
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </span>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>
@endif

@endsection