<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Entrar') — Pizza Lenha&amp;Brasa</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="auth-body">
    <div class="auth-split">
        <div class="auth-panel auth-panel--form">
            <div class="auth-card">
                @yield('content')
            </div>
        </div>
        <aside class="auth-panel auth-panel--brand" aria-hidden="true">
            <img src="{{ asset('img/logo-pizzaria.png') }}" alt="" width="280" height="280" class="auth-brand-logo">
        </aside>
    </div>
    @stack('scripts')
</body>
</html>
