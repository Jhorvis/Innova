<?php


 
use App\Exports\PersonrolesExport;
use Maatwebsite\Excel\Facades\Excel;

Route::get('/productos', function () {
    return view('productos/index');
});

Route::resource('products', 'ProductController');




Route::get('/reporte/Roles', function () {
 return Excel::download(new PersonrolesExport, 'roles.xls');
 
});
