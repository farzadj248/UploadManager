<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * show blogs
     */
    public function index()
    {
        $blogs  = Blog::with('media')->paginate(6);
        return view('pages.blogs.index',compact('blogs'));
    }

    /**
     * add blog
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $blog = Blog::create([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
        ]);

        $blog->addMediaFile($request->file('image'));

        return redirect()->back()->with('success', 'پست با موفقیت ایجاد شد!');
    }

    /**
     * create blog page
     */
    public function create()
    {
        return view('pages.blogs.create.index');
    }
}
