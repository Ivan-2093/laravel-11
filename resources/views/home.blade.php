@extends('template')
@section('title', 'Home Page')

@section('content')

<h1>Home</h1>

@php
$message = 'Hello, World!';
$numbers = [1, 2, 3, 4, 5];
@endphp

<p>{{ $message }}</p>

<ul>
    @foreach($numbers as $number)
    <li>{{ $number }}</li>
    @endforeach
</ul>

@endsection




@push('styles')
<link rel="stylesheet" href="{{ asset('home.css') }}">
@endpush

@push('scripts')
<script src="{{ asset('home.js') }}"></script>
@endpush