<?php
?>
id&emsp;&emsp;name&emsp;&emsp;age&emsp;&emsp;email<hr>
@foreach ($data as $key => $value)
    {{$value->id}}&emsp;&emsp;{{$value->name}}&emsp;&emsp;{{$value->age}}&emsp;&emsp;{{$value->email}}<br>
@endforeach
<hr><br><br><br><hr>
今天星期
@if($day == '1')
一
@elseif($day == '2')
二
@elseif($day == '3')
三
@elseif($day == '4')
四
@elseif($day == '5')
五
@elseif($day == '6')
六
@elseif($day == '7')
天
@else
未知
@endif
（{{$day}}）