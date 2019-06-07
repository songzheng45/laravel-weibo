@extends('layouts.default')
@section('title', '新用户注册')

@section('content')
<form action="{{ route('user.store') }}" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="inputName">用户名:</label>
        <input type="text" class="form-control" id="inputName" name="name" placeholder="用户名" value="{{ old('name') }}">
    </div>
    <div class="form-group">
        <label for="inputEmail">Email:</label>
        <input type="email" class="form-control" id="inputEmail" name="email" aria-describedby="emailHelp"
            placeholder="Enter email" value="{{ old('email') }}">
    </div>
    <div class="form-group">
        <label for="inputPwd">密码:</label>
        <input type="password" class="form-control" id="inputPwd" name="password" placeholder="密码"
            value="{{ old('password') }}" />
    </div>
    <div class="form-group">
        <label for="inputPwdConfirm">确认密码:</label>
        <input type="password" class="form-control" id="inputPwdConfirm" name="password_confirmation" placeholder="确认密码"
            value="{{ old('password_confirmation') }}">
    </div>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" name="remember_me" id="inputCheck">
        <label class="form-check-label" for="inputCheck">记住我</label>
    </div>
    <button type="submit" class="btn btn-primary">提交</button>
</form>
@stop