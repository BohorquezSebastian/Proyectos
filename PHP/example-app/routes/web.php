<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\InventarioFinalController;
use App\Http\Controllers\ReporteController;

Route::get('/', function () {
    return view('auth.login');
});
/*Route::get('/empleado', function () {
    return view('empleado.index');
});
 Route::get('empleado/create',[EmpleadoController::class,'create']);
*/
 Route::resource('empleado', EmpleadoController::class)->middleware('auth');
Auth::routes(['reset'=>false]);

Route::get('/home', [EmpleadoController::class, 'index'])->name('home');

Route::group(['middleware'=>'auth'],function(){
    Route::get('/home', [EmpleadoController::class, 'index'])->name('home');
});

Route::get('/indexU', [EmpleadoController::class, 'index'])->name('index');
// routes/web.php



Route::get('/reporte', [ReporteController::class, 'index']);
Route::get('/reporte/pdf', [ReporteController::class, 'exportPdf'])->name('reporte.pdf');
Route::get('/reporte/excel', [ReporteController::class, 'exportExcel'])->name('reporte.excel');



Route::get('/arepas', function () {
    return view('pages.arepas');
})->name('arepas');

Route::get('/bebidas', function () {
    return view('pages.bebidas');
})->name('bebidas');

Route::get('/caldos', function () {
    return view('pages.caldos');
})->name('caldos');

Route::get('/dulces', function () {
    return view('pages.dulces');
})->name('dulces');

Route::get('/combos', function () {
    return view('pages.combos');
})->name('combos');

Route::get('/quienessomos', function () {
    return view('pages.quienessomos');
})->name('quienessomos');

Route::get('/contactenos', function () {
    return view('pages.contactenos');
})->name('contactenos');

Route::get('/principal', function () {
    return view('pages.principal');
})->name('principal');



Route::resource('inventarios_final', InventarioFinalController::class);

