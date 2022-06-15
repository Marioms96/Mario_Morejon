<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    use HasFactory;

    public function usuarios(){
        return $this->belongsTo(User::class, 'id');
    }

    public function patinetes(){
        return $this->hasMany(Patinetes::class, 'id_patinete');
    }
}
