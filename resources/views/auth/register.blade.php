@extends("layouts.auth.layout")

@section("title","欢迎注册")

@section("pageCss")
    <link rel="stylesheet" type="text/css" href="../../../css/userOperateCss/baseRegister.css">
@endsection

@section("bodyContent")
<div class="backContainer containerCenter clearfix">
    <div class="infoContainer clearfix">
        <div class="registerForm ">
            <form class="form-horizontal" role="form">
                <div class="form-group">
                    <label for="userName" class="col-md-3 control-label">会员名:</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="userName"
                               placeholder="请输入用户名">
                    </div>
                </div>
                <div class="form-group">
                    <label for="phoneNum" class="col-md-3 control-label">手机号:</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="phoneNum"
                               placeholder="请输入手机号">
                    </div>
                </div>
                <div class="form-group">
                    <label for="phoneVerifyCode" class="col-md-3 control-label">短信验证码:</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control" id="phoneVerifyCode">
                    </div>
                    <div class="col-md-4">
                        <input type="button" class="btn btn-default" title="" value="获取短信验证码">
                    </div>
                </div>
                <div class="form-group">
                    <label for="pwd" class="col-md-3 control-label">密码:</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="pwd"
                               placeholder="请输入密码">
                    </div>
                </div>
                <div class="form-group">
                    <label for="pwdConfirm" class="col-md-3 control-label">确认密码:</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="pwdConfirm">
                    </div>
                </div>
                <div class="form-group">
                    <label for="realName" class="col-md-3 control-label">真实姓名:</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control" id="realName">
                    </div>
                    <div class="col-md-4">
                        <input type="radio" >&nbsp;先生&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" >&nbsp;女士&nbsp;&nbsp;&nbsp;&nbsp;
                    </div>
                </div>
                <div class="form-group">
                    <label for="verfyCode" class="col-md-3 control-label">验证码:</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control" id="verifyCode">
                    </div>
                    <div class="col-md-5">
                        <img style="width: 74px;height: 34px" src="#">
                        <a href="javascript:void(0);" class="changeCode">换一张</a>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-offset-3 col-md-8">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox">
                                我已阅读并接受<a href="#">《宁波石材网用户协议》</a>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-8">
                        <button type="submit" class="btn btn-primary btn-block">注册</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="registeHelper">
            <p>已是会员,<a href="logIn.html">直接登录</a></p>
            <p><span >使用合作网站账号登录</span></p>
            <ul class="thirdLogin clearfix">
                <li>
                    <img src="../../../images/qqLogin.png">

                </li>
                <li>
                    <img src="../../../images/weixin.png">
                </li>
            </ul>
            <p><span >成为会员即可享受更多服务</span></p>
            <ul class="memberServices">
                <li>
                    在线选购优质石材
                </li>
                <li>
                    免费发布求购信息
                </li>
            </ul>
            <p><span >有任何问题请咨询客服</span></p>
            <p>电话:0574-87654321&nbsp;&nbsp;&nbsp;&nbsp;<img src="../../../images/qqService.png" ></p>
        </div>
    </div>
</div>

@endsection


@section("pageScripts")
    <script type="text/javascript" src="../../../js/pages/auth.js"></script>
    <script type="text/javascript">


    </script>


@endsection