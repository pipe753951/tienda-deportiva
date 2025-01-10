<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsletterEmails extends Model
{
    // Habiltar la asignación masiva estableciendo qué propiedades se puede llenar
    protected $fillable = [
        'email'
    ];
}
