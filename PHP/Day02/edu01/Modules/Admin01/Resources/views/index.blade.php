@extends('admin01::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>
        The view is loaded from module: {!! config('admin01.name') !!}
    </p>
@endsection
