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
        return view('solicitudes.index', compact('solicitudes'));
    }

    public function create()
    {
        return view('solicitudes.create');
    }

    public function show($id)
    {
        $solicitud = Solicitud::find($id);
        return view('solicitudes.show', compact('solicitud'));
    }

    public function edit($id)
    {
        $solicitud = Solicitud::find($id);
        return view('solicitudes.edit', compact('solicitud'));
    }

    public function store(Request $request)
    {
        Solicitud::create($request->all());
        return redirect()->route('solicitudes.index');
    }

    public function update(Request $request, $id)
    {
        Solicitud::where('id', $id)->update($request->except('_token', '_method'));
        return redirect()->route('solicitudes.index');
    }

    public function destroy($id)
    {
        Solicitud::destroy($id);
        return redirect()->route('solicitudes.index');
    }
    
    public function mostrarSolicitudes()
    {
    $solicitudes = Solicitud::all(); // Obtener todas las solicitudes

    return view('solicitudesP', compact('solicitudes'));
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

