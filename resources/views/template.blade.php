<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('build/assets/app.css') }}">
    @stack('styles')
</head>

<body>
    <div class="container px-4 mx-auto">
        <header class="flex justify-between itmes-center py-4">
            <div class="flex itmes-center flex-grow gap-4">
                <a class="" href="{{ route('home') }}">
                    <img src="{{ asset('image/logo.png') }}" alt="Logo" class="h-12">
                </a>
                <form action="">
                    <input type="text" placeholder="Buscar">
                </form>
            </div>
            @auth
            <a class="" href="{{ route('dashboard') }}">dashboard</a>
            @else
            <a class="" href="{{ route('login') }}">Login</a>

            @endauth
        </header>

        <div class="opacity-60 h-px mb-8" style="background: linear-gradient(to right,
            rgba(200,200,200,0) 0%,
            rgba(200,200,200,1) 30%,
            rgba(200,200,200,1) 70%,
            rgba(200,200,200,0) 100%)">

        </div>


        <div class="container px-4 mx-auto">
            @yield('content')
        </div>

        <p class="py-16">
            <img src="{{ asset('image/logo.png') }}" alt="logo de laravel" class="h-12 mx-auto">
        </p>
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