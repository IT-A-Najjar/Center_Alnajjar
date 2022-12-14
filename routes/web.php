<?php

use \App\Http\Controllers\CenterController;
use \App\Http\Controllers\MasterController;

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
//Route::get('/',[\App\Http\Controllers\StaticController::class,'index']);
//Route::get('/men',[\App\Http\Controllers\StaticController::class,'men']);
//Route::get('/female',[\App\Http\Controllers\StaticController::class,'female']);


Route::resource('female',CenterController::class);

Route::resource('femalemaster',MasterController::class);


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
