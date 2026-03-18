<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $products = [
        ["key" => 0, "name" => "Product A", "price" => 10],
        ["key" => 1, "name" => "Product B", "price" => 20],
        ["key" => 2, "name" => "Product C", "price" => 30],
        ["key" => 3, "name" => "Product D", "price" => 40],
        ["key" => 4, "name" => "Product E", "price" => 50],
        ["key" => 5, "name" => "Product F", "price" => 60],
    ];
    public function index()
    {
        $products = $this->products;

        return view('products.index', ['products' => $products]);
    }

    public function show($key)
    {
        $other_products = collect($this->products)->filter(
            function($product) use ($key) {
                return $product['key'] != $key;
            })->random(3);

        return view('products.show', [
            'product' => $this->products[$key],
            'other_products' => $other_products,
        ]);
    }
}
