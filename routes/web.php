<?php


 
use App\Exports\PersonrolesExport;
use Maatwebsite\Excel\Facades\Excel;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/reporte/Roles', function () {
 return Excel::download(new PersonrolesExport, 'roles.xls');
});
