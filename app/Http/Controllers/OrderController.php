<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{
     public function index () 
    {

    	return view('order/index');
    }

        public function create () 
    {

    	$order = new Order();

    	$Orders= Order::all();
		$UltimoRegistro =	$Orders->last();
		$UltimoNumero = $UltimoRegistro->NumberOrder;

    	$order->idClient = 1;
    	if ($UltimoNumero) {
    	$order->NumberOrder = $UltimoNumero + 1;
    	} else {
    		$order->NumberOrder =  1;
    	}
    	$order->state = 1;
    	$order->save();

    	return view('order/index');
    }

    	
    	


}
