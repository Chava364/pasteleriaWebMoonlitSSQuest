<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use App\Models\Carrito;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ProductoController extends Controller
{
    public function index2()
    {
        $productos = Producto::all();
        return view('pasteles', compact('productos'));
    }
    public function mostrarProducto(Request $request)
    {
        // Obtener los datos del producto según su ID
        $producto = Producto::find($request->id); //se pasa el ID como parámetro

        // Renderizar la vista 'plantillaprod' y pasar los datos del producto
        return view('plantillaprod', compact('producto'));
    }
    
    public function addToCart(Request $request, $id)
    {
        // Encuentra el producto por su ID
        $producto = Producto::findOrFail($id);

        // Obtén el ID del usuario desde la sesión
        $userId = session('user_id');

        // Guarda los detalles del producto en el carrito
        $carrito = new Carrito();
        $carrito->idCuentaU = $userId; // Guarda el ID del usuario
        $carrito->idProducto = $producto->id; // Guarda el ID del producto
        $carrito->nombre = $producto->nombre;
        $carrito->cantidad = $request->input('quantity');
        $carrito->descripcion = $request->input('description');
        $carrito->fecha = $request->input('deliveryDate');
        // ... otros campos

        $carrito->save();

        return redirect()->back()->with('success', 'Producto agregado al carrito correctamente.');
    }

}

