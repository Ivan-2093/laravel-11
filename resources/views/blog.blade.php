@extends('template')
@section('title', 'Blogs Page')
@section('content')
<h1>Blogs</h1>
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
            <td>{{ $row['id']}}</td>
            <td>
                <a href='blogs/{{$row["id"]}}'>{{$row['title']}}</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

@section('footer')
<p>&copy; 2024 My Website</p>
@endsection