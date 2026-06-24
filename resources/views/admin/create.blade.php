@extends('layouts.app')

@section('title', 'All Posts — Winners Chapel Int\'l Albany')

@section('content')

<!-- Hero -->
<section class="relative min-h-[40vh] flex items-center overflow-hidden bg-dark">
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1499750310107-5fef28a66643?w=1920&q=80" alt="Blog"
             class="w-full h-full object-cover opacity-30">
        <div class="absolute inset-0 bg-gradient-to-r from-dark/95 via-dark/80 to-dark/60"></div>
        <div class="absolute inset-0 bg-grid opacity-20"></div>
    </div>

    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center py-24">
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 backdrop-blur border border-white/10 mb-6">
            <span class="w-2 h-2 rounded-full bg-secondary animate-pulse"></span>
            <span class="text-white/70 text-xs font-medium tracking-widest uppercase">Admin</span>
        </div>

        <h1 class="text-4xl md:text-5xl lg:text-6xl font-heading font-bold text-white" data-aos="fade-up">
            Blog Management
        </h1>
    </div>
</section>

<!-- Admin Content -->
<section class="py-20 lg:py-28 bg-light">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16">

            <!-- Posts List -->
            <div data-aos="fade-right">
                <div class="flex items-center gap-4 mb-8">
                    <div class="w-1 h-10 bg-secondary rounded-full"></div>
                    <h2 class="text-2xl lg:text-3xl font-heading font-bold text-dark">Created Posts</h2>
                </div>

                <div class="space-y-6">
                    @forelse($posts as $post)
                    <div class="card p-6 bg-white flex items-start gap-4">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}"
                             class="w-16 h-16 rounded-xl object-cover shrink-0">
                        <div class="flex-1 min-w-0">
                            <h3 class="font-heading font-semibold text-dark truncate">{{ $post->title }}</h3>
                            <p class="text-dark-muted/60 text-sm mt-1">{{ Str::limit($post->content, 100) }}</p>
                            <p class="text-dark-muted/40 text-xs mt-2">{{ $post->created_at->format('M d, Y') }}</p>
                        </div>
                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="p-2 rounded-lg text-red-400 hover:text-red-600 hover:bg-red-50 transition-all" title="Delete">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                </svg>
                            </button>
                        </form>
                    </div>
                    @empty
                    <div class="text-center py-16">
                        <div class="w-16 h-16 rounded-2xl bg-secondary/10 flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                            </svg>
                        </div>
                        <p class="text-dark-muted/60">No posts created yet.</p>
                    </div>
                    @endforelse
                </div>
            </div>

            <!-- Create Form -->
            <div class="bg-white rounded-3xl shadow-xl p-8 lg:p-10 border border-dark/5" data-aos="fade-left">
                <div class="flex items-center gap-4 mb-8">
                    <div class="w-1 h-10 bg-primary rounded-full"></div>
                    <h2 class="text-2xl lg:text-3xl font-heading font-bold text-dark">Create New Blog Post</h2>
                </div>

                @if(session('success'))
                <div class="bg-green-50 border border-green-200 text-green-700 px-5 py-4 rounded-xl mb-6 flex items-center gap-3">
                    <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    {{ session('success') }}
                </div>
                @endif

                @if(session('error'))
                <div class="bg-red-50 border border-red-200 text-red-700 px-5 py-4 rounded-xl mb-6 flex items-center gap-3">
                    <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    {{ session('error') }}
                </div>
                @endif

                <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf

                    <div>
                        <label for="title" class="block text-sm font-medium text-dark mb-2">Title</label>
                        <input type="text" name="title" id="title" required
                               class="input-field" placeholder="Post title">
                    </div>

                    <div>
                        <label for="image" class="block text-sm font-medium text-dark mb-2">Image</label>
                        <div class="relative">
                            <input type="file" name="image" id="image" accept="image/*,.png,.jpg,.jpeg" required
                                   class="block w-full text-sm text-dark-muted/70 file:mr-4 file:py-2.5 file:px-5 file:rounded-xl file:border-0 file:text-sm file:font-semibold file:bg-secondary/10 file:text-secondary hover:file:bg-secondary/20 transition-all cursor-pointer">
                        </div>
                    </div>

                    <div>
                        <label for="content" class="block text-sm font-medium text-dark mb-2">Content</label>
                        <textarea name="content" id="content" rows="6"
                                  class="input-field resize-none" placeholder="Write your post content here..."></textarea>
                    </div>

                    <button type="submit" class="btn-primary w-full justify-center text-base py-3.5">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                        </svg>
                        Create Post
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
