<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('posts.index', [
            'posts' => Post::orderBy('id', 'desc')->paginate(5),
        ]);
    }
    public function create(Post $post)
    {
        return view('posts.create', [
            'post' => $post
        ]);
    }

    public function store(Request $request)
    {
        /* Validar que la información no llegue vacia */
        $request->validate([
            'titulo' => 'required',
            'slug' => 'required|unique:posts,slug|regex:/^[a-z0-9-]+$/',
            'body' => 'required',
        ]);

        $post = $request->user()->posts()->create([
            'titulo' => $request->titulo,
            'slug' => $request->slug,
            //'slug' => Str::slug($title),
            'body' => $request->body,
        ]);

        return redirect()->route('posts.edit', $post);
    }

    public function update(Request $request, Post $post)
    {

        /* Validar que la información no llegue vacia */
        $request->validate([
            'titulo' => 'required',
            'slug' => 'required|regex:/^[a-z0-9-]+$/|unique:posts,slug,' . $post->id,
            'body' => 'required',
        ]);

        $post->update([
            'titulo' => $request->titulo,
            'slug' => $request->slug,
            //'slug' => Str::slug($title),
            'body' => $request->body,
        ]);

        return redirect()->route('posts.edit', $post);
    }


    public function edit(Post $post)
    {
        return view('posts.edit', [
            'post' => $post
        ]);
    }
    public function destroy(Post $post)
    {
        $post->delete();
        return back()->with('success', 'Post eliminado exitosamente.');
    }
}
