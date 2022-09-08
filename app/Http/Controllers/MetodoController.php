<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MetodoController extends Controller
{
    public function create() {
        
        return view('auth.metodo');
    }
}

public function store() {

    $this->validate(request(), [
        'ntarjeta'=> 'required| tarjeta',
        'vencimiento'=> 'required|vencimiento',
        'CSC'=> 'required|csc',
        'name' => 'required',
        'apellidos' => 'required|apellidos',
        'linea1' => 'required|linea1',
        'linea2' => 'required|linea2',
        'cp' => 'required|cp',
        'cuidad' => 'required|ciudad',
        'movil' => 'required|movil',
        'email' => 'required|email',

    ]);

    $user = User::create(request(['ntarjeta','vencimiento','csc','name' ,'apellidos','linea1','linea2','cp','cuidad','movil', 'email']));

    auth()->login($user);
    return redirect()->to('/');
}
}
