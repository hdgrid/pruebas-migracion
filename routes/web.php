<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController; //se lo aniadimos para que la linea 25, etc funcione
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/greeting', function () {x
	return 'Hello World';
});	

//al usar arreglos es clase metodo
//Route::get('/product', [ProductController::class, 'index']); //clase/controlador productcontroller, metodo index.

//GET te lleva al index, POST te llevaria al create
//no solo es llamar al producto en la ruta, importa mucho el verbo por como lo llamas, POST, GET...
Route::resource('products', ProductController::class);

