@extends('layouts.auth')

@section('title', 'Nova senha')

@section('content')
    <h1>Nova senha</h1>
    <p class="auth-lead">Defina uma nova senha e confirme abaixo.</p>

    @if ($errors->any())
        <div class="auth-errors" role="alert">
            <ul>
                @foreach ($errors->all() as $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="{{ url('/nova-senha') }}" novalidate>
        @csrf
        <div class="auth-field">
            <label for="password">Nova senha</label>
            <input type="password" id="password" name="password" required autocomplete="new-password" minlength="6">
        </div>
        <div class="auth-field">
            <label for="password_confirmation">Confirmar senha</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required autocomplete="new-password" minlength="6">
        </div>
        <ul class="auth-rules">
            <li>Recomendado: letras e números</li>
            <li>Maiúsculas e minúsculas</li>
            <li>Caractere especial (# ! @)</li>
        </ul>
        <button type="submit" class="auth-btn">Salvar nova senha</button>
    </form>
@endsection
