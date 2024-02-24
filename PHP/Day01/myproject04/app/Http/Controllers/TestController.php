<?php

// 命名空间的三元素：常量，方法，类
namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use Illuminate\Support\Facades\Input;
use Input;

//引入 DB 门面
use DB;

//引入自定义模型
use App\Home\Member;

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
    
    public function test3(){
        // 展示视图
        // return view('home/test/test3');

        // 现在的时间
        $date = date('Y-m-d H:i:s', time());
        $day = '星期二';
        $time = strtotime('-1 year');
        // $time = strtotime('+1 month');
        // $time = strtotime('+1 week');
        // $time = strtotime('+1 day');

        // return view('home.test.test3', ['date'=>$date, 'day'=>$day]);
        // dd(compact('date', 'day'));
        return view('home.test.test3', compact('date', 'day', 'time'));
    }
    
    // 循环标签
    public function test4(){
        // 查询数据
        $data = DB::table('member')->get();
        // 获取今天的星期数字
        $day = date('N');
        // 展示视图，传递数据
        return view('home.test.test4', compact('data', 'day'));
    }
    
    // 模板的继承
    public function test5(){
        // 查询数据
        $data = DB::table('member')->get();
        // 获取今天的星期数字
        $day = date('N');

        return view('home.test.test5', compact('data', 'day'));
    }
    
    // 展示 基础的 表单
    public function test6(){
        // 
        return view('home.test.test6');
    }
    
    // 处理请求
    public function test7(){
        return '请求提交成功';
    }

    // 模型添加数据
    public function test8(Request $request){
        // 实例化 模型，将 表 和 属性 映射 起来
        $model = new Member();
        // dd($model);
        //方式一
        // // 给属性赋值，将字段 与 类的 属性 映射起来
        // $model -> name = '李逵';
        // $model -> age = '34';
        // $model -> email = 'likui@afs.com';
        // $res = $model -> save();
        
        //方式二
        $inputData = $request->all(); // 直接从 表单上 获取所有 输入信息，返回一个 数组
        // $inputData = array:4 [▼
        // "name" => "hblj001"
        // "age" => "56"
        // "email" => "oijlhljk@sss"
        // "_token" => "gjTZGrEbq8irCygGWaPLhT3TUD7DFSZUKbc5YJiK"
        // ]
        // dd($inputData);
        $res = $model->create($inputData);
        dd($res);
    }
    //模型查询数据
    public function test9(){
        // $data = Member::find(4);
        // dd($data->name);
        $data = Member::where('id', '>', 7)->first();
        dd($data->toArray());
    }
    public function test10(){
        // // ar模式的修改操作
        // $data = Member::find(6);
        // //赋值属性（需要修改的字段进行赋值）
        // $data->email = 'sssss@aaa';
        // $res = $data->save();
        // dd($res);

        //使用 DB里面的 update 方法进行更新
        $res = Member::where('id','6')->update([
            'name' => 'xixixi',
            'age'  => '33'
        ]);
        dd($res);
    }
    public function test11(){
        // // ar模式的修改操作
        // $data = Member::find(6);
        // dd($data->delete());
        
        //使用 DB里面的 delete 方法进行更新
        dd(Member::where('id', '>', 2)->where('id', '<', 5)->delete());
    }
    
    public function test12(){
        return view('home.test.test12');
    }
    
    //自动验证
    public function test13(Request $request){
        // 判断请求类型
        // echo Input::method();
        if (Input::method() == 'POST'){
            // 自动验证
            $this->validate($request,[
                // 具体的规则
                // 字段 => 验证规则1|验证规则2|验证规则3|...
                'name'      => 'required|min:2|max:20',
                'age'       => 'required|integer|min:1',
                'email'     => 'required|email',
                'captcha'   => 'required|captcha'
            ]);
            echo '输入的信息 没有问题';
        }else{
            // 展示视图
            return view('home.test.test13');
        }
    }

    //文件上传
    public function test14(Request $request){
        // 判断请求类型
        if (Input::method() === 'POST'){
            // 获取 传送过来的 文件信息 使用 $_FILES
            // dd($_FILES);
            
            // dd($request->file('avatar'));
            if ($request -> hasFile('avatar') && $request -> file('avatar') -> isValid() ) {
                // 获取 文件的 原始 名称
                // dd($request->file('avatar')->getClientOriginalName());
                // 获取文件的 大小 单位 Byte
                // dd($request->file('avatar')->getClientSize());
                $houZhui = $request->file('avatar')->getClientOriginalExtension();
                $filePath = md5(time() . rand(100000, 99999)) . '.' . $houZhui;
                $request->file('avatar')->move('./uploads',  $filePath);

                // 获取全部的数据
                $data = $request->all();
                // dd($data);
                // 此时 $data 里的 avatar 属性中的 值 是一个 Illuminate\Http\UploadedFile 对象
                $data['avatar'] = './uploads/' . $filePath;  // 这里 将  $data 里的 avatar 属性 的值 重新赋值 为 文件名 字符串
                // dd($data);
                $res = Member::create($data);
                // dd($res);
                if ($res == true) {
                    return redirect('/');
                }
            }
        }else{
            // 展示视图
            return view('home.test.test14');
        }
    }
    
    // 数据分页
    public function test15(Request $request) {
        // 查询所有数据
        // $data = Member::get();
        // 查询 分页数据
        $data = Member::paginate(2);
        // 展示视图 并传递数据
        return view('home.test.test15', compact('data'));
    }
    
    // ajax 页面展示
    public function test16(Request $request) {
        return view('home.test.test16');
    }
    // ajax 的响应
    public function test17(Request $request) {
        // 查询 数据
        $data = Member::all();
        // json格式 响应
        // return json_encode($data);
        // return response()->json($data);
        // return '{ "aa": "hello test17"}';
        // return "{ 'aa': 'hello test17'}";    // 不能响应
        // return true;                         // 不能响应
        // return 'hello test1111777';          // 不能响应
        // return ['hell'];
    }
}
