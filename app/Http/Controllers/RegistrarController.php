<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegistrarController extends Controller
{
    public function index(){
        return view('autenticacion.registrar');
    }
    public function store(){

        $this->validate(request(),
        [
            'email' => 'required',
            'name' => 'required',
            'password' => 'required|confirmed'
        ]);
        $usuario = User::create(request(['name', 'email', 'password']));
        auth()->login($usuario);
        return redirect()->to('/');
    }
}
