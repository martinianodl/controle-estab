<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller {

    public function index(Request $request) {
        return view('autenticacao.login');
    }

    public function login(Request $request) {
        $credentials = $request->only(['email', 'password']);
        if (!Auth::attempt($credentials)) {
            return redirect()
                ->back()
                ->withErrors('Usuário e/ou senha incorretos');
        }
        return redirect()->route('listar_estab');
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('login');
    }

}
