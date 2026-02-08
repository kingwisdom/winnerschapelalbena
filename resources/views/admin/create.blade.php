@extends('layouts.app')

@section('title', 'All Posts — Winners Chapel Int\'l Albany')

@section('content')
   
   <!-- Hero Section -->
    <section class="relative py-20 bg-cover bg-center bg-no-repeat"
        style="background-image: url('https://t3.ftcdn.net/jpg/02/21/79/40/360_F_221794075_LsuBECheGGj3zaCwC8o5OmRHbwVSaLBm.jpg');" data-aos="fade-up"
        data-aos-duration="1000">
        <div class="absolute inset-0 bg-blue-900/60"></div>

        <div class="relative max-w-4xl mx-auto px-4 text-center text-white">
            <h1 class="text-4xl md:text-5xl font-bold" data-aos="fade-up" data-aos-duration="1000">Our Blog Post</h1>
            
        </div>
    </section>

    <!-- Contact + Form -->
    <section class="py-20 bg-white">
        <div class="max-w-6xl mx-auto grid lg:grid-cols-2 gap-12 px-4">

            <!-- Contact Info -->
            <div data-aos="fade-right" data-aos-duration="1000">

                <h2 class="text-3xl font-semibold text-slate-800 mb-8">Created Posts</h2>

                <p class="text-slate-600 mb-8 leading-relaxed">
                    Whether you’re visiting for the first time or part of our church family,
                    our team is here to support you. Contact us anytime—we’re ready to help.
                </p>

                <div class="space-y-8">

                    <!-- Blog Posts List -->
                    @forelse($posts as $post)
                        <div class="flex items-start gap-4 border-b pb-6 last:border-b-0" data-aos="fade-up" data-aos-duration="1000">
                            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="w-16 h-16 rounded-lg object-cover">
                            <div class="flex-1">
                                <h3 class="font-semibold text-slate-800 text-lg">{{ $post->title }}</h3>
                                <p class="text-slate-600 leading-relaxed text-sm mt-1">{{ Str::limit($post->content, 100) }}</p>
                                <p class="text-slate-500 text-xs mt-2">{{ $post->created_at->format('M d, Y') }}</p>
                            </div>
                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="ml-4">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-800">Delete</button>
                            </form>
                        </div>
                    @empty
                        <p class="text-slate-600">No posts created yet.</p>
                    @endforelse

                   
                </div>
            </div>

            <!-- Contact Form -->
            <div class="bg-white border rounded-2xl shadow-lg p-10" data-aos="fade-left" data-aos-duration="1000">
                <h2 class="text-3xl font-semibold text-slate-800 mb-8">Create New Blog Post</h2>

                <!-- display success or error messages -->
                @if(session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                        {{ session('success') }}
                    </div>
                @endif

                @if(session('error'))
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                        {{ session('error') }}
                    </div>
                @endif

                <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    <div>
                        <label for="title" class="block text-sm font-medium text-black">Title</label>
                        <input type="text" name="title" id="title" required
                            class="mt-1 py-1 block w-full rounded-md !border-black-800 px-1 shadow-md focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <div>
                        <label for="image" class="block text-sm font-medium text-black">Image</label>
                        <input type="file" name="image" id="image" accept="image/*,.png,.jpg,.jpeg" required
                            class="mt-1 block w-full rounded-md border-slate-600 px-1 shadow-sm focus:ring-blue-500">
                    </div>

                    <div>
                        <label for="content" class="block text-sm font-medium text-slate-700">Content</label>
                        <textarea name="content" id="content" rows="4" 
                            class="mt-1 px-2 block w-full rounded-md border-gray-600 shadow-md focus:ring-blue-500 focus:border-blue-500"></textarea>
                    </div>

                    <button type="submit"
                        class="w-full py-3 px-4 bg-blue-600 text-white font-semibold rounded-md hover:bg-blue-700 transition duration-300">
                        Create Post
                    </button>

                </form>
            </div>
        </div>
    </section>

@endsection