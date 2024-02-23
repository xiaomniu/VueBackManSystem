<link rel="stylesheet" type="text/css" href="/css/app.css"/>
<!-- <link rel="stylesheet" type="text/css" href="{{asset('css/def')}}/app.css"/> -->
<h1>AAAA</h1>
@extends('home.test.parent')

@section('mainbody')
<div>
    科阿斯兰的放假啦空手道解放考虑按实际开来
</div>
@endsection

<h1>BBBB</h1>
@include('home.test.test4')

<h1>CCCC</h1>
@include('home.test.parent')

<h1>DDDD</h1>