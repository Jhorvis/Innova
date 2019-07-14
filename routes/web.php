<?php


 
use App\Exports\PersonrolesExport;
use Maatwebsite\Excel\Facades\Excel;

Route::get('/', function () {
    return view('welcome');
});


#/-----Rutas principales

Route::resource('products', 'ProductController');
Route::resource('order', 'OrderController');
Route::resource('ordersDetails', 'OrdersDetail');

#-------------------/


#/-------Rutas para generacion de reportes

Route::get('/reporte/Roles', function () {
 return Excel::download(new PersonrolesExport, 'roles.xls');
});
 
#-------------------/



