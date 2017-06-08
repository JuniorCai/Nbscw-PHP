@extends("layouts.auth.layout")

@section("title","欢迎登录")

@section("bodyContent")
    <div class="loginImgContainer">
        <img src="../../../images/loginPic.png">
    </div>
    <div class="loginInfoContainer">
        <h4>用户登录</h4>
        <form role="form" id="loginForm" method="post" action="{{url('/login')}}">
            {{csrf_field()}}
            <div class="form-group">
                <label for="name">账号</label>
                <input id="name" type="text" name="mobile" class="form-control" placeholder="请输入手机号/会员名">
            </div>
            <div class="form-group">
                <label for="pwd">密码</label>
                <input id="pwd" type="password" name="password" class="form-control" placeholder="请输入密码">

            </div>

            <div class="form-group">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember"> 请记住我
                    </label>

                    <a href="chooseFindWay.html">忘记密码？</a>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-block btn-primary">登录</button>
            </div>
            <div class="form-group">
                <div class="checkbox">
                    <a href="register.html" style="color: #ff7800">立即注册</a>
                </div>
            </div>
        </form>
    </div>

@endsection


@section("pageScripts")
    <script type="text/javascript" src="../../../js/pages/auth.js"></script>
    <script type="text/javascript">


    </script>


@endsection