@extends('template')
@section('title', $blogs->titulo)
@section('content')

<div class="max-w-3xl mx-auto">
    <h1 class="text-5xl mb-8">{{ $blogs->titulo }}</h1>
    <p class="leading-loose text-lg text-gray-700">
        {{ $blogs->body }}
    </p>
</div>


@endsection

@section('footer')
<p>&copy; 2024 My Website</p>
@endsection