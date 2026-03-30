<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(Request $request)
    {
        if (! $request->session()->get('auth_logged_in')) {
            return redirect()->route('login');
        }

        return view('home');
    }
}
