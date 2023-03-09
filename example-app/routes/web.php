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
    //     return view('welcome');  // 原始檔名 welcome.blade.php
// });

//  分三個不同路徑導入到不同檔案頁面來呈現

Route::get('/', function () {
    return view('home');     // 導入頁面 到 home.blade.php
});


Route::get('/f1', function () {
    return view('f1');        // 變更後檔名 f1.blade.php
});


Route::get('/f2', function () {
    return view('f2');        // 變更後檔名 f2.blade.php
});

Route::get('/f3', function () {
    return view('f3');        // 變更後檔名 f3.blade.php
});

Route::get('/new_f4', function () {
    return view('f4');        // 變更後檔名 f4.blade.php
})->name('hello_f4');




