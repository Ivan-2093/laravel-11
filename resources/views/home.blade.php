@extends('template')
@section('title', 'Home Page')

@section('content')

@if (config('debugbar.enabled'))
{!! \Barryvdh\Debugbar\Facade::render() !!}
@endif

<div class="bg-gray-900 px-20 py-16 rounded-lg mb-8 relative overflow-hidden">
    <span class="text-xs uppercase text-gray-700 bg-gray-400 rounded-full px-2 py-1">Programación</span>
    <h1 class="text-3xl text-white mt-4">Blog</h1>
    <p class="text-sm text-gray-400 mt-2">Proyecto de desarrollo web para profesionales</p>
    <img src="{{ asset('image/dev.png') }}" alt="logo de Dev" class="absolute -right-24 -bottom-24 opacity-20">
</div>
<div class="px-4">
    <h1 class="text-2xl mb-8 text-gray-800">Contenido</h1>
    <div class="grid grid-cols-1 gap-4 mb-4">
        @foreach ($blogs as $blog)
        <a href="{{ route('post',$blog->slug) }}" class="bg-gray-100 rounded-lg px-6 py-4">
            <p class="text-xs flext item-center gap-2">
                <span class="uppercase text-gray-700 bg-gray-200 rounded-full px-2 py-1">Tutorial</span>
                <span>{{ $blog->created_at->format('d/m/Y') }}</span>
            </p>
            <h2 class="text-lg text-gray-900 mt-2">{{ $blog->titulo }}</h2>
            <div class="text-xs text-gray-900 opacity-75 flex items-center gap-1">
                {{ $blog->user->name }}
            </div>
        </a>
        @endforeach
    </div>

    {{ $blogs->links() }}
</div>

@endsection

@push('styles')

@endpush

@push('scripts')

@endpush

@section('footer')
<p>&copy; 2024 My Website</p>
@endsection