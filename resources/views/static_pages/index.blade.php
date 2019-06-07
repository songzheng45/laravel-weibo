@extends('layouts.default')
@section('title', '首页')

@section('content')
<div class="jumbotron">
    <h1 class="display-3">欢迎~</h1>
    <p class="lead">这是一个基于Laravel的程序.</p>
    <p><a class="btn btn-lg btn-success" href="{{ route('user.create') }}" role="button">注册</a></p>
</div>
@stop