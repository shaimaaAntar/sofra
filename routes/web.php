<?php
use Illuminate\Support\Facades\Route;
use Illuminate\support\Facades\Auth;
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
Auth::routes();
Route::middleware(['auth'])->group(function(){

    Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/cart',[\App\Http\Controllers\CartController::class,'index'])->name('cart');
    Route::get('/cart/deleteItem/{id}',[\App\Http\Controllers\CartController::class,'destroy'])->name('deleteItem');
    Route::get('/cart/{id}{userId}',[\App\Http\Controllers\CartController::class,'store'])->name('addToCart');
    Route::get('/myAccount/{id}',[\App\Http\Controllers\HomeController::class,'account'])->name('myAccount');
    Route::post('/myaccount', [App\Http\Controllers\HomeController::class, 'updateAccount'])->name('updateProfile');

    Route::get('/restaurant/{id}', [App\Http\Controllers\RestaurantController::class, 'index'])->name('rest');

    Route::get('/meal/{id}',[\App\Http\Controllers\ProductController::class,'neew'])->name('productView');
   });

Route::get('/newOrder',[\App\Http\Controllers\OrderController::class,'store'])->name('newOrder');



// Restaurant(seller) routes

Route::get('/loginRestaurant',function (){return view('auth.loginRestaurant');});
Route::post('/loginRestaurant', [App\Http\Controllers\OrderController::class, 'RestaurantLogin'])->name('loginRestaurant');

Route::get('/homeRestaurant',[App\Http\Controllers\RestaurantController::class, 'myRestaurant'])->middleware('auth:restaurant');
Route::get('restaurant/{id}/newProduct', [App\Http\Controllers\ProductController::class, 'create'])->name('newProduct');
Route::post('/restaurant/newProduct/store', [App\Http\Controllers\ProductController::class, 'store'])->name('addProduct');
