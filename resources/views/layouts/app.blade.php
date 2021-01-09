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
                <a href="/dashboard">Dashboard</a>
            </li>
            <li class="p-6">
                <a href="/posts">Posts</a>
            </li>
        </ul>
        <ul class="flex">
            <li class="p-6">
                <a href="/">David</a>
            </li>
            <li class="p-6">
                <a href="/login">Login</a>
            </li>
            <li class="p-6">
                <a href="{{ route('register') }}">Register</a>
            </li>
            <li class="p-6">
                <a href="/logout">Logout</a>
            </li>
        </ul>
    </nav>
    @yield('content')
</body>
</html>