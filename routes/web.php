<?php


 
use App\Exports\PersonrolesExport;
use Maatwebsite\Excel\Facades\Excel;

Route::get('/', function () {
    return view('auth/login');
});


#/-----Rutas principales

Route::resource('products', 'ProductController');
Route::resource('order', 'OrderController');
Route::resource('ordersDetails', 'OrderdetailController');
Route::get('Clients', 'ClientController@index')->name('clients.index');
Route::post('Clients', 'ClientController@index')->name('clients.store');
Route::get('ordersDetails.delete/{id}', 'OrderdetailController@delete');

Route::get('products.code/{code}', 'ProductController@ShowProductByCode');
Route::get('products.id/{id}', 'ProductController@edit');
Route::post('products.id.update', 'ProductController@update');
Route::get('products.countcode', 'ProductController@countcode');

Route::post('sale.order', 'SaleorderController@store')->name('sale');
Route::post('cancel.order', 'SaleorderController@cancel')->name('cancel');
#-------------------/
Route::get('/database', function(){
	return env('DB_DATABASE');
});

#/-------Rutas para generacion de reportes
Route::get('pdf', 'PdfController@invoice');
Route::get('/reporte/Roles', function () {
 return Excel::download(new PersonrolesExport, 'roles.xls');
});
 
#-------------------/




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
