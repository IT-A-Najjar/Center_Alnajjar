<?php

use App\Http\Controllers\MenController;
use App\Http\Controllers\CenterController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[\App\Http\Controllers\StaticController::class,'index']);
Route::get('/men',[\App\Http\Controllers\StaticController::class,'men']);
//Route::get('/female',[\App\Http\Controllers\StaticController::class,'female']);


Route::resource('female',CenterController::class);

Route::resource('men',MenController::class);


//Route::get('/store',function (){
//   $filter=request('style');
//   if(isset($filter)){
//       return 'this page is '.$filter;
//   }
//   return 'this page is all';
//});

//Route::get('/store/{men? }',function ($men=null){
//    if(isset($men)){
//        return view('men');
//    }
//        return view('welcome');
//});
//Route::get('/',[CenterController::class,'index']);
