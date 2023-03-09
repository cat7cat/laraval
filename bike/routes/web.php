<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BikeController;
use App\Http\Controllers\CarController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::resource('bikes', BikeController::class);
// 自訂義
Route::get('/hello', [BikeController::class, 'sayHello'])->name('sayHello');



// 編寫控制器類和方法後，您可以像這樣定義到控制器方法的路由：


//Controller
//  Route::get('/cars', [CarController::class, 'index']);


//resource
// Route::resource('photo', PhotoController::class);
Route::resource('cars', CarController::class);
// 自訂義
Route::get('/sayhello', [CarController::class, 'sayHello'])->name('cars.sayHello');
