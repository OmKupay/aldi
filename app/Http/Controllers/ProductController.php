<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $products = [
        1 => ['name' => 'kaos laravel', 'price' => 150000],
        2 => ['name' => 'Stiker coding', 'price' => 25000],
        3 => ['name' => 'Notebook dev', 'price' => 50000],
    ];

    // menanmpilkan daftar produk
    public function index()
{
    $products = $this->products;
    return view('products.index', compact('products'));
}
}
