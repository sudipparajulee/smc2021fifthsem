<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <nav class="flex px-20 py-2 bg-white justify-between items-center shadow-lg">
        <img src="{{asset('logo/logo.png')}}" alt="" class="h-16">
        <div class="flex gap-5">
            <a href="{{route('home')}}">Home</a>
            <a href="{{route('about')}}">About</a>
            <a href="{{route('contact')}}">Contact</a>
            <a href="">Login</a>
        </div>
    </nav>

    @yield('content')

    <footer class="bg-blue-600 mt-20 py-4 px-20 ">
        <p class="text-center text-white">Copyright &copy; 2024 | All Rights Reserved | Saptagandaki Multiple Campus </p>
    </footer>
</body>
</html>
