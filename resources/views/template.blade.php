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
                <form action="{{ route('home') }}" method="GET">
                    <div class="space-y-12">


                        <div class="border-b border-gray-900/10 pb-12">
                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 md:grid-cols-12">
                                <div class="md:col-span-6">
                                    <label for="autor" class="block text-sm font-medium leading-6 text-gray-900">Autor</label>
                                    <div class="mt-2">
                                        <select id="autor" name="autor" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                            <option value="">Seleccione un autor</option>
                                            @foreach($users as $user)
                                            <option value="{{ $user->id }}" {{ request('autor') == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="md:col-span-3">
                                    <label for="search" class="block text-sm font-medium leading-6 text-gray-900">Descripción</label>
                                    <div class="mt-2">
                                        <input type="text" id="search" name="search" placeholder="Buscar" value=" {{ request('search') }}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                </div>
                                <div class="sm:col-span-3">
                                    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Buscar</button>
                                </div>
                            </div>
                        </div>
                    </div>
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