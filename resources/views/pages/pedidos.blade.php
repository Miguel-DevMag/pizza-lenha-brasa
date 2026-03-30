@extends('layouts.app')

@section('title', 'Meus pedidos')

@section('header_custom')
    <header class="orders-top">
        <div class="orders-top__bar">
            <a href="{{ url('/inicio') }}" class="orders-top__back" aria-label="Voltar ao início">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 18l-6-6 6-6"/></svg>
            </a>
            <h1 class="orders-top__title">Meus Pedidos</h1>
            <button type="button" class="orders-top__search" aria-label="Buscar pedidos">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"/><path d="M15 15l4 4"/></svg>
            </button>
        </div>
        <nav class="orders-tabs" aria-label="Filtrar pedidos">
            <a href="{{ url('/pedidos') }}" class="orders-tabs__tab is-active" aria-current="page">Anteriores</a>
            <a href="#" class="orders-tabs__tab">Em andamento</a>
        </nav>
    </header>
@endsection

@section('content')
    <div class="orders-grid">
        <article class="order-card">
            <div class="order-card__img">
                <img src="{{ asset('img/margherita.jpg') }}" alt="" width="400" height="220" loading="lazy">
            </div>
            <div class="order-card__body">
                <div class="order-card__row">
                    <span class="order-card__id">Pedido #1048</span>
                    <span class="order-card__price">R$ 24,50</span>
                </div>
                <p class="order-card__date">24 Out, 2023 · 18:45</p>
                <p class="order-card__items">1x Margherita Tradicionale, 1x Coca-Cola</p>
                <div class="order-card__actions">
                    <button type="button" class="order-card__btn order-card__btn--primary">Pedir novamente</button>
                    <button type="button" class="order-card__btn order-card__btn--ghost">Detalhes</button>
                </div>
            </div>
        </article>

        <article class="order-card">
            <div class="order-card__img">
                <img src="{{ asset('img/diavola.jpg') }}" alt="" width="400" height="220" loading="lazy">
            </div>
            <div class="order-card__body">
                <div class="order-card__row">
                    <span class="order-card__id">Pedido #1042</span>
                    <span class="order-card__price">R$ 89,90</span>
                </div>
                <p class="order-card__date">18 Out, 2023 · 20:10</p>
                <p class="order-card__items">1x Calabresa Premium (G), 1x Refrigerante</p>
                <div class="order-card__actions">
                    <button type="button" class="order-card__btn order-card__btn--primary">Pedir novamente</button>
                    <button type="button" class="order-card__btn order-card__btn--ghost">Detalhes</button>
                </div>
            </div>
        </article>

        <article class="order-card">
            <div class="order-card__img">
                <img src="{{ asset('img/quattro.jpg') }}" alt="" width="400" height="220" loading="lazy">
            </div>
            <div class="order-card__body">
                <div class="order-card__row">
                    <span class="order-card__id">Pedido #1037</span>
                    <span class="order-card__price">R$ 112,00</span>
                </div>
                <p class="order-card__date">10 Out, 2023 · 19:22</p>
                <p class="order-card__items">2x Quattro Formaggi (M), 1x Água</p>
                <div class="order-card__actions">
                    <button type="button" class="order-card__btn order-card__btn--primary">Pedir novamente</button>
                    <button type="button" class="order-card__btn order-card__btn--ghost">Detalhes</button>
                </div>
            </div>
        </article>
    </div>
@endsection
