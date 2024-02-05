<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog()
    {
        $blogs = Blog::latest()->get();
        return view('admin.blog.view', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blog.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',

        ]);

        $blog = new Blog();
        $blog->title = $request->title;
        $blog->description = $request->description;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = uniqid() . '_' . $file->getClientOriginalName();
            $file->storeAs('blog_images', $filename, 'public');
            $blog->image = 'blog_images/' . $filename;
        }

        // Save the user to the database
        $blog->save();

        return redirect()->route('admin.blog')->with('success', 'Blog created successfully');

    }

    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('admin.blog.edit', compact('blog'));
    }

    public function update($id, Request $request)
    {
        $blog = Blog::find($id);
        $blog->title = $request->title;
        $blog->description = $request->description;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = uniqid() . '_' . $file->getClientOriginalName();
            $file->storeAs('blog_images', $filename, 'public');
            $blog->image = 'blog_images/' . $filename;
        }

        // Save the user to the database
        $blog->save();

        return redirect()->route('admin.blog')->with('success', 'Blog updated successfully');

    }

    public function delete($id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        return redirect()->back()->with('success', 'blogs deleted Successfully');
    }
}
