<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PenjualController;
use App\Http\Controllers\BasePenjualController;

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
    return view('frontview.index');
});

Route::get('/index', [HomeController::class, 'showindex']);
Route::get('/product', [HomeController::class, 'showproduct']);
Route::get('/product-detail', [HomeController::class, 'showproductdetail']);
Route::get('/home-02', [HomeController::class, 'showhome02']);
Route::get('/home-03', [HomeController::class, 'showhome03']);
Route::get('/shoping-cart', [HomeController::class, 'showshopingcart']);

Route::get('/supplier', [HomeController::class, 'showsupplier']);
Route::get('/colegan', [HomeController::class, 'showcolegan']);
Route::get('/dashboard', [HomeController::class, 'showdashboard']);
Route::get('/promo', [HomeController::class, 'showpromo']);
Route::get('/user', [HomeController::class, 'showuser']);
Route::get('/login2', [AuthController::class, 'showlogin2']);

Route::get('/product2', [HomeController::class, 'showproduct2']);
Route::get('/kategori', [HomeController::class, 'showkategori']);


Route::get('/login', [AuthController::class, 'showlogin'])->name('login');
Route::post('/login', [AuthController::class, 'loginProcess']);
Route::get('/register', [AuthController::class, 'showregister']);
Route::get('/login2', [AuthController::class, 'showlogin2']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/template', function () {
    return view('template.base');
});

// { ini data produk yaa.. }
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::put('/produk/filter', [ProdukController::class, 'filter']);
    Route::resource('/produk', ProdukController::class);
    Route::resource('/user', UserController::class);
    Route::resource('/client', ClientController::class);
    Route::resource('/penjual', PenjualController::class);
});

Route::resource('penjual', BasePenjualController::class);

Route::get('test-ajax', [HomeController, 'testAjax']);
