<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class AdminController extends Controller
{
    //

    public function index()
    {
        $posts = Blog::latest()->get();
        return view('admin.create', compact('posts'));
    }

    //store with image
    public function store(Request $request)
    {
        try {
            $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content' => 'nullable',
        ]);
        
        $imagePath = $request->file('image')->store('images', 'public');

        Blog::create([
            'title' => $request->title,
            'slug' => \Str::slug($request->title),
            'image' => $imagePath,
            'content' => $request->content,
        ]);

        return redirect()->back()->with('success', 'Blog post created successfully.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'An error occurred while creating the blog post: ' . $th->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $post = Blog::findOrFail($id);
            // Delete the image file from storage
            if ($post->image) {
                \Storage::disk('public')->delete($post->image);
            }
            $post->delete();

            return redirect()->back()->with('success', 'Blog post deleted successfully.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'An error occurred while deleting the blog post: ' . $th->getMessage());
        }
    }
}