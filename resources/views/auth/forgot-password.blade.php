@extends('layouts.auth')

@section('title', 'Esqueci a senha')

@section('content')
    <a href="{{ route('login') }}" class="auth-back">← Voltar ao login</a>
    <h1>Esqueci a senha</h1>
    <p class="auth-lead">Escolha receber o código por e-mail ou por número. Depois solicitamos o código de verificação.</p>

    @if ($errors->any())
        <div class="auth-errors" role="alert">
            <ul>
                @foreach ($errors->all() as $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="{{ url('/esqueci-senha') }}" novalidate>
        @csrf
        <fieldset class="auth-field" style="border: none; padding: 0; margin: 0 0 1rem;">
            <legend class="visually-hidden">Forma de verificação</legend>
            <div class="auth-field--inline-options">
                <label>
                    <input type="radio" name="channel" value="email" {{ old('channel', 'email') === 'email' ? 'checked' : '' }}>
                    E-mail
                </label>
                <label>
                    <input type="radio" name="channel" value="phone" {{ old('channel') === 'phone' ? 'checked' : '' }}>
                    Número (telefone)
                </label>
            </div>
        </fieldset>
        <div class="auth-field">
            <label for="contact">E-mail ou número</label>
            <input type="text" id="contact" name="contact" value="{{ old('contact') }}" required autocomplete="email" inputmode="email" placeholder="seu@email.com ou (00) 00000-0000">
        </div>
        <p class="auth-hint">Enviaremos um código de 4 dígitos para confirmar sua identidade.</p>
        <button type="submit" class="auth-btn">Solicitar código</button>
    </form>
@endsection
