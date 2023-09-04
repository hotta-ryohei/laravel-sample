<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestsController;

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

/*　//元のコード
Route::get('/', function () {
    return view('welcome');
});
*/

//メインページをテストページに設定
Route::get('/', function () {
    return view('test');
});
