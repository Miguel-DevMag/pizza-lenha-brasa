@extends('layouts.app')

@section('title', 'Cardápio')

@section('content')
    <header class="page-intro">
        <h2 class="page-intro__title">Cardápio completo</h2>
        <p class="page-intro__text">Escolha entre clássicos italianos e combinações especiais da Lenha &amp; Brasa.</p>
        <p class="page-intro__links">
            <a href="{{ url('/promocao') }}">Ver promoções</a>
            ·
            <a href="{{ url('/sobre') }}">Sobre nós</a>
        </p>
    </header>
    @include('partials.menu-cards')
@endsection
