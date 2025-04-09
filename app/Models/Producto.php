<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public function Categoria(){
        return $this->belongsTo(Categoria::class);

    }

    public function Pedido(){
        return $this->belongsToMany(Pedido::class);
    }
}
