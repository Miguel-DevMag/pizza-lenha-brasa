<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Início') — Pizza Lenha&amp;Brasa</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800|poppins:500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="app-body">
    @hasSection('header_custom')
        @yield('header_custom')
    @else
        @include('partials.app-header')
        @hasSection('subnav_custom')
            @yield('subnav_custom')
        @else
            @include('partials.app-subnav')
        @endif
    @endif

    <main class="app-main" id="conteudo-principal">
        @yield('content')
    </main>

    @include('partials.bottom-nav', ['activeNav' => $activeNav ?? null])
</body>
</html>
