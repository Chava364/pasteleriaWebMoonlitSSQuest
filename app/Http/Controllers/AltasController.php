<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto; 

class AltasController extends Controller
{
        public function index()
        {
            $productos = Producto::all();
            return view('alta', compact('productos'));
        }

        public function store(Request $request)
        {
            // Validación de los datos del formulario
            $request->validate([
                'nombre' => 'required',
                'precio' => 'required|numeric|min:0',
                'descripcion' => 'required',
                'imagen' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            // Crear un nuevo producto con los datos validados
            $producto = new Producto();
            $producto->nombre = $request->nombre;
            $producto->precio = $request->precio;
            $producto->descripcion = $request->descripcion;

            // Procesamiento de la imagen
            if ($request->hasFile('imagen')) {
                $image = $request->file('imagen');
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('imagenes'), $imageName);
                $producto->imagen = $imageName;
            }

            // Guardar el producto en la base de datos
            $producto->save();

            // Redireccionar a una ruta o vista después de guardar el producto
            return redirect()->route('altas.index')->with('success', 'Producto agregado correctamente');
        }

        
        public function edit($id)
        {
            $producto = Producto::findOrFail($id);
            return view('editar_producto', compact('producto'));
        }

        public function update(Request $request, $id)
        {
            $producto = Producto::findOrFail($id);

            // Actualizar los campos del producto con los datos del formulario
            $producto->nombre = $request->nombre;
            $producto->precio = $request->precio;
            $producto->descripcion = $request->descripcion;

            // Guardar los cambios en la base de datos
            $producto->save();

            // Redirigir a la vista principal o a donde desees después de la actualización
            return redirect()->route('altas.index')->with('success', 'Producto actualizado correctamente');
        }

        public function destroy($id)
        {
            $producto = Producto::findOrFail($id);
            $producto->delete();

            return redirect()->route('altas.index')->with('success', 'Producto eliminado correctamente');
        }

        public function updateProduct(Request $request, $id)
        {
            $column = $request->input('column');
            $value = $request->input('value');

            $producto = Producto::findOrFail($id);
            $producto->$column = $value;
            $producto->save();

            return response()->json(['message' => 'Producto actualizado correctamente']);
        }


}
