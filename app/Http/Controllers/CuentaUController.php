<?php

namespace App\Http\Controllers;
use App\Models\CuentaU;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class CuentaUController extends Controller
{
    public function show_Date(){
        $cuentasUsuarios=CuentaU::all();
        return $cuentasUsuarios;
    }

    public function registrar(Request $request)
    {
        $correoExistente = CuentaU::where('correo', $request->input('correo'))->exists();

        if ($correoExistente) {
            return redirect()->back()->with('error', 'El correo ya está registrado.');
        }

        $cuenta = new CuentaU();
        $cuenta->nombre = $request->input('nombre');
        $cuenta->apellidos = $request->input('apellidos');
        $cuenta->correo = $request->input('correo');
        $cuenta->contrasena = $request->input('contrasena');
        $cuenta->save();

        return redirect()->route('inicioSesion')->with('success', 'Registro exitoso. Inicia sesión.');
    }

    public function iniciarSesion(Request $request)
    {
        $request->validate([
            'correo' => 'required|email',
            'contrasena' => 'required|min:8|max:12',
        ]);

        $usuario = CuentaU::where('correo', $request->input('correo'))->first();

        if ($usuario && $usuario->contrasena === $request->input('contrasena')) {
            // Guardar el ID del usuario en la sesión
            session(['user_id' => $usuario->id]);
        
            return redirect()->route('principal')->with('success', 'Inicio de sesión exitoso');
        }

        // En caso de credenciales inválidas
        return redirect()->route('inicioSesion')->with('error', 'Credenciales inválidas');
    }

}
