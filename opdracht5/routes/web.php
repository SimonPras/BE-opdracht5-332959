<?php

use App\Http\Controllers\MagazijnController;
use App\Http\Controllers\ProductPerLeverancierController;
use App\Models\ProductPerLeverancier;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [MagazijnController::class, 'index'])->name('Magazijn.index');

Route::get('/leverancier/{product_id?}', 'App\Http\Controllers\ProductPerLeverancierController@index');
Route::get('/allergeen/{product_id?}', 'App\Http\Controllers\ProductPerAllergeenController@index');
