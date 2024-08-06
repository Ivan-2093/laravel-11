<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::controller(PageController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/blog', 'blog')->name('blog');

    ## Route Model Binding
    // Esta ruta define que cualquier solicitud GET a /blog/{slug} ejecutará el método post en el controlador correspondiente.
    // {post:slug} indica que Laravel debe buscar un Post cuyo campo slug coincida con el valor proporcionado en la URL.

    Route::get('/blog/{post:slug}', 'post')->name('post');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::resource('posts', PostController::class)->except('show');
});


require_once __DIR__ . '/auth.php';
