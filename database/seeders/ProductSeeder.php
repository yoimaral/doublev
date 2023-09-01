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

        for ($i = 0; $i < 10; $i++) {

            $product1 = new Product;
            $product1->idPedido = $i + 1;
            $product1->producto = "papaya";
            $product1->cantidad = 20;
            $product1->save();
        }
    }
}
