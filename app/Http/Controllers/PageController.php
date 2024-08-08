<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        //$posts = Post::get();
        //El método latest() en Eloquent es un atajo para ordenar por una columna de fecha en orden descendente. Por defecto, utiliza la columna created_at. 
        //$posts = Post::latest()->paginate(5);
        $posts = Post::orderBy('titulo', 'asc')->paginate(5);
        return view('home', ['blogs' => $posts]);
    }
    ## Route Model Binding
    public function post(Post $post)
    {
        return view('post', ['blogs' => $post]);
    }
}
