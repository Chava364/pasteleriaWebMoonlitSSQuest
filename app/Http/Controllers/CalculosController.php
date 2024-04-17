<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Calculos;
use Illuminate\Support\Facades\Route;

class CalculosController extends Controller
{
    public function index()
    {
        $pasteles = Pastel::all();
        return view('pasteles.index', compact('pasteles'));
    }

    // Método para mostrar el formulario de creación de un pastel
    public function create()
    {
        return view('pasteles.create');
    }

    // Método para almacenar un nuevo pastel en la base de datos
    public function store(Request $request)
    {
        // Validar los datos de entrada
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'precio' => 'required|numeric|min:0',
        ]);

        // Crear un nuevo pastel en la base de datos
        Pastel::create($request->all());

        // Redireccionar a la página de index de pasteles después de agregar el pastel
        return redirect()->route('pasteles.index');
    }
}
