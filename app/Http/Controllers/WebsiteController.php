<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    // Controlador para la pagina principal (index)
    public function index(){
        // Recuperar unicamente los 4 primeros productos
        $products = Product::all()->take(4);

        return view('index', compact('products'));
    }

    public function about_us(){
        return view('about_us');
    }
}
