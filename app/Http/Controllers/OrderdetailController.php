<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \Illuminate\Support\Facades\DB;

use App\Orderdetail;

class OrderdetailController extends Controller
{
    
    public function store (Request $request)
    {	




		$cantidad = $request->cantidad;
		$idOrder = $request->idOrder;
		$code = $request->codigo;

		$getProduct = DB::table('products')->where('code', $code)->get();

		foreach ($getProduct as $getProduct);
 		 $idProduct = $getProduct->id;
 		 $priceProduct = $getProduct->price;

 		$precioTotal = $priceProduct * $cantidad;
 		$precioNetoTotal = $precioTotal / 1.19;

 		$Orderdetail = new Orderdetail();
		
		$Orderdetail->idOrder = $idOrder;
		$Orderdetail->idProducts = $idProduct;
		$Orderdetail->quantity  = $cantidad;
		$Orderdetail->price = $precioTotal;
		$Orderdetail->neto = $precioNetoTotal;
		$Orderdetail->save();

		$getOrderDetails = DB::table('orderdetails')
							->join('products', 'products.id', 'orderdetails.idProducts')
							->where('idOrder', $idOrder)
							->get();




			return view('order/index', compact('idOrder', 'getOrderDetails'));
		
		
		
	}
}
