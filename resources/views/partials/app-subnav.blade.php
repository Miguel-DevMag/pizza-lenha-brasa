<div class="app-subnav">
    <div class="app-subnav__left">
        <a href="{{ url('/inicio') }}" class="app-subnav__back" aria-label="Voltar ao início">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                <path d="M15 18l-6-6 6-6"/>
            </svg>
        </a>
        <span class="app-subnav__name">Pizza-lenha&amp;brasa</span>
        <button type="button" class="app-subnav__filter">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                <path d="M10 18h4v-2h-4v2zM3 6v2h18V6H3zm3 7h12v-2H6v2z"/>
            </svg>
            Popularidade
        </button>
    </div>
    <nav class="app-subnav__links" aria-label="Páginas institucionais">
        <a href="{{ url('/sobre') }}">Sobre</a>
        <span class="app-subnav__sep" aria-hidden="true">·</span>
        <a href="{{ url('/promocao') }}">Promoção</a>
    </nav>
</div>
