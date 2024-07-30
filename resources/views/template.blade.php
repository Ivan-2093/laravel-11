<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    @stack('styles')
</head>

<body>
    <header>
        <nav>
            <a href="{{ route('Dasboard') }}">Home</a>
            <a href="{{ route('Revista') }}">Blog</a>
        </nav>
    </header>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        @yield('footer')
    </footer>
    @stack('scripts')
</body>

</html>