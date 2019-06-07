<div class="header clearfix">
    <nav>
        <div class="btn-group nav nav-pills float-right">
            <button type="button" class="btn">首页</button>
            @if(Auth::check())
            <div class="btn-group">
                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                    个人中心
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">编辑资料</a>
                    <a class="dropdown-item" href="#">退出</a>
                </div>
            </div>
            @else
            <button type="button" class="btn">登录</button>
            @endif
        </div>
    </nav>
    <h3 class="text-muted">微博</h3>
</div>