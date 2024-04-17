<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\SolicitudController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CuentaAController;
use App\Http\Controllers\CuentaUController;
use App\Http\Controllers\AltasController;
use App\Http\Controllers\VentaController;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome');
});

Route::get('repartidor', function () {
    return view('repartidor');
});



// Rutas para SolicitudController
Route::get('mostrarSolicitudes', [SolicitudController::class, 'mostrarSolicitudes']);

// Rutas para AdminController
Route::get('pedidos', [AdminController::class, 'pedidos']); 
Route::get('inicioSesionA', [AdminController::class, 'inicioS']); 
Route::get('/inicioSecionA', function () {
    return view('iniciosesionadmin');
})->name('inicioSesionA');

// Ruta para procesar el formulario y registrar al usuario
Route::post('/registrar-admin', [CuentaAController::class, 'registrarAdmin'])->name('registrarAdmin');
Route::get('/registroA', function () {
    return view('registroadmin');
})->name('registroAdmin');

Route::get('ventas', [AdminController::class, 'ventas']);

Route::get('/ventas/dia', 'VentaController@ventasPorDia');
Route::get('/ventas/semana', 'VentaController@ventasPorSemana');
Route::get('/ventas/mes', 'VentaController@ventasPorMes');



//De parte de admin



//Rutas para solicitudes



Route::get('/ventas', [VentaController::class, 'index'])->name('ventas.index');




//alta vista
Route::get('alta', [AltasController::class, 'index'])->name('altas.index');
Route::post('alta', [AltasController::class, 'store'])->name('altas.store');
Route::get('altas/{id}/edit', [AltasController::class, 'edit'])->name('altas.edit');
Route::put('altas/{id}', [AltasController::class, 'update'])->name('altas.update');
Route::delete('altas/{id}', [AltasController::class, 'destroy'])->name('altas.destroy');
Route::patch('/productos/{id}', [AltasController::class, 'updateProduct']);


// Rutas para UsuarioController
Route::get('inicio', [UsuarioController::class, 'inicio'])->name('inicio');
Route::get('nosotros', [UsuarioController::class, 'nosotros']);
Route::get('perfilU', [UsuarioController::class, 'perfil']);
Route::get('registro', [UsuarioController::class, 'regis']);
Route::get('principal', [UsuarioController::class, 'principal'])->name('principal');
//Route::get('/pasteles', [ProductoController::class, 'index'])->name('productos');
Route::get('carrito', [UsuarioController::class, 'car']);
Route::get('plantillaprod', [UsuarioController::class, 'planprod']);
Route::get('inicioSesion', [UsuarioController::class, 'inicioS'])->name('inicioSesion');
//CUentas
Route::get('/', [CuentaUController::class, 'show_Date'])->name('verificarInicioSesion');
Route::post('/iniciar-sesion', [CuentaUController::class, 'iniciarSesion'])->name('verificarInicioSesion');

//Rutas repetidas por funcion Usuario
Route::prefix('pasteles')->group(function () {
    Route::get('/', [ProductoController::class, 'index2'])->name('productos');
});
Route::get('/plantillaprod', 'App\Http\Controllers\ProductoController@mostrarProducto');

Route::post('/agregar-al-carrito/{id}', 'ProductoController@addToCart')->middleware('auth')->name('agregar.al.carrito');
Route::get('login', [CuentaUController::class, 'iniciarSesion'])->name('login');

Route::get('/mostrar-id-usuario', function () {
    $userId = Auth::id(); // Obtener el ID del usuario autenticado

    return view('mostrar_id_usuario', ['userId' => $userId]);
});


Route::post('/registrar-cuenta', [CuentaUController::class, 'registrar'])->name('registrarCuenta');

//Solicitdes rutas y funcionalidad XD
Route::get('/solicitudes', [SolicitudController::class, 'index'])->name('solicitudes.index');
Route::get('/solicitudes/create', [SolicitudController::class, 'create'])->name('solicitudes.create');
Route::post('/solicitudes', [SolicitudController::class, 'store'])->name('solicitudes.store');
Route::get('/solicitudes/{id}/edit', [SolicitudController::class, 'edit'])->name('solicitudes.edit');
Route::put('/solicitudes/{id}', [SolicitudController::class, 'update'])->name('solicitudes.update');
Route::delete('/solicitudes/{id}', [SolicitudController::class, 'destroy'])->name('solicitudes.destroy');
Route::get('/solicitudes/{id}/details', [SolicitudController::class, 'getSolicitudDetails']);
Route::get('/mostrar-solicitudes', [SolicitudController::class, 'mostrarSolicitudes']);

//Route::get('mostrarAlumnos', [AlumnoController::class, 'show_alumnos']);
//Route::get('mostrarSolicitudes', [SolicitudController::class, 'show_solic']);



