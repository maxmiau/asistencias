<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Falta extends Model
{
    // Nombre de la table
    protected $table = 'faltas';
    // Llave primaria
    public $primaryKey = 'id';
}
