@extends('layouts.auth')

@section('title', 'Verificação')

@section('content')
    <a href="{{ route('forgot-password') }}" class="auth-back">← Voltar</a>
    <h1>Código de verificação</h1>
    <p class="auth-lead">Digite o código de 4 números enviado para o contato informado.</p>

    @php
        $channel = session('password_reset_channel');
        $contact = session('password_reset_contact');
    @endphp
    @if ($contact)
        <p class="auth-hint">Destino: <strong>{{ $channel === 'phone' ? 'SMS' : 'E-mail' }}</strong> — {{ $contact }}</p>
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

    <form method="post" action="{{ url('/verificar-codigo') }}" id="verify-form" novalidate>
        @csrf
        <div class="auth-code-row" role="group" aria-label="Código de 4 dígitos">
            <input type="text" name="digit1" id="digit1" maxlength="1" pattern="[0-9]" inputmode="numeric" autocomplete="one-time-code" value="{{ old('digit1') }}" aria-label="Primeiro dígito">
            <input type="text" name="digit2" id="digit2" maxlength="1" pattern="[0-9]" inputmode="numeric" value="{{ old('digit2') }}" aria-label="Segundo dígito">
            <input type="text" name="digit3" id="digit3" maxlength="1" pattern="[0-9]" inputmode="numeric" value="{{ old('digit3') }}" aria-label="Terceiro dígito">
            <input type="text" name="digit4" id="digit4" maxlength="1" pattern="[0-9]" inputmode="numeric" value="{{ old('digit4') }}" aria-label="Quarto dígito">
        </div>
        <button type="submit" class="auth-btn">Verificar e continuar</button>
    </form>
@endsection

@push('scripts')
<script>
(function () {
    var ids = ['digit1', 'digit2', 'digit3', 'digit4'];
    ids.forEach(function (id, i) {
        var el = document.getElementById(id);
        if (!el) return;
        el.addEventListener('input', function () {
            this.value = this.value.replace(/\D/g, '').slice(0, 1);
            if (this.value && i < ids.length - 1) {
                document.getElementById(ids[i + 1]).focus();
            }
        });
        el.addEventListener('keydown', function (e) {
            if (e.key === 'Backspace' && !this.value && i > 0) {
                document.getElementById(ids[i - 1]).focus();
            }
        });
    });
    document.getElementById('digit1')?.focus();
})();
</script>
@endpush
