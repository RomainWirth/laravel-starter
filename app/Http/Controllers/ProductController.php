<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->get();

        return view('products.index', ['products' => $products]);
    }

    public function show($id)
    {
        $product = DB::table('products')->where('id', $id)->first();
        $other_products = DB::table('products')->where('id', '!=', $id)->inRandomOrder()->limit(3)->get();

        return view('products.show', [
            'product' => $product,
            'other_products' => $other_products,
        ]);
    }
}
