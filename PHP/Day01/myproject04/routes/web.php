<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/{id}', function ($id) {
    return 'aaaaa  '.$id;
});

Route::get('/abc', function () {
    return 'yiyiyaya234';
});

Route::get('/abc/{id}', function ($id) {
    return 'yiyiyaya'.$id;
});

Route::get('/home/test/test1', 'TestController@test1');

Route::get('/home/index/index', 'Home\IndexController@index');

Route::get('/admin/index/index', 'Admin\IndexController@index');

Route::get('/home/test/test2', 'TestController@test2');

// Route::get('/home/test/add', 'TestController@test2');
// Route::get('/home/test/del', 'TestController@test2');
// Route::get('/home/test/update', 'TestController@test2');
// Route::get('/home/test/select', 'TestController@test2');

// DB门面的增删改查
Route::group(['prefix' => '/home/test'], function(){
    Route::get('/add', 'TestController@add');
    Route::get('/del', 'TestController@del');
    Route::get('/update', 'TestController@update');
    Route::get('/select', 'TestController@select');
});