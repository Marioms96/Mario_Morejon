<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Clientes extends Model
{
    public $table = "cliente";
    public $timestamps = false;
    use HasFactory;
    protected $fillable = ['nombre_titular', 'numero_tarjeta', 'fecha_caducidad', 'cvc'];



    
}
