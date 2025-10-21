<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(10);
        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|max:150',
            'content' => 'nullable',
            'thumbnail' => 'nullable|image|max:2048',
            'status' => 'required|in:draft,published',
        ]);

        $data['slug'] = Str::slug($data['title']);
        if ($request->hasFile('thumbnail')) {
            $data['thumbnail'] = $request->file('thumbnail')->store('posts', 'public');
        }

        Post::create($data);
        return redirect()->route('posts.index')->with('success', 'Artikel berhasil dibuat!');
    }

    public function edit(Post $post)
    {
        return view('admin.posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $data = $request->validate([
            'title' => 'required|max:150',
            'content' => 'nullable',
            'thumbnail' => 'nullable|image|max:2048',
            'status' => 'required|in:draft,published',
        ]);

        $data['slug'] = Str::slug($data['title']);
        if ($request->hasFile('thumbnail')) {
            $data['thumbnail'] = $request->file('thumbnail')->store('posts', 'public');
        }

        $post->update($data);
        return redirect()->route('posts.index')->with('success', 'Artikel diperbarui!');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Artikel dihapus!');
    }
}
