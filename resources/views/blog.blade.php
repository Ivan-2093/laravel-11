@extends('template')
@section('title', 'Blogs Page')
@section('content')
<h1>Blogs</h1>
<div class="row">
    <div class="col-12 table-responsive">
        <table class="table table-bodered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>TITULO</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($blogs as $row)
                <tr>
                    <td>{{ $row->id }}</td>
                    <td>
                        <a href='blog/{{ $row->slug }}'>{{ $row->titulo }}</a>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>

    </div>
    <div class="col-12">
        {{$blogs->links('pagination::bootstrap-4')}}
    </div>
</div>



@endsection

@section('footer')
<p>&copy; 2024 My Website</p>
@endsection