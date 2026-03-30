@extends('layouts.auth')

@section('title', 'Cadastro')

@section('content')
    <h1>Criar conta</h1>
    <p class="auth-lead">Cadastre-se com nome completo, e-mail e senha.</p>

    @if ($errors->any())
        <div class="auth-errors" role="alert">
            <ul>
                @foreach ($errors->all() as $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="{{ url('/cadastro') }}" novalidate>
        @csrf
        <div class="auth-field">
            <label for="name">Nome completo</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required autocomplete="name">
        </div>
        <div class="auth-field">
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required autocomplete="email">
        </div>
        <div class="auth-field">
            <label for="password">Senha</label>
            <input type="password" id="password" name="password" required autocomplete="new-password" minlength="6">
        </div>
        <button type="submit" class="auth-btn">Cadastrar</button>
    </form>

    <div class="auth-links">
        <p style="margin: 0;">Já tem conta? <a href="{{ route('login') }}">Entrar</a></p>
    </div>
@endsection
