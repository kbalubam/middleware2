<?php

use App\Http\Controllers\AcceuilController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BoController;
use Illuminate\Support\Facades\Route;

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

Route::resource('/article',ArticleController::class)->middleware(['auth',"admin"],['auth',"user"]);
Route::resource('/bo',BoController::class)->middleware(['auth',"admin"]);
Route::resource('/accueil', AcceuilController::class)->middleware(['auth',"admin"],['auth',"user"]);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
