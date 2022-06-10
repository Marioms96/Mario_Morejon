<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patinetes extends Model
{
    use HasFactory;
    protected $fillable = ['marca','modelo', 'estado', 'velocidad', 'tiempo_uso'];
}
