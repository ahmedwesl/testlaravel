<?php

use App\Http\Controllers\BynameController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NamePriceController;
use App\Http\Controllers\ProductController;
//use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ByPriceController;
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

//Route::get('/connection', function (){
//    try {
//        DB::connection()->getPdo();
//        return 'connection successful';
//    } catch (\Exception $e) {
//        die("Could not connect to the database.  Please check your configuration. error:" . $e );
//    }
//});

Route::get('/', [HomeController::class, 'homepage']);


Route::get('/product', [ProductController::class, 'listeproduits']);


Route::get('/product/{id}', [ProductController::class, 'ficheproduit']);


Route::get('/cart', [CartController::class, 'monpannier']);

Route::get('/cart', [CartController::class, 'monpannier']);

Route::get('/byname',[BynameController::class,'byname']);

Route::get('/price',[ByPriceController::class,'byprice']);

Route::get('/nameprice/{id}',[NamePriceController::class,'bynameprice']);
