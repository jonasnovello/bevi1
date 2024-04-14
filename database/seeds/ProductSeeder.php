<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Product $product)
    {
        DB::table('products')->insert([
            'name' => 'Smartphone Samsung Galaxy A15 5G',
            'description' => '256GB 8GB RAM DSN Tela 6.5 - Azul',
            'price' => '903',
            'status' => 'em estoque',
            'stock_quantity' => '5'
        ]);

        DB::table('products')->insert([
            'name' => 'Smartphone Samsung Galaxy A34',
            'description' => '256GB 8GB RAM Dual SIM Tela 6.6 - Verde',
            'price' => '1286',
            'status' => 'em reposicao',
            'stock_quantity' => '1'
        ]);

        DB::table('products')->insert([
            'name' => 'Smartphone OnePlus Nord CE 2',
            'description' => '128GB 8GB RAM Dual SIM Tela 6.43 - Cinza',
            'price' => '1470',
            'status' => 'em falta',
            'stock_quantity' => '0'
        ]);
    }
}
