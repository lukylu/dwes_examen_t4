<?php

namespace Database\Seeders;

use App\Models\Prenda;
use Illuminate\Database\Seeder;

class PrendaSeeder extends Seeder
{
    public function run(): void
    {
        Prenda::create([
            'nombre' => 'Camiseta Básica Blanca',
            'descripcion' => 'Camiseta de algodón 100% básica blanca, cómoda y versátil para cualquier ocasión.',
            'precio' => 12.99,
        ]);

        Prenda::create([
            'nombre' => 'Pantalón Vaquero Azul',
            'descripcion' => 'Pantalón vaquero de corte clásico en color azul oscuro, resistente y duradero.',
            'precio' => 45.50,
        ]);

        Prenda::create([
            'nombre' => 'Sudadera Gris',
            'descripcion' => 'Sudadera cómoda en gris claro, perfecta para el otoño e invierno.',
            'precio' => 35.99,
        ]);

        Prenda::create([
            'nombre' => 'Chaqueta Negra de Cuero',
            'descripcion' => 'Chaqueta de cuero sintético negra, elegante y sofisticada para cualquier atuendo.',
            'precio' => 89.99,
        ]);

        Prenda::create([
            'nombre' => 'Falda Roja Corta',
            'descripcion' => 'Falda de corte recto en rojo vibrante, ideal para looks modernos y atrevidos.',
            'precio' => 28.50,
        ]);
    }
}
