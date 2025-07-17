<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Lumen App')</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <header>
        <nav>
            <a href="/tools">Tools</a> |
            <a href="/profile">Profile</a> |
            <a href="/datalegal">Data Legal</a> |
            <a href="/impress">Impressum</a>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>&copy; {{ date('Y') }} LumenApp. All rights reserved.</p>
    </footer>
</body>
</html>
