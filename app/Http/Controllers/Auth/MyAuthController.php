<?php

namespace App\Http\Controllers\Auth;

use Auth;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MyAuthController extends Controller
{
    public function showLogin(){
        return view('auth.login');
    }

    public function authenticate(Request $request) {
        $array = $request->all();

        $remember = $request->has('remember');

        if (Auth::attempt(['email' => $array['email'], 'password' => $array['password']], $remember)) {
            return redirect()->intended('/admin');
        }

        return redirect()->back()
            ->withInput($request->only('email', 'remember'))
            ->withErrors([
                'email' => 'Данные аутентификации не верны'
            ]);
    }
}
