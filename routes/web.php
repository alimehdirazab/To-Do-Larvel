<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
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
//     return view('index');
// });

Route::get('/',[ItemController::class,'showItem']);
Route::get('/add',[ItemController::class,'addItem']);
Route::get('/delete/{sNo}',[ItemController::class,'deleteItem']);
Route::get('/edit/{sNo}',[ItemController::class,'editItem']);
Route::get('/update',[ItemController::class,'updateItem']);
//Route::post('/update/{sNo}', [ItemController::class, 'updateItem'])->name('items.update');


