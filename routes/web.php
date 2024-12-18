<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\cartController;
use App\Http\Controllers\frontController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\registrationController;
use App\Models\product;
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



Route::get('/front-end',[frontController::class,'index']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login_page', function () {
    return view('auth.login_page');
});

Route::post('/login_home',[AuthController::class,'login']);
Route::post('/register',[registrationController::class,'store']);
Route::get('/register_page',[registrationController::class,'index']);

Route::middleware('log_in')->group(function()
{
    Route::get('/dashboard', [homeController::class, 'index']);
    Route::get('/logout',[AuthController::class,'logout']);
    Route::get('/product_index',[adminController::class,'index']);
    Route::get('/add_product',[adminController::class,'create']);
    Route::post('/store_product',[adminController::class,'store']);

// product img routes 

Route::get('/add_product_img',[adminController::class,'add_img']);
Route::post('/store_product_img',[adminController::class,'store_img']);
// product img routes 
Route::get('/product_management',[adminController::class,'show']);
Route::get('/add_product_img',[adminController::class,'add_img']);
Route::get('/add_product_img',[adminController::class,'add_img']);
Route::get('/trash/{id}',[adminController::class,'destroy']);

Route::get('/trashed_data',[adminController::class,'trashed_data']);

Route::get('/restore/{id}',[adminController::class,'restore']);
Route::get('/Delete/{id}',[adminController::class,'delete']);
Route::get('/edit/{id}',[adminController::class,'edit']);

Route::post('/edit_product',[adminController::class,'update']);

Route::post('/add_to_cart',[cartController::class,'store']);
Route::get('/card_data',[cartController::class,'show']);

});
// add to cart
