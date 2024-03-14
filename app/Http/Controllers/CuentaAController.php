<?php

namespace App\Http\Controllers;
use App\Models\CuentaA;
use Illuminate\Http\Request;

class CuentaAController extends Controller
{
    public function show_Date(){
        $cuentasAdministradores=CuentaA::all();
        return $cuentasAdministradores;
    }
    public function registrarAdmin(Request $request)
    {
        $correoExistente = CuentaA::where('correo', $request->input('correo'))->exists();

        if ($correoExistente) {
            return redirect()->back()->with('error', 'El correo ya está registrado.');
        }

        $cuenta = new CuentaA();
        $cuenta->nombre = $request->input('nombre');
        $cuenta->apellidos = $request->input('apellidos');
        $cuenta->correo = $request->input('correo');
        $cuenta->contrasena = $request->input('contrasena');
        $cuenta->save();

        return redirect()->route('inicioSesionA')->with('success', 'Registro exitoso. Inicia sesión.');
    }
}
