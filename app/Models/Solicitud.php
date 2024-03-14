<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    use HasFactory;
    protected $table = 'solicitudes';
    protected $fillable = ['nombre', 'fecha', 'cantidad', 'descripcion', 'idCuentaU', 'idProducto'];

    public function cuentaUsuario()
    {
        return $this->belongsTo(CuentaU::class, 'idCuentaU', 'id');
    }

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'idProducto', 'id');
    }
}
