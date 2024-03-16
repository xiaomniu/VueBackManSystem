<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\ComplexTableController;
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

Route::get('/test-vuex', function () {
    return view('test.testvuex');
});

Route::post('/test-update-user', [UserController::class, 'updateUser']);

Route::get("/test-get-data", function () {
    $data = [
        'name' => 'test data name xixix',
        'age' => 12345,
    ];
    $keyword = 'test get data keyword';
    return view('test.testgetdata', compact(
        'data', 'keyword'
    ));
});

//修改web.php，增加一行：
Route::get('/complex-table',[ComplexTableController::class, 'index']);