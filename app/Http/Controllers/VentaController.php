<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venta;
use App\Models\Solicitud;

class VentaController extends Controller
{
    public function index()
    {
        $ventas = Venta::with('solicitud')->get();
        return view('ventas', compact('ventas'));
    }
    public function ventasPorDia()
    {
        // día actual
        $ventasDia = Venta::whereDate('created_at', Carbon::today())->get();

        return view('ventas.index', compact('ventasDia'));
    }

    public function ventasPorSemana()
    {
        // entas  semana
        $fechaSemanaPasada = Carbon::now()->subWeek();
        $ventasSemana = Venta::where('created_at', '>=', $fechaSemanaPasada)->get();

        return view('ventas.index', compact('ventasSemana'));
    }

    public function ventasPorMes()
    {
        // Obtener las ventas del mes actual
        $ventasMes = Venta::whereYear('created_at', Carbon::now()->year)
            ->whereMonth('created_at', Carbon::now()->month)
            ->get();

        return view('ventas.index', compact('ventasMes'));
    }
    public function sumaVentas()
    {
        // Obtener la suma de todas las ventas
        $totalVentas = Venta::sum('costo');

        return view('ventas.suma', compact('totalVentas'));
    }
}
