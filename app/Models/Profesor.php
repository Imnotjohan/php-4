<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    protected $table = 'profesor';
    public $incrementing = false;

    protected $fillable = [
        'id',
        'nombre',
        'apellido',
        'titulo',
    ];

    public function imparte()
    {
        return $this->hasMany(Imparte::class, 'p_idprofesor');
    }
}
