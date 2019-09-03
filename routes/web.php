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
Route::get('products.id/{id}', 'ProductController@edit');
Route::post('products.id.update', 'ProductController@update');
Route::get('products.countcode', 'ProductController@countcode');

Route::post('sale.order', 'SaleorderController@store')->name('sale');
Route::post('cancel.order', 'SaleorderController@cancel')->name('cancel');
#-------------------/


#/-------Rutas para generacion de reportes
Route::get('pdf', 'PdfController@invoice');
Route::get('/reporte/Roles', function () {
 return Excel::download(new PersonrolesExport, 'roles.xls');
});
 
#-------------------/



