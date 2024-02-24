<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>文件上传</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link href="" rel="stylesheet">
</head>
<body>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/home/test/test14" method="post" enctype="multipart/form-data">
        <p>姓名：<input type="text" name="name" value=""></p>
        <p>年龄：<input type="text" name="age" value=""></p>
        <p>邮箱：<input type="email" name="email" value=""></p>
        <p>文件：<input type="file" name="avatar" value=""></p>
        {{ csrf_field() }}
        <input type="submit" value="提交">
    </from>
    
</body>
</html>