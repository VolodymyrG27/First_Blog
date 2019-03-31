<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use Storage;
class BlogsController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('blogs.index', ['blogs' => $blogs]);
    }

    public function show($id)
    {
        $blog = Blog::find($id);
        return view('blogs.show', ['blog' => $blog]);
    }

    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('blogs.edit', ['blog' => $blog]);
    }

    public function create()
    {
        return view('blogs.create');
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->update();
        return redirect()->route('blog_path', ['blog' => $blog]);
    }
    public function delete($id)
    {
        $blog = Blog::find($id);
        $blog->delete(); 
        return redirect()->route('blogs_path');
    }

    public function store(Request $request)
    {
        $blog = new Blog;
        $path = Storage::putFile('public', $request->file('files'));
        $url = Storage::url($path);
        $blog->image = $url;
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->save();
        return redirect()->route('blogs_path');
    }
    
}
