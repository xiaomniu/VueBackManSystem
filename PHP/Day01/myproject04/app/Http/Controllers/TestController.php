<?php

// 命名空间的三元素：常量，方法，类
namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Input;
use Input;
//引入 DB 门面
use DB;

class TestController extends Controller {
    // 测试控制器 路由的 使用
    // phpinfo 信息：
    public function test1() {
        phpinfo();
    }
    
    // test2 测试Input获取数据
    public function test2() {
        // 测试输入的地址是： http://localhost/home/test/test2?id=235234&name=haha&age=34&gender=1

        // 获取一个值，可以加 缺省参数
        echo Input::get('id', '10086').'<br>';
        // 获取全部的值（数组的形式返回）
        $all = Input::all();
        var_dump($all);
        // dd($all); // dump + die
        // 获取指定 的信息（字符串形式）
        dd(Input::get('name'));
        // 获取指定的几个值（数组形式）
        dd(Input::only(['id', 'age']));
        // 获取 除了 指定值 之外的所有值（数组形式）
        dd(Input::except(['id', 'name']));
        // 判断 某个值  是否存在
        dd(Input::has('gender'));
    }

    public function add(){
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
    
    public function update(){
        // 指定需要操作的数据表实例
        $db = DB::table('member');
        // $rst = $db ->where('id', '>', '5') ->update([
        //     'name' => '王二小1',
        //     'email'=> 'erxiao@aa.com'
        // ]);
        // 把 id > 5 的对应的 年龄 加 10
        // $rst = $db -> where('id', '>', '5') -> increment('age', 10);
        // 把 id < 4 的对应的 年龄 减 5
        $rst = $db -> where('id', '<', '4') -> decrement('age', 5);
        dd($rst);
    }
    
    public function select(){
        // 指定需要操作的数据表实例
        $db = DB::table('member');

        $data = $db->get();
        // dd($data);
        foreach($data as $key => $value) {
            // $value 每个记录 是一个对象，不是数组
            // dd($key);
            // dd($value);
            // echo "id 是 {$value['id']}，名字是：{$value['name']}，邮箱是：{$value['email']}<br>";
            echo "index:$key    id 是 {$value->id}，名字是：{$value->name}，邮箱是：{$value->email}<br>";
        }

        // 查询 id < 3 的数据
        $data = $db -> where('id', '<', '3') -> get();
        dd($data);
    }

    
    public function del(){
        // 指定需要操作的数据表实例
        $db = DB::table('member');
        // $rst = $db->where('id', '>', '10')->delete();
        $rst = DB::table('member')->truncate();
        dd($rst);
    }
}
