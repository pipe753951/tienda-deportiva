<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubscribeNewsletterEmailRequest;
use App\Models\NewsletterEmails;
use Illuminate\Http\Request;

class Newsletter extends Controller
{
    public function subscribe(SubscribeNewsletterEmailRequest $request){
        // Crear un registro del correo
        NewsletterEmails::create($request->all());

        // Redireccionar a la pagina principal con un mensaje de exito
        return redirect()->route('index')->with('success', '¡Tu correo ha sido registrado de forma exitosa!');
    }
}
