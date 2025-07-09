<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('welcome');
    }
    public function login(Request $request) {
        if ($request->isMethod('post')) {
            if ($request->email === 'teste@site.com' && $request->password === '123') {
                return redirect('/dashboard');
            }
            else {
                return back()->with('erro', 'Login inválido!');
            }
        }
        return view('login');
    }
    public function password() {
        return 'Funcionou o password';
    }
    public function register() {
        return 'Funcionou o register';
    }
    public function dashboard() {
        return view('dashboard');
    }
}