<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    use HasFactory;
    public function frutasyverduras(){
        return $this->belongsTo(Frutayverdura::class, 'id_frutayverdura');
    }
}
