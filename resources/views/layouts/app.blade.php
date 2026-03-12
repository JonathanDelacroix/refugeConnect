<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>RefugeConnect</title>
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/png">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
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