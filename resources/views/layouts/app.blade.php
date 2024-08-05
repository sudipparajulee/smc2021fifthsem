<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        @include('layouts.alert')
        <div class="flex">
            <div class="w-56 bg-gray-200 shadow-lg h-screen">
                <div>
                    <img src="{{ asset('logo/logo.png') }}" alt="" class="h-16 mx-auto my-5">
                </div>
                <div class="mt-5">
                    <a href="{{route('dashboard')}}" class="block px-2 py-3 hover:bg-blue-600 hover:text-white text-lg">Dashboard</a>
                    <a href="{{route('notice.index')}}" class="block px-2 py-3 hover:bg-blue-600 hover:text-white text-lg">Notice</a>
                    <a href="{{route('category.index')}}" class="block px-2 py-3 hover:bg-blue-600 hover:text-white text-lg">Category</a>
                    <a href="" class="block px-2 py-3 hover:bg-blue-600 hover:text-white text-lg">Blog</a>
                    <a href="" class="block px-2 py-3 hover:bg-blue-600 hover:text-white text-lg">Users</a>
                    <a href="" class="block px-2 py-3 hover:bg-blue-600 hover:text-white text-lg">Logout</a>
                </div>
            </div>
            <div class="flex-1 p-4">
                <h2 class="font-bold text-4xl">@yield('title')</h2>
                <hr class="h-1 bg-blue-600">
                @yield('content')
            </div>
        </div>
    </body>
</html>
