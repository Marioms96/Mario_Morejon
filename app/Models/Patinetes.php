<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patinetes extends Model
{
    use HasFactory;
    protected $fillable = ['id_patinete', 'marca','modelo', 'estado', 'velocidad', 'tiempo_uso'];

    public function administradores(){
        return $this->belongsTo(Adminitrador::class, 'id_administrador');
    }

    public function alquiler(){
        return $this->belongsTo(Alquiler::class, 'id_cliente_alquiler');
    }
}
