<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>表单提交</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link href="" rel="stylesheet">
</head>
<body>
    <!-- <form action="/home/test/test7" method=""> -->
    <form action="{{route('test7')}}" method="post">
        姓名：<input type="text" name="name" value="" placeholder="请输入姓名">
        {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"> --}}
        {{ csrf_field() }}
        <input type="submit" value="提交">
    </from>
    
</body>
</html>