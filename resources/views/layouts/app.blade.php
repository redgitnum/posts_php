<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php posts test</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-200">
    <nav class="bg-white flex justify-between text-xl px-6 mb-6">
        <ul class="flex">
            <li class="p-6">
                <a href="/">Home</a>
            </li>
            <li class="p-6">
                <a href="{{ route('dashboard') }}">Dashboard</a>
            </li>
            <li class="p-6">
                <a href="{{ route('posts') }}">Posts</a>
            </li>
        </ul>
        <ul class="flex">
            @auth
                <li class="p-6">
                    <a>{{ auth()->user()->name }}</a>
                </li>
                <li class="p-6">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit"> Logout</button>
                    </form>
                </li>
            @endauth
            @guest
                <li class="p-6">
                    <a href="{{ route('login') }}">Login</a>
                </li>
                <li class="p-6">
                    <a href="{{ route('register') }}">Register</a>
                </li>
            @endguest
            
        </ul>
    </nav>
    @yield('content')
</body>
</html>