<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/**
 * Route::get | Consultar
 * Route::post | Guardar
 * Route::delete | Eliminar
 * Route::put | Actualizar
 */



Route::get('/', function () {
    return view('welcome');
});



Route::get('/Home', function () {
    return view('home');
})->name('Dasboard');

Route::get('blogs', function () {

    $blogs = [
        ['id' => 0, 'title' => 'Animales'],
        ['id' => 1, 'title' => 'Frutas'],
    ];

    return view('blog', ['blogs' => $blogs]);
})->name('Revista');

Route::get('blogs/{idBlog}', function ($idBlog) {

    $blogs = [
        ['id' => 0, 'title' => 'Animales'],
        ['id' => 1, 'title' => 'Frutas'],
    ];

    return view('post', ['blogs' => [$blogs[$idBlog]]]);
});

Route::get('buscar', function (Request $request) {
    return $request->all();
    //{"query":"php"}
});
