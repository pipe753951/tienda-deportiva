<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Guardar los productos en un array asociativo
        $products = [
            [
                'name' => 'Bicicleta',
                'price' => '200000',
                'category' => 'Aire libre',
                'slug' => 'bicicleta'
            ],
            [
                'name' => 'Balón de baloncesto',
                'price' => '100000',
                'category' => 'Aire libre',
                'slug' => 'balon_baloncesto'
            ],
            [
                'name' => 'Balón de fútbol',
                'price' => '105000',
                'category' => 'Aire libre',
                'slug' => 'balon_futbol'
            ],
            [
                'name' => 'Raqueta de tenis',
                'price' => '90000',
                'category' => 'Aire libre',
                'slug' => 'raqueta_tenis'
            ],
            [
                'name' => 'Pelota de tenis X3',
                'price' => '35000',
                'category' => 'Aire libre',
                'slug' => 'pelota_tenis_3'
            ],
            [
                'name' => 'Guantes de beisbol',
                'price' => '15000',
                'category' => 'Aire libre',
                'slug' => 'guante_beisbol'
            ],
            [
                'name' => 'Pelota de beisbol',
                'price' => '35000',
                'category' => 'Aire libre',
                'slug' => 'pelota_beisbol'
            ],
            [
                'name' => 'Pesa',
                'price' => '130000',
                'category' => 'Gimnasio',
                'slug' => 'pesa'
            ],
            [
                'name' => 'Pesa rusa',
                'price' => '30000',
                'category' => 'Gimnasio',
                'slug' => 'pesa_rusa'
            ],
            [
                'name' => 'Rueda de yoga',
                'price' => '54300',
                'category' => 'Yoga',
                'slug' => 'rueda_yoga'
            ],
            [
                'name' => 'Tapete de yoga',
                'price' => '30000',
                'category' => 'Yoga',
                'slug' => 'tapete_yoga'
            ]
        ];

        // Insertar en la base de datos los productos del array, usando el factory ProductFactory para completar el dato de prueba restante (descripción)
        foreach ($products as $product) {
            Product::factory()->create($product);
        }
    }
}
