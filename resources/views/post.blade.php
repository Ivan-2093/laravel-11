@extends('template')
@section('title', 'Post Page')
@section('content')
<h1>Post</h1>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>TITULO</th>
        </tr>
    </thead>
    <tbody>


        @foreach ($blogs as $row)
        <tr>
            <td>{{ $row['id'] }}</td>
            <td>{{ $row['title'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection