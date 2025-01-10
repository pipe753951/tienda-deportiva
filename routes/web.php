<?php

use App\Http\Controllers\Newsletter;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;

// Ruta raíz
Route::get('/', [WebsiteController::class, 'index'])->name('index');

// Ruta de información sobre el sitio web
Route::get('/sobre_nosotros', [WebsiteController::class, 'about_us'])->name('about_us');

// Ruta de tienda
Route::get('/tienda', [StoreController::class, 'index'])->name('store.index');

// Ruta de buscar un producto de la tienda
Route::get('/tienda/buscar', [StoreController::class, 'search'])->name('store.search');

// Ruta de artículo deportivo
Route::get('/tienda/{product}', [StoreController::class, 'show'])->name('store.show');

// Ruta para suscribirse al boletín de noticias
Route::post('/newsletter/subscribe', [Newsletter::class, 'subscribe'])->name('newsletter.subscribe');
