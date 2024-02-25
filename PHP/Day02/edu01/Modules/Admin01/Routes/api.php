<?php

use Illuminate\Http\Request;
// use Modules\Admin01\Http\Controllers\Admin01Controller;
// use Modules\Admin01\Http\Controllers\TestYoyo;
// use Modules\Admin01\Http\Controllers\v1\IndexController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/**********************************************************************/
/**********************************************************************/
/***** 这里的所有路由请求地址 都要加上   http://localhost/api *************/
/***** 这里的所有路由请求地址 都要加上   http://localhost/api *************/
/***** 这里的所有路由请求地址 都要加上   http://localhost/api *************/
/***** 这里的所有路由请求地址 都要加上   http://localhost/api *************/
/***** 这里的所有路由请求地址 都要加上   http://localhost/api *************/
/***** 这里的所有路由请求地址 都要加上   http://localhost/api *************/
/***** 这里的所有路由请求地址 都要加上   http://localhost/api *************/
/***** 这里的所有路由请求地址 都要加上   http://localhost/api *************/
/***** 这里的所有路由请求地址 都要加上   http://localhost/api *************/
/**********************************************************************/
/**********************************************************************/

Route::middleware('auth:api')->get('/admin01', function (Request $request) {
    // echo $request->user();
    // return redirect('/');
    echo('\Modules\Admin01\Routes\api.php 钟爱金就将计就计');
    return $request->user();
});

// Route::middleware('AdminApiAuth')->get('/admin01', function (Request $request) {
//     // echo $request->user();
//     // return redirect('/');
//     // echo('钟爱金就将计就计');
//     return $request->user();
// });

Route::group(['prefix' => 'admin', 'middleware' => 'AdminApiAuth'], function(){
    // Route::group(['prefix' => 'admin'], function(){
    Route::get('/testapi', function(){
        return 'Admin01Controller_testApi';
    });
});
    
Route::get('/login', function(){
    return 'Admin01Controller_testApi';
})->name('login');

Route::get('/yoyo', 'TestYoyo@testApi');

Route::get('/xixi', 'v1\IndexController@testApi');

// http://localhost/api          
Route::get('/', 'Admin01Controller@testApi');

// // http://localhost/api/index        获取数据
Route::get('/index', 'Admin01Controller@index');

// // http://localhost/api/save         新增数据
Route::post('/save', 'Admin01Controller@save');

// // http://localhost/api/delete       删除数据
Route::delete('/delete', 'Admin01Controller@delete');

// // http://localhost/api/update       修改数据
Route::put('/update', 'Admin01Controller@update');

Route::group(['prefix' => 'v1/admin', 'middleware' => 'AdminApiAuth'], function(){
    // Route::group(['prefix' => 'admin'], function(){
    Route::get('/test/{idd?}', 'v1\IndexController@test');
});