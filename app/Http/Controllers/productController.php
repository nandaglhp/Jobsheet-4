<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function index(){
        
        $product = Product::all();
        return view('products', compact('product'));
    }
}