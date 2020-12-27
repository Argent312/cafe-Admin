<?php

namespace App\Http\Controllers;
use App\Product;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function show(){
        $products_cafe = Product::all()->where('categoria', 'Cafe');
        $products_pastel = Product::all()->where('categoria', 'Pastel');
        $products_bocadillo = Product::all()->where('categoria', 'Bocadillo');
        return view('client.productos', compact('products_cafe', 'products_pastel', 'products_bocadillo'));
    }
}
