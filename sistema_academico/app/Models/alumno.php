<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alumno extends Model
{
    protected $fillable = ['idAlumno', 'codigo', 'nombre', 'direccion', 'telefono','dui', 'carrera'];
}