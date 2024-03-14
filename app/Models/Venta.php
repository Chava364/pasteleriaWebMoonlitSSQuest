<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;
    protected $table = 'Ventas';

    public function solicitud()
    {
        return $this->belongsTo(Solicitud::class, 'idSolicitud', 'id');
    }
}
