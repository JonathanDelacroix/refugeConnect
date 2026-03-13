<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Accueil - RefugeConnect')</title>
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
     @vite('resources/css/style.css')
</head>
<body>
    <div class="container">
        <header>
            <div class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="Refuge Connect" height="40">
            </div>
            <nav>
                <a href="{{ route('home') }}">Accueil</a>
                <a href="{{ route('animal.create') }}">Ajouter un animal</a>
            </nav>
        </header>
    </div>
    <main>
        @yield('content')
    </main>
    <footer>
        &copy; {{ date('Y') }} RefugeConnect
    </footer>
</body>
</html>