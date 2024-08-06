@extends('template')
@section('title', $blogs->titulo)
@section('content')

<div class="card">
    <div class="card-header">
        <h5 class="card-title">{{ $blogs->titulo }}</h5>
    </div>
    <div class="card-body">
        <p class="card-text">{{ $blogs->body }}</p>
        <br>
        <p class="card-text text-center text-wrap">Publicado por {{ $blogs->user->name }}</p>
    </div>
</div>

@endsection

@section('footer')
<p>&copy; 2024 My Website</p>
@endsection