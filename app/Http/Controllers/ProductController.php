<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $products = [
        ["key" => 0, "name" => "Product A", "price" => 10],
        ["key" => 1, "name" => "Product B", "price" => 20],
        ["key" => 2, "name" => "Product C", "price" => 30],
    ];
    public function index()
    {
        $products = $this->products;

        return view('products.index', ['products' => $products]);
    }

    public function show($key)
    {
        return view('products.show', ['product' => $this->products[$key]]);
    }
}
