<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imparte extends Model
{
    protected $table = 'imparte';
    protected $primaryKey = null;
    public $incrementing = false;

    protected $fillable = [
        'c_codclase',
        'p_idprofesor',
        'a_idaula',
    ];

    // Override the update method
    // Override the update method
    // public function update(array $attributes = [], array $options = [])
    // {
    //     // Exclude the 'id' column from the update query
    //     $query = $this->newQueryWithoutScopes()->where($this->getKeyName(), $this->getKey());

    //     // Remove the 'id' attribute from the update attributes
    //     unset($attributes[$this->getKeyName()]);

    //     // Perform the update
    //     return $query->update($attributes);
    // }

    public function clase()
    {
        return $this->belongsTo(Clase::class, 'c_codclase');
    }

    public function profesor()
    {
        return $this->belongsTo(Profesor::class, 'p_idprofesor');
    }

    public function aula()
    {
        return $this->belongsTo(Aula::class, 'a_idaula');
    }
}
