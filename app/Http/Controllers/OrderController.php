<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Client;

use App\Order;

use \Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
 	public function index () {

 		$clients = Client::all();

 		return view('order/create', compact('clients'));

 	}

 	public function create () {

 		

 	}

 	function edit () {

 	}

 	function update () {

 	}

 	public function store (Request $request)
 	 {
 		$idCliente = $request->cliente;
 		$Order = new Order();
 		$Order->idClient = $idCliente;
 		$Order->NumberOrder = 1;
 		$Order->state=0;
 		$Order->save();

 		$getId = DB::table('orders')->where('idClient', $idCliente)->where('state', 0)->select('id')->take(1)->orderBy('id', 'desc')->get();
 		 foreach ($getId as $getId);
 		 $idOrder = $getId->id;
 		 

 		return view('order/index', compact('idOrder'));
 	}
}

    	
    	


