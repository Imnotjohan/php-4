<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clase extends Model
{
    // use HasFactory;
    protected $table = 'clase';
    protected $primaryKey = 'codclase';
    public $incrementing = false;
    protected $fillable = ['codclase', 'nombre', 'credito'];

    public function imparte()
    {
        return $this->hasMany(Imparte::class, 'c_codclase');
    }
}
