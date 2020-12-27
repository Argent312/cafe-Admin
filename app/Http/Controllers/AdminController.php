<?php

namespace App\Http\Controllers;
use App\Product;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function show(){
        $products_cafe = Product::all()->where('categoria', 'Cafe');
        $products_pastel = Product::all()->where('categoria', 'Pastel');
        $products_bocadillo = Product::all()->where('categoria', 'Bocadillo');
        return view('administrador.products', compact('products_cafe', 'products_pastel', 'products_bocadillo'));
    }
}
