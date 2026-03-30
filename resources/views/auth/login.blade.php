@extends('layouts.auth')

@section('title', 'Entrar')

@section('content')
    <h1>Entrar</h1>
    <p class="auth-lead">Acesse sua conta Pizza Lenha&amp;Brasa.</p>

    @if (session('status'))
        <p class="auth-alert auth-alert--success" role="status">{{ session('status') }}</p>
    @endif

    @if ($errors->any())
        <div class="auth-errors" role="alert">
            <ul>
                @foreach ($errors->all() as $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="{{ url('/login') }}" novalidate>
        @csrf
        <div class="auth-field">
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required autocomplete="email">
        </div>
        <div class="auth-field">
            <label for="password">Senha</label>
            <input type="password" id="password" name="password" required autocomplete="current-password">
        </div>
        <button type="submit" class="auth-btn">Entrar</button>
    </form>

    <div class="auth-links">
        <a href="{{ route('forgot-password') }}">Esqueci minha senha</a>
        <p style="margin: 0.75rem 0 0;">Não tem conta? <a href="{{ route('register') }}">Cadastrar / Inscrever-se</a></p>
    </div>
@endsection
