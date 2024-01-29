<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestsController;
use App\Models\Post;

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
/*Route::get('/', function () {
    return view('welcome');
});*/

//Route::resource('posts', 'PostController');

//Route::get('/posts', 'PostController@index');

//Route::resource('posts', PostController::class, 'index');
Route::get('/posts', 'App\Http\Controllers\PostController@index');
Route::get('/comment', 'App\Http\Controllers\CommentController@index');
Route::get('/', function () {
    $users = ['hotta1', 'hotta2', 'hotta3']; // ここにユーザーを追加
    return view('test', ['title' => 'Hello', 'users' => $users]);
});
Route::get('/user', function () {
    $posts = Post::all();
    $userNames = $posts->pluck('name')->toArray();
    return view('test', ['title' => 'Hello', 'users' => $userNames]);
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
