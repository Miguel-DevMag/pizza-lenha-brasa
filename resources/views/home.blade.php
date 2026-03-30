<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cardápio — Pizza Lenha&amp;Brasa</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="app-shell">
        <header class="app-header">
            <div class="app-header__logo">
                <img src="{{ asset('img/logo-pizzaria.png') }}" alt="Logo Pizza Lenha e Brasa" width="36" height="36">
            </div>
            <h1 class="app-header__title">Pizzaria-lenha&amp;brasa</h1>
        </header>

        <div class="app-subnav">
            <div class="app-subnav__left">
                <button type="button" class="app-subnav__back" onclick="history.back()" aria-label="Voltar">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                        <path d="M15 18l-6-6 6-6"/>
                    </svg>
                </button>
                <span class="app-subnav__name">Pizza-lenha&amp;brasa</span>
                <button type="button" class="app-subnav__filter">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path d="M10 18h4v-2h-4v2zM3 6v2h18V6H3zm3 7h12v-2H6v2z"/>
                    </svg>
                    Popularidade
                </button>
            </div>
            <div class="app-subnav__actions">
                <form method="post" action="{{ route('logout') }}" style="display: inline;">
                    @csrf
                    <button type="submit" class="app-subnav__logout">Sair</button>
                </form>
            </div>
        </div>

        <main class="app-main" id="conteudo-principal">
            <section class="hero" aria-labelledby="hero-title">
                <div class="hero__content">
                    <span class="hero__badge">OFERTA ESPECIAL</span>
                    <h2 id="hero-title" class="hero__title">Tradizione Italiana</h2>
                    <p class="hero__text">30% OFF em todas as pizzas clássicas!</p>
                    <button type="button" class="hero__cta">Aproveitar</button>
                </div>
                <div class="hero__visual">
                    <img src="{{ asset('img/principal.jpg') }}" alt="Duas pizzas artesanais em tábuas de madeira" width="400" height="280" loading="eager">
                </div>
            </section>

            <section class="categories" aria-labelledby="categorias-titulo">
                <div class="section-head">
                    <h2 id="categorias-titulo">Categorias</h2>
                    <a href="#">Ver tudo</a>
                </div>

                <div class="product-grid">
                    <article class="product-card">
                        <div class="product-card__img">
                            <img src="{{ asset('img/margherita.jpg') }}" alt="Pizza Margherita DOC" width="400" height="300" loading="lazy">
                        </div>
                        <div class="product-card__body">
                            <h3 class="product-card__title">Margherita DOC</h3>
                            <div class="product-card__row">
                                <p class="product-card__price">R$ 50,00</p>
                                <button type="button" class="product-card__add-icon" aria-label="Adicionar rápido">+</button>
                            </div>
                            <button type="button" class="product-card__add-btn">Adicionar</button>
                        </div>
                    </article>

                    <article class="product-card">
                        <div class="product-card__img">
                            <img src="{{ asset('img/diavola.jpg') }}" alt="Pizza Diavola Pepperoni" width="400" height="300" loading="lazy">
                        </div>
                        <div class="product-card__body">
                            <h3 class="product-card__title">Diavola Pepperoni</h3>
                            <div class="product-card__row">
                                <p class="product-card__price">R$ 52,00</p>
                            </div>
                            <button type="button" class="product-card__add-btn">Adicionar</button>
                        </div>
                    </article>

                    <article class="product-card">
                        <div class="product-card__img">
                            <img src="{{ asset('img/quattro.jpg') }}" alt="Pizza Quattro Formaggi" width="400" height="300" loading="lazy">
                        </div>
                        <div class="product-card__body">
                            <h3 class="product-card__title">Quattro Formaggi</h3>
                            <div class="product-card__row">
                                <p class="product-card__price">R$ 56,00</p>
                            </div>
                            <button type="button" class="product-card__add-btn">Adicionar</button>
                        </div>
                    </article>
                </div>
            </section>
        </main>

        <nav class="bottom-nav" aria-label="Categorias do cardápio">
            <a href="{{ url('/inicio') }}" aria-current="page">
                <span class="bottom-nav__icon-wrap" aria-hidden="true">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M12 3 4 21h16L12 3z"/>
                        <circle class="bottom-nav__dot" cx="10.5" cy="14" r="1.2"/>
                        <circle class="bottom-nav__dot" cx="13.5" cy="16" r="1"/>
                    </svg>
                </span>
                Pizzas
            </a>
            <a href="#">
                <span class="bottom-nav__icon-wrap" aria-hidden="true">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M8 2h8l-1 12H9L8 2z"/>
                        <path d="M7 14h10"/>
                        <path d="M9 22h6"/>
                    </svg>
                </span>
                Bebidas
            </a>
            <a href="#">
                <span class="bottom-nav__icon-wrap" aria-hidden="true">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M8 22h8"/>
                        <path d="M10 22 12 8l2 14"/>
                        <path d="M9 8h6l-1-4H10l-1 4z"/>
                    </svg>
                </span>
                Sobremesas
            </a>
            <a href="#">
                <span class="bottom-nav__icon-wrap" aria-hidden="true">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M6 4v11c0 2 1.5 3 3 3h0c1.5 0 3-1 3-3V4"/>
                        <path d="M6 4c0-1.5 1-3 3-3s3 1.5 3 3"/>
                        <path d="M17 3v18"/>
                        <path d="M15 21h4"/>
                    </svg>
                </span>
                Entradas
            </a>
        </nav>
    </div>
</body>
</html>
