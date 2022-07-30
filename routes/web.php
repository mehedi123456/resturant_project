<?php

use App\Http\Controllers\FoodMenu;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

// Route::get('/', function () {
    
//     return view('welcome');
// });
//food start 


Route::get('/',[FoodMenu::class,'welcome']);
Route::get('/foodView',[HomeController::class,'foodView']);

Route::get('/home',[HomeController::class,'index']);
Route::get('/foodmenu',[FoodMenu::class,'foodmenu'])->name('foodmenu');
Route::get('/foodmenu/deletefood/{id}',[FoodMenu::class,'deletefood'])->name('deletefood');
Route::post('/addfood',[FoodMenu::class,'addfood'])->name('addfood');
// Route::post('/orderfood/{id}',[FoodMenu::class,'orderfood'])->name('orderfood');
Route::get('/order/{id}',[FoodMenu::class,'order'])->name('order');




//food end







Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

