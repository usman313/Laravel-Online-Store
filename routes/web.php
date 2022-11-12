<?php

//Authentication Controllers
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clientController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\testController;
//Admin Crud Controllers
use App\Http\Controllers\FabricTypeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

// Shopping Bag Controller
use App\Http\Controllers\BagController;

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
    return view('homePageBody');
});

//Clients Routes
Route::get('/',[clientController::class, 'homeBodyCategoriesViewFunction']);
Route::get('/logIn', [clientController::class,'signInPageViewFunction']);
Route::get('/register', [clientController::class, 'registerUserPageViewFunction']);
Route::post('/login/store', [clientController::class, 'authenticateUser'])->name('login.store');
Route::get('/checkout', [clientController::class, 'checkoutPageFunction']);
//Clientts Resource

/************************************************************************************************/

//Admins Routes
Route::get('/admin/dashboard', [adminController::class, 'dashboard']);

// Admin Resource Controllers Routes
Route::resource('fabrics', FabricTypeController::class);
Route::resource('products', ProductController::class);
Route::resource('categories', CategoryController::class);

//Authentication Routes
Route::resource('users', UserController::class);

// Payment Resource
Route::resource('bag', BagController::class);