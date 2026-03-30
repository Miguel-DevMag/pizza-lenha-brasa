@extends('layouts.app')

@section('title', 'Meu perfil')

@section('content')
    <div class="profile-page">
        <header class="profile-header">
            <div class="profile-header__avatar" aria-hidden="true">
                <img src="{{ asset('img/logo-pizzaria.png') }}" alt="" width="72" height="72">
            </div>
            <h2 class="profile-header__name">Cliente Lenha &amp; Brasa</h2>
            <p class="profile-header__email">contato@pizzarialenhabrasa.com.br</p>
        </header>

        <nav class="profile-menu" aria-label="Opções da conta">
            <a class="profile-menu__item" href="{{ url('/pedidos') }}">
                <span>Pedidos recentes</span>
                <span class="profile-menu__chev" aria-hidden="true">›</span>
            </a>
            <a class="profile-menu__item" href="{{ url('/cardapio') }}">
                <span>Cardápio</span>
                <span class="profile-menu__chev" aria-hidden="true">›</span>
            </a>
            <a class="profile-menu__item" href="{{ url('/promocao') }}">
                <span>Promoções</span>
                <span class="profile-menu__chev" aria-hidden="true">›</span>
            </a>
            <a class="profile-menu__item" href="{{ url('/sobre') }}">
                <span>Sobre a pizzaria</span>
                <span class="profile-menu__chev" aria-hidden="true">›</span>
            </a>
        </nav>

        <section class="profile-card" aria-labelledby="prefs-title">
            <h3 id="prefs-title" class="profile-card__title">Preferências</h3>
            <label class="profile-toggle">
                <span>Notificações de ofertas</span>
                <input type="checkbox" name="notif" checked disabled>
            </label>
            <label class="profile-toggle">
                <span>Lembrar endereço de entrega</span>
                <input type="checkbox" name="addr" disabled>
            </label>
            <p class="profile-card__hint">Ajustes completos em breve — apenas visual.</p>
        </section>

        <p class="profile-footer">
            <a href="{{ url('/login') }}" class="profile-footer__link">Área de login</a>
        </p>
    </div>
@endsection
