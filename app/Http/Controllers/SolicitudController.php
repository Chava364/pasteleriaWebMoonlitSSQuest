<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Solicitud;
use Illuminate\Support\Facades\Route;

class SolicitudController extends Controller
{
    public function index()
    {
        $solicitudes = Solicitud::all();
        return view('solicitudesP', compact('solicitudes'));
    }

    public function create()
    {
        return view('solicitudes.create');
    }

    /*public function show($id)
    {
        $solicitud = Solicitud::find($id);
        return view('solicitudes.show', compact('solicitud'));
    }*/

    public function mostrarSolicitudes()
    {
    $solicitudes = Solicitud::all(); // Obtener todas las solicitudes

    return view('solicitudesP', compact('solicitudes'));
    }
    public function store(Request $request)
    {
        // Validar los datos de entrada
        $request->validate([
            'nombre' => 'required',
            'fecha' => 'required',
            'pedido' => 'required',
            'cantidad' => 'required',
            'descripcion' => 'required',
        ]);

        // Crear una nueva solicitud en la base de datos
        Solicitud::create($request->all());

        // Redireccionar a la página de solicitudes después de agregar la solicitud
        return redirect()->route('solicitudes.index');
    }


    public function edit($id)
    {
        $solicitud = Solicitud::findOrFail($id);
        return view('solicitudes.edit', compact('solicitud'));
    }

    // Método para actualizar una solicitud existente
    public function update(Request $request, $id)
    {
        // Encuentra la solicitud por su ID
        $solicitud = Solicitud::findOrFail($id);

        // Actualiza los campos de la solicitud con los datos recibidos
        $solicitud->nombre = $request->nombre;
        $solicitud->fecha = $request->fecha;
        $solicitud->pedido = $request->pedido;
        $solicitud->cantidad = $request->cantidad;
        $solicitud->descripcion = $request->descripcion;
        $solicitud->idCuentaU = $request->idCuentaU;
        $solicitud->idProducto = $request->idProducto;

        // Guarda los cambios en la base de datos
        $solicitud->save();

        // Redirige a la página de solicitudes después de la modificación
        return redirect()->route('solicitudes.index');
    }


    public function destroy($id)
    {
        // Buscar la solicitud por su ID
        $solicitud = Solicitud::find($id);

        if (!$solicitud) {
            return response()->json(['error' => 'Solicitud no encontrada'], 404);
        }

        // Eliminar la solicitud de la base de datos
        $solicitud->delete();

        // Redireccionar a la página de solicitudes después de eliminar la solicitud
        return redirect()->route('solicitudes.index');
    }



    public function getSolicitudDetails($id)
{
    $solicitud = Solicitud::find($id);

    if ($solicitud) {
        return response()->json($solicitud);
    }

    return response()->json(['error' => 'Solicitud no encontrada'], 404);
}


}

