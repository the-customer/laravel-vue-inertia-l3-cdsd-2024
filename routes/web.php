<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\IndexController;
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
// Methode index du controleur IndexController

Route::get('/',[IndexController::class,'index'])->name('index');
Route::get('/show',[IndexController::class,'show'])->name('show');


Route::resource('articles',ArticleController::class);
