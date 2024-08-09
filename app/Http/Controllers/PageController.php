<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(Request $request)
    {
        //$posts = Post::get();
        //El método latest() en Eloquent es un atajo para ordenar por una columna de fecha en orden descendente. Por defecto, utiliza la columna created_at. 
        //$posts = Post::latest()->paginate(5);

        $search = $request->search;
        $user_id = $request->autor;
        $posts = Post::where('titulo', 'like', "%{$search}%")
            ->with('user')
            ->when($user_id, function ($query) use ($user_id) {
                return $query->where('user_id', $user_id);
            })
            ->orderBy('titulo', 'asc')
            ->paginate(5);

        $users = User::orderBy('name', 'asc')->get();
        return view('home', ['blogs' => $posts, 'users' => $users]);
    }
    ## Route Model Binding
    public function post(Post $post)
    {
        $users = User::orderBy('name', 'asc')->get();
        return view('post', ['blogs' => $post, 'users' => $users]);
    }
}
