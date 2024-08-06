<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    @stack('styles')
</head>

<body>

    <header>
        <nav>
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                </li>
                @auth
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard') }}">dashboard</a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
                @endauth

            </ul>
        </nav>
    </header>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        @yield('footer')
    </footer>
    <!-- jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    @stack('scripts')

</body>

</html>