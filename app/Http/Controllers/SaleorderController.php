<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \Illuminate\Support\Facades\DB;

use App\Order;

use App\Saleorder;

class SaleorderController extends Controller
{
    public function store (Request $request)
    {
    	$idOrder = $request->idOrder;

    	$totalNeto = DB::table('orderdetails')->where('idOrder', $idOrder)->sum('neto');
        $totalPrice = DB::table('orderdetails')->where('idOrder', $idOrder)->sum('price');

        $saleOrder = new Saleorder();
        $saleOrder->idOrder = $idOrder;
        $saleOrder->totalneto = $totalNeto;
        $saleOrder->totalprice = $totalPrice;
        $saleOrder->save();

        $updateOrder = Order::find($idOrder);
        $updateOrder->state = 1;
        $updateOrder->update();

        return view('welcome');

    }

    public function cancel (Request $request)
    {
    	$idOrder = $request->idOrder;

    	$updateOrder = Order::find($idOrder);
        $updateOrder->state = 2;
        $updateOrder->update();
        
         return view('welcome');

    } 
}
