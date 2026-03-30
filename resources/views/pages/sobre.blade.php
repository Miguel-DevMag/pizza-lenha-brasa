@extends('layouts.app')

@section('title', 'Sobre nós')

@section('content')
    <article class="about-page">
        <figure class="about-page__hero">
            <img src="{{ asset('img/principal.jpg') }}" alt="Forno a lenha e pizzas da casa" width="800" height="360" loading="lazy">
        </figure>
        <div class="about-page__content">
            <h2 class="about-page__title">Nossa história</h2>
            <p class="about-page__text">A <strong>Pizzaria Lenha &amp; Brasa</strong> nasceu do desejo de trazer o sabor autêntico da pizza italiana, assada em forno a lenha, com ingredientes selecionados e massa fermentada com tempo e carinho.</p>
            <p class="about-page__text">Combinamos tradição e criatividade em cada receita — das clássicas margheritas às combinações especiais da casa — sempre com foco em qualidade e acolhimento.</p>
            <h3 class="about-page__subtitle">Valores</h3>
            <ul class="about-page__list">
                <li>Ingredientes frescos e fornecedores de confiança</li>
                <li>Respeito ao tempo de preparo e da fermentação</li>
                <li>Atendimento próximo e ambiente familiar</li>
            </ul>
            <p class="about-page__cta-wrap">
                <a href="{{ url('/cardapio') }}" class="about-page__cta">Explorar cardápio</a>
            </p>
        </div>
    </article>
@endsection
