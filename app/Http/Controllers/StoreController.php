<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    // Pagina principal de la tienda
    public function index(){
        // Recuperar todos los productos
        $products = Product::all();

        // Crear una lista de categorías
        $categories = [];

        // Ordenar los productos por categoría en una variable
        $productList = [];
        foreach ($products as $product) {
            // Buscar si la categoría está registrada en $categories y en $productList, y si no está registrada, se registra
            if (!in_array($product->category, $categories)){
                array_push($categories, $product->category);
                $productList[$product->category] = [];
            }

            // Asigna el producto a una categoría
            array_push($productList[$product->category], $product);
        }

        return view('store.index', compact('categories', 'productList'));
    }

    // Buscar un producto
    public function search(SearchProductRequest $request){
        // Almacenar el query de la busqueda en una variable
        $query = $request->q;

        // Buscar productos que contengan el query de la busqueda
        $products = Product::where('name', 'LIKE', '%' . $query . '%')->get();

        return view('store.search', compact('products', 'query'));
    }

    // Mostrar un producto
    public function show(Product $product)
    {
        // Recuperar unicamente los 4 primeros productos para mostrarlos como sugerencias
        $suggestions = Product::all()->take(4);

        return view('store.show', compact('product', 'suggestions'));
    }
}
