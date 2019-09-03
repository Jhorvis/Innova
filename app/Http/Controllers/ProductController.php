<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

use \Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index () {

    	$products = Product::all();
        $message = "";

    	return view('productos/index', compact('products', 'message'));
    }

    public function store (Request $request) {

        $code = $request->code;

        $products = Product::all();



        #Verificando que el código del producto no este repetido
        $searchCode = DB::table('products')->where('code', $code)->get();

        foreach ($searchCode as $searchCode);

        if (!empty($searchCode->code)) {

            $message = "Codigo ya fue insertado para el producto ".$searchCode->name;

            return view('productos/index', compact('products', 'message'));


        } else {

         $message = "Producto ingresado con éxito";

    	$product = new Product();
    	$product->name = $request->name;
    	$product->code = $request->code;
    	$product->price = $request->price;
    	$product->save();
    	$products = Product::all();
    	return view('productos/index', compact('products', 'message'));
        }

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

    public function edit ($id)
    {
        $product = Product::find($id);
        return view('productos/edit', compact('product'));
    }

    public function update (Request $request)
    {
       
       $product = Product::find($request->id);

       $product->name = $request->name;
       $product->code = $request->code;
       $product->price = $request->price;

       $product->save();

       return view('productos/save');



        
    }

    public function countcode ()

    {
        $data = Product::orderBy('code', 'DESC')->take(1)->get();
       

        foreach ($data as $lastcode);

        $sumcode = $lastcode->code + 1;

        $stringcode = "0".$sumcode;

       return compact('stringcode');
    }

}
