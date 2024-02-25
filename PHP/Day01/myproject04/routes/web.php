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
    
    Route::get('/test3', 'TestController@test3');
});

Route::get('/home/test/test4', 'TestController@test4');
Route::get('/home/test/test5', 'TestController@test5');

// csrf 验证
Route::get('/home/test/test6', 'TestController@test6') -> name('test6');
Route::post('/home/test/test7', 'TestController@test7') -> name('test7');

// 模型的增删改查
Route::post('/home/test/test8', 'TestController@test8');
Route::get('/home/test/test9', 'TestController@test9');
Route::get('/home/test/test10', 'TestController@test10');
Route::get('/home/test/test11', 'TestController@test11');

Route::get('/home/test/test12', 'TestController@test12');

// 自动验证（二合一：即展示视图，又做数据处理，自己提交给自己
Route::any('/home/test/test13', 'TestController@test13');

// 文件上传
Route::any('/home/test/test14', 'TestController@test14');

// 数据分页（异步分页，即 Ajax 分页，可能 再次 发生请求，需要 使用  post）
Route::get('/home/test/test15', 'TestController@test15');

//响应方式
Route::get('/home/test/test16', 'TestController@test16');
Route::get('/home/test/test17', 'TestController@test17');

// 会话 控制
Route::get('/home/test/test18', 'TestController@test18');

// 缓存 操作
Route::get('/home/test/test19', 'TestController@test19');
