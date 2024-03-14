<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Alumno;

class AlumnoController extends Controller
{
    public function show_alumnos(){
        $alumnos=Alumno::all();
        return $alumnos;
    }
}
