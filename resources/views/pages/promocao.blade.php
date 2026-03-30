@extends('layouts.app')

@section('title', 'Promoções')

@section('content')
    <article class="promo-page">
        <section class="hero hero--promo hero--promo--large" aria-labelledby="promo-titulo">
            <div class="hero__content">
                <span class="hero__badge">OFERTA ESPECIAL</span>
                <h2 id="promo-titulo" class="hero__title">Tradizione Italiana</h2>
                <p class="hero__text">30% OFF em todas as pizzas clássicas da nossa carta. Válido para consumo no restaurante e delivery.</p>
                <p class="promo-page__note">Promoção por tempo limitado. Não cumulativa com outras ofertas.</p>
                <a href="{{ url('/cardapio') }}" class="hero__cta">Ver cardápio</a>
            </div>
            <div class="hero__visual">
                <img src="{{ asset('img/principal.jpg') }}" alt="" width="400" height="280" loading="eager">
            </div>
        </section>

        <section class="promo-list" aria-labelledby="outras-promos">
            <h2 id="outras-promos" class="promo-list__title">Outras vantagens</h2>
            <ul class="promo-list__items">
                <li>Frete grátis em pedidos acima de R$ 80 na região central.</li>
                <li>Combo família: 2 pizzas médias + refrigerante 2L com preço especial.</li>
                <li>Programa fidelidade: a cada 5 pizzas, ganhe pontos para trocar por sobremesas.</li>
            </ul>
        </section>
    </article>
@endsection
