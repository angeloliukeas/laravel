<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
| ===== All the request types Route怎麼寫 =====
| Route::get($url, $callback);
| Route::post($url, $callback);
| Route::put($url, $callback);
| Route::patch($url, $callback);
| Route::delete($url, $callback);
| Route::options($url, $callback);
|
| example =
| Route::get('user/profile', 'UserController@showProfile');
| 這一串表示當接到 user/profile 這個網址要求， route 會去呼叫 UserController 裡面的 showProfile 這個function
|
| ===== Parameters post 傳遞參數 =====
| example 1 = 必需參數(Required Parameters)
| Route::get('post/{id}', 'PostController@show');
| 從Client傳來的{id}就會傳給PostController的Show()來中進行處理，最後回傳資源給Client
|
| example 2 = 可選參數(Optional Parameters)
| Route::get('users/{name?}', function ($name = 'Chase')
| {
|   return 'Hello, I am ' .$name;
| });| 
| {name?} 代表的就是可選擇的參數，相較於前一個參數傳遞，差別在 {id} 一定要有參數傳入，而 {name?}不用，可以自己設定沒有傳入參數時的預設值
|
| ===== Named Route 幫Route命名=====
| example 
| Route::get('post', 'PostController@index);   ==> Route::get('post', 'PostController@index')->name('post.index');
| Route::post('post', 'PostController@create); ==> Route::post('post', 'PostController@login')->name('post.login');
| 你可能會使用 url('/login') 來取得網址，但一個是get，一個是post有時可能會搞混。只需要使用 route('post.index') / route('post.login) 就可以取得它們的網址了！
| 
| ===== Route Group – Prefixes 前綴群組 =====
| example 
| Route::prefix('admin')->group(function ()
| {
|     Route::get('users', function ()
|     {
|         //所以網址要是/admin/users才會進來這裡
|     });
| });
|
| ===== Route Group – Middleware 驗證 =====
| example
| Route::middleware(['member'])->group(function () {
|    Route::get('member_center', function () {
|        // 經過member middleware驗證後才能進入
|    });
| });
| Middleware是一個過濾機制，讓Client在存取某些資源時必須先經過驗證，否則會被導向其他地方。
|
*/

Route::get('/', function () {  
    // 使用welcome.blade.php，它的名字就會是’welcome’，view裡面是路徑.檔名 或 路徑/檔案
    //return view('frontend.welcome', ['name' => 'Angelo']); 
    return view('frontend.index');
})->name('home');
// 也可寫成 Route::view('/', 'welcome');

Route::get('about', function () {
    return view('frontend.about');
})->name('about');

Route::get('products', function () {
    return view('frontend.products');
})->name('products');

Route::get('store', function () {
    return view('frontend.store');
})->name('store');