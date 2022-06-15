<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alquiler extends Model
{
    use HasFactory;
    protected $fillable = ['fecha_inicio', 'fecha_fin'];

    public function pagos(){
        return $this->hasMany(Pago::class, 'numero_pago');
    }

    public function patinetes(){
        return $this->hasMany(Patinetes::class, 'id_patinete');
    }

    public function clientes(){
        return $this->hasMany(Cliente::class, 'id_cliente');
    }
}
