<?php


 
use App\Exports\PersonrolesExport;
use Maatwebsite\Excel\Facades\Excel;

Route::get('/', function () {
    return view('welcome');
});


#/-----Rutas principaleShowProductByCodes

Route::resource('products', 'ProductController');
Route::resource('order', 'OrderController');
Route::resource('ordersDetails', 'OrderdetailController');

Route::get('products.code/{code}', 'ProductController@ShowProductByCode');

Route::post('sale.order', 'SaleorderController@store')->name('sale');
Route::post('cancel.order', 'SaleorderController@cancel')->name('cancel');
#-------------------/


#/-------Rutas para generacion de reportes

Route::get('/reporte/Roles', function () {
 return Excel::download(new PersonrolesExport, 'roles.xls');
});
 
#-------------------/



