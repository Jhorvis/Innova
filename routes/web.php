<?php


 
use App\Exports\PersonrolesExport;
use Maatwebsite\Excel\Facades\Excel;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('products', 'ProductController');

Route::resource('orders', 'OrderController');

Route::get('products.code/{code}', 'ProductController@ShowProductByCode');


Route::get('/reporte/Roles', function () {
 return Excel::download(new PersonrolesExport, 'roles.xls');
 
});

