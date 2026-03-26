<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->truncate();

        $products = [
            ["name" => "Product A", "price" => 10],
            ["name" => "Product B", "price" => 20],
            ["name" => "Product C", "price" => 30],
            ["name" => "Product D", "price" => 40],
            ["name" => "Product E", "price" => 50],
            ["name" => "Product F", "price" => 60],
        ];

        DB::table('products')->insert($products);
    }
}
