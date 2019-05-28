<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class ProductController extends Controller
{
    public function index () {

    	$products = Product::all();

    	return view('productos/index', compact('products'));
    }

    public function store (Request $request) {

    	$product = new Product();
    	$product->name = $request->name;
    	$product->code = $request->code;
    	$product->price = $request->price;
    	$product->save();
    	$products = Product::all();
    	return view('productos/index', compact('products'));


    }
}
