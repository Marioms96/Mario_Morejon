<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable = ['nombre_pago', 'numero_tarjeta', 'fecha_caducidad', 'cvc'];
}
