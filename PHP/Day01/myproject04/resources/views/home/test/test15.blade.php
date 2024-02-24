<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>数据分页</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <style>
        table td,th {
            border: 1px solid #e5e5e5;
            padding: 8px;
        }
        .table{
            width: 100%;
            margin-left: 20%;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>名字</th>
                <th>年龄</th>
                <th>邮箱</th>
                <th>头像</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->age }}</td>
                    <td>{{ $item->email }}</td>
                    {{-- <td>{{ $item->avatar }}</td> --}}
                    <td><img src="{{ ltrim($item->avatar, '.') }}" width="80px" alt=""></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $data->links() }}
    
</body>
</html>