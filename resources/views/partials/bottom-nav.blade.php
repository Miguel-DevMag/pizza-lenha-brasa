@php
    $active = $activeNav ?? '';
@endphp
<nav class="bottom-nav bottom-nav--floating" aria-label="Navegação principal">
    <a href="{{ url('/inicio') }}" @if ($active === 'inicio') aria-current="page" @endif>
        <span class="bottom-nav__icon-wrap" aria-hidden="true">
            <svg viewBox="0 0 24 24" aria-hidden="true">
                <path d="M3 10.5L12 3l9 7.5V20a1 1 0 01-1 1h-5v-6H9v6H4a1 1 0 01-1-1v-9.5z"/>
            </svg>
        </span>
        Início
    </a>
    <a href="{{ url('/cardapio') }}" @if ($active === 'cardapio') aria-current="page" @endif>
        <span class="bottom-nav__icon-wrap" aria-hidden="true">
            <svg viewBox="0 0 24 24" aria-hidden="true">
                <path d="M6 4v11c0 2 1.5 3 3 3h0c1.5 0 3-1 3-3V4"/>
                <path d="M6 4c0-1.5 1-3 3-3s3 1.5 3 3"/>
                <path d="M17 3v18"/>
                <path d="M15 21h4"/>
            </svg>
        </span>
        Cardápio
    </a>
    <a href="{{ url('/pedidos') }}" @if ($active === 'pedidos') aria-current="page" @endif>
        <span class="bottom-nav__icon-wrap" aria-hidden="true">
            <svg viewBox="0 0 24 24" aria-hidden="true">
                <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2"/>
                <path d="M9 5a2 2 0 012-2h2a2 2 0 012 2v0a2 2 0 01-2 2H11a2 2 0 01-2-2v0z"/>
                <path d="M9 12h6"/>
                <path d="M9 16h6"/>
            </svg>
        </span>
        Pedidos
    </a>
    <a href="{{ url('/perfil') }}" @if ($active === 'perfil') aria-current="page" @endif>
        <span class="bottom-nav__icon-wrap" aria-hidden="true">
            <svg viewBox="0 0 24 24" aria-hidden="true">
                <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/>
                <circle cx="12" cy="7" r="4"/>
            </svg>
        </span>
        Perfil
    </a>
</nav>
