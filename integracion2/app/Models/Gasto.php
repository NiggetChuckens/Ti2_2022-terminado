<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gasto extends Model
{
    protected $table='gastos';

    public function departamentos(){
        return $this->belongsTo(Departamento::class,"id_departamento");
    }
}
