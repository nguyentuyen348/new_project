<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
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
    return view('welcome');
});

Route::prefix('books')->group(function (){
    Route::get('/list',[BookController::class,'list'])->name('books.list');
    Route::get('/create',[BookController::class,'create'])->name('books.create');
    Route::post('/create',[BookController::class,'store']);

    Route::get('/edit/{id}',[BookController::class,'edit'])->name('books.edit');
    Route::post('/edit/{id}',[BookController::class,'update'])->name('books.update');

    Route::get('/destroy/{id}',[BookController::class,'destroy'])->name('books.destroy');
});
