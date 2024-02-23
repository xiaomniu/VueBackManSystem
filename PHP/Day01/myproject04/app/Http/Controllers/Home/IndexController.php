<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    // 测试 Home分组的 Index方法
    public function index(){
        echo 'home 的 index()';
    }
}
