<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class PageController extends Controller
{
    public function index()
    {
        try {
            $blogs = Blog::latest()->take(3)->get();
            return view('home', compact('blogs'));
        } catch (\Throwable $th) {
            return view('home')->with('error', 'An error occurred while fetching blog posts: ' . $th->getMessage());
        }
    }
    public function show($slug)
    {
        $post = Blog::where('slug', $slug)->firstOrFail();
        $recent = Blog::where('id', '!=', $post->id)->latest()->take(3)->get();
        return view('blog.detail', compact('post', 'recent'));
    }

    public function about()
    {
        return view('about');
    }
}