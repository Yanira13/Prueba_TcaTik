<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('producto');
});

// Route::get('/producto', function () {
//     return view('producto.producto');
// });

// Route::get('producto/create', [ProductosController::class,'create']);

//Pone automaticamente todas las rutas que esten dentro del controller
Route::resource('producto', ProductosController::class);
