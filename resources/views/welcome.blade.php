<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
    <body >
    <header style="background: linear-gradient(135deg, #a7c7e7, #6a8bce); padding-left: 10px; display: flex; justify-content: space-between; align-items: center; position: fixed; width: 100%; top: 0; z-index: 1000;">
    <img src="{{ asset('images/logo_transparence1.png') }}" alt="Quiz Logo" style="width: 50px; height: 50px;">
    <nav style="display: flex; position: relative; right: 3%; align-items: center; gap: 10px;">
        <a href="{{ route('home') }}" class="nav-a">Home</a>
        <a href="{{ route('about') }}" class="nav-a">About</a>
        @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class=" nav-a font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class=" nav-a font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="nav-a ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
    </nav>
</header>

<style>
    .nav-a {
        text-decoration: none;
        color: #fff;
        font-weight: 500;
        font-size: 1rem;
        padding: 10px 15px;
        position: relative;
        transition: color 0.3s ease;
        border-radius: 5px;
    }
    .nav-a:hover {
        color:rgb(2, 61, 116);
    }
</style>
    </body>
</html>
