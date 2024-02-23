<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    // 测试 Admin 分组的 Index方法
    public function index(){
        echo 'Admin 的 index()';
    }
}
