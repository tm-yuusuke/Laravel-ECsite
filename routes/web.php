<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopController;
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

Route::get('/', [TopController::class, 'index'])->name('top');

Route::get('/index',[JoinController::class, 'login'])->name('join');
//Route::prefix('admin')->group(function () {
//Route::get('/users', function () {
// /admin/usersのURLに一致
   // });
//});
//Route::get('/top/index', function ()
//})->name('index');
//viewの()内はviewフォルダの下フォルダ名.ファイル名
//return view('top.index', ['shops'(連想配列キー) => $shop_list(値), 'products' => $product_list]);
