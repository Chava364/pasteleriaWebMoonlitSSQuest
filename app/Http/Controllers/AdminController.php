<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function pedidos(){
        return view('adminpedidos');
    }
    
    public function inicioS(){
        return view('iniciosesionadmin');
    }
    public function regis(){
        return view('registroadmin');
    }
    public function ventas(){
        return view('ventas');
    }
    public function alta(){
        return view('alta');
    }
    

}

