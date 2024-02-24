<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>数据分页</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
<body>
    <input type="button" class="btn btn-danger" value="点我" id="btn">
</body>
    <script type="text/javascript">
        // jQuery 的 页面 载入 事件
        $(function(){
            // 给按钮 绑定 点击事件
            $('#btn').click(function(){
                //发送 ajax 请求
                $.get('/home/test/test17', function(data){
                    console.log('hwllo');
                }, 'json');
            });
        });
    </script>
</html>