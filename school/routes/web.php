<?php

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


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/goods', function () {
    return view('goods');
})->name('goods');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/php', function () {
    return view('php');
})->name('php');

Route::get('/css', function () {
    return view('css');
})->name('css');

Route::get('/html', function () {
    return view('html');
})->name('html');

Route::get('/js', function () {
    return view('js');
})->name('js');

Route::get('/jquery', function () {
    return view('jquery');
})->name('jquery');

Route::get('/laravel', function () {
    return view('laravel');
})->name('laravel');