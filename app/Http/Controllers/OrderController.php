<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Client;

class OrderController extends Controller
{
 	public function index () {

 		$clients = Client::all();

 		dd($clients);

 		return view('order/create', compact('clients'));

 	}

 	public function create () {

 		

 	}

 	function edit () {

 	}

 	function update () {

 	}

 	function store () {

 	}
}

    	
    	


}
