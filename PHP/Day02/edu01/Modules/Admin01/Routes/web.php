<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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

/**********************************************************************/
/**********************************************************************/
/***** 这里是 原 项目 edu01 中 \edu01\routes\web.php 的内容 *************/
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home/test/add/{id?}', [TestController::class, 'add']);
/***** 这里是 原 项目 edu01 中 \edu01\routes\web.php 的内容 *************/
/**********************************************************************/
/**********************************************************************/



Route::prefix('admin01')->group(function() {
    Route::get('/', 'Admin01Controller@index');
    Route::get('/api', 'Admin01Controller@admin01Api');
    Route::get('/test02/add/{id?}', [TestController::class, 'add']);
});

// Route::get('/admin01/test/add/{id?}', 'TestController@add');
Route::get('/admin01/test/add/{id?}', [TestController::class, 'add']);
