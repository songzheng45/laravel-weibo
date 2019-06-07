@extends('layouts.default')
@section('title', '首页')

@section('content')
<div class="jumbotron">
    <h1>快来写下你的第一篇微博吧~</h1>
    <p class="lead">This example is a quick exercise to illustrate how the top-aligned navbar works. As you
        scroll, this navbar remains in its original position and moves with the rest of the page.</p>
    <a class="btn btn-lg btn-primary" href="{{ route('user.create') }}" role="button">注册</a>
</div>
@stop