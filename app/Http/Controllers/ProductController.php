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

    public function show () {
      
    }

    public function ShowProductByCode ($codigo) {

     $price = Product::whereCode($codigo)->value('price');
     $name = Product::whereCode($codigo)->value('name');
     $neto = intval($price / 1.19);

     if (!$price) 
     {
        $price = "N/A";
        $name = "Codigo No encontrado";
        $neto = 0;
        return compact('price', 'name');
     } else {

     }

        return compact('price', 'name', 'neto');

      
    }

}
