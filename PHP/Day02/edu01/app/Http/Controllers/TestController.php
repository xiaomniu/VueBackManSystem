<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
// use Input;

class TestController extends Controller
{
    // 测试 mysql 数据库
    public function add(Request $req, $id='defot'){
        echo $id .'<hr>';
        
        $ccc = $req->input()->all();
        var_dump($ccc);

        echo '<hr>';
        $all = $req->all();
        var_dump($all);
        // 指定需要操作的数据表实例
        $db = DB::table('member');
        // 增加多条数据（如果单个则参数 是一维数组，多个则是 多维数组）
        $rst1 = $db->insert([
            [   'name'  => '张三',
                'age'   => '23',
                'email' => 'zhangsan@itcast.cn'
            ],
            [
                'name'  => '李四',
                'age'   => '24',
                'email' => 'lisi@itcast.cn'
            ],
            [
                'name'  => '王五',
                'age'   => '25',
                'email' => 'wangwu@itcast.cn'
            ]
        ]);
        dd($rst1);

        // 增加 一条数据
        // $rst1 = $db->insertGetId([
        //     'name'  => '王五', 'age'   => '25', 'email' => 'wangwu@itcast.cn'
        // ]);
        // dd($rst1);
    }
}
