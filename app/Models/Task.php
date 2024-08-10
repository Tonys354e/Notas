<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    // Especifica la tabla
    protected $table = 'notas';

    // Si tienes columnas fillable, puedes agregarlas aquí
    protected $fillable = ['titulo', 'contenido'];
}
