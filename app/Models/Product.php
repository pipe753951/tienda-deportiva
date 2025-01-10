<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Habilitar los factories
    use HasFactory;

    // Reemplazar el id con el slot del producto como valor que recupera un registro
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
