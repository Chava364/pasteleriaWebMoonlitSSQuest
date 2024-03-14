<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function inicio(){
        return view('inicioo');
    }
    public function perfil(){
        return view('perfil');
    }
    public function nosotros(){
        return view('nosotros');
    }
    public function inicioS(){
        return view('iniciosesion');
    }
    public function regis(){
        return view('registro');
    }

    public function principal(){
        return view('principal');
        
    }

    public function past(){
        return view('pasteles');
    }
    public function car(){
        return view('carrito');
    }
    public function planProd(){
        return view('plantillaprod');
    }
}
