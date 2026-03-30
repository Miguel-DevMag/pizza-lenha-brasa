<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ], [
            'email.required' => 'Informe seu e-mail.',
            'email.email' => 'E-mail inválido.',
            'password.required' => 'Informe sua senha.',
        ]);

        $request->session()->put('auth_logged_in', true);

        return redirect()->route('home');
    }

    public function showRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:6'],
        ], [
            'name.required' => 'Informe seu nome completo.',
            'email.required' => 'Informe seu e-mail.',
            'password.required' => 'Defina uma senha.',
            'password.min' => 'A senha deve ter pelo menos 6 caracteres.',
        ]);

        return redirect()->route('login')->with('status', 'Cadastro realizado. Faça login.');
    }

    public function showForgotPassword()
    {
        return view('auth.forgot-password');
    }

    public function sendResetCode(Request $request)
    {
        $request->validate([
            'channel' => ['required', 'in:email,phone'],
            'contact' => ['required', 'string', 'max:255'],
        ], [
            'contact.required' => 'Informe e-mail ou número conforme a opção escolhida.',
        ]);

        $request->session()->put('password_reset_channel', $request->channel);
        $request->session()->put('password_reset_contact', $request->contact);

        return redirect()->route('verify-code');
    }

    public function showVerifyCode()
    {
        if (! session('password_reset_contact')) {
            return redirect()->route('forgot-password');
        }

        return view('auth.verify-code');
    }

    public function verifyCode(Request $request)
    {
        $code = implode('', [
            $request->input('digit1', ''),
            $request->input('digit2', ''),
            $request->input('digit3', ''),
            $request->input('digit4', ''),
        ]);

        if (! preg_match('/^\d{4}$/', $code)) {
            return back()->withErrors([
                'code' => 'Informe o código completo de 4 dígitos.',
            ])->withInput();
        }

        $request->session()->put('password_reset_verified', true);

        return redirect()->route('reset-password');
    }

    public function showResetPassword()
    {
        if (! session('password_reset_verified')) {
            return redirect()->route('forgot-password');
        }

        return view('auth.reset-password');
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'password' => ['required', 'min:6', 'confirmed'],
        ], [
            'password.required' => 'Defina a nova senha.',
            'password.confirmed' => 'As senhas não coincidem.',
            'password.min' => 'A senha deve ter pelo menos 6 caracteres.',
        ]);

        $request->session()->forget([
            'password_reset_channel',
            'password_reset_contact',
            'password_reset_verified',
        ]);

        return redirect()->route('login')->with('status', 'Senha alterada com sucesso. Faça login.');
    }

    public function logout(Request $request)
    {
        $request->session()->forget('auth_logged_in');

        return redirect()->route('login');
    }
}
