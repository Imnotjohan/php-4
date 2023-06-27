<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    protected $table = 'aula';
    // use HasFactory;
    protected $fillable = [
        'nombre',
        'ubicacion',
    ];

    public function imparte()
    {
        return $this->hasMany(Imparte::class, 'a_idaula');
    }
}
