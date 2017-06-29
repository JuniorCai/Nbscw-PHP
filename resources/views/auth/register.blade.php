@extends("layouts.auth.layout")

@section("title","欢迎注册")

@section("pageCss")
    <link rel="stylesheet" type="text/css" href="../../../css/userOperateCss/baseRegister.css">
@endsection

@section("bodyContent")
<div class="backContainer containerCenter clearfix">
    <div class="infoContainer clearfix">
        <div class="registerForm ">
            <form class="form-horizontal" id="registerForm" method="post" action="{{url('/register')}}" role="form">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="accountName" class="col-md-2 control-label">会员名:</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="accountName" name="accountName"
                               placeholder="请输入用户名" value="{{old('accountName')}}">
                        <input type="hidden" id="authAccount" value="{{old('accountName')==""?0:1}}">
                    </div>
                    <div class="col-md-4 inputTip"><span style="color: red;">*</span>以英文字母开头,6-20个字符的会员名,不支持特殊字符</div>
                </div>
                <div class="form-group">
                    <label for="mobile" class="col-md-2 control-label">手机号:</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="mobile" name="mobile" maxlength="11"
                               placeholder="请输入手机号" value="{{old('mobile')}}">
                        <input type="hidden" id="authMobile" value="{{old('accountName')==""?0:1}}">
                    </div>
                    <div class="col-md-4 inputTip"><span style="color: red;">*</span>请输入正确手机号码</div>

                </div>
                <div class="form-group">
                    <label for="mobileCode" class="col-md-2 control-label">短信验证码:</label>
                    <div class="col-md-3">
                        <input type="text" class="form-control" id="mobileCode" name="mobileCode">
                    </div>
                    <div class="col-md-3">
                        <input type="button" class="btn btn-default" id="getMobileCode" title="" onclick="sendCode(this)" value="获取短信验证码">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-md-2 control-label">密码:</label>
                    <div class="col-md-6">
                        <input type="password" class="form-control" id="password" name="password"
                               placeholder="请输入密码">
                        <input type="hidden" id="authPassword" value="0">
                    </div>
                    <div class="col-md-4 inputTip"><span style="color: red;">*</span>6-20个字符，数字及字母组合，区分大小写，不支持特殊符号</div>
                </div>
                <div class="form-group">
                    <label for="pwdConfirm" class="col-md-2 control-label">确认密码:</label>
                    <div class="col-md-6">
                        <input type="password" class="form-control" id="pwdConfirm" name="pwdConfirm">
                        <input type="hidden" id="authCPassword" value="0">
                    </div>
                    <div class="col-md-4 inputTip"><span style="color: red;">*</span>请再输入一遍上面填写的密码</div>
                </div>
                <div class="form-group">
                    <label for="userName" class="col-md-2 control-label">真实姓名:</label>
                    <div class="col-md-3">
                        <input type="text" class="form-control" id="userName" name="userName" value="{{old('userName')}}">
                        <input type="hidden" id="authName" value="{{old('accountName')==""?0:1}}">
                    </div>
                    <div class="col-md-3">
                        <input type="radio" value="1" id="male" name="gender" {{old('gender')=="1"?"checked":""}}><label for="male" class="control-label">&nbsp;先生&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type="radio"value="0" id="female" name="gender" {{old('gender')=="0"?"checked":""}}><label for="female" class="control-label">&nbsp;女士&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    </div>
                    <div class="col-md-4 inputTip"><span style="color: red;">*</span>请与有效身份证件上的姓名保持一致</div>
                </div>
                <div class="form-group">
                    <label for="verifyCode" class="col-md-2 control-label">验证码:</label>
                    <div class="col-md-3">
                        <input type="text" class="form-control" name="verifyCode" id="verifyCode" onblur="checkCode(this)">
                        <input type="hidden" id="authCode" value="0">
                    </div>
                    <div class="col-md-3">
                        <a href="javascript:void(0);" class="changeCode"><img id="imageCode" style="width: 120px;height: 34px" src="{{url('/getCaptcha/1')}}"></a>
                    </div>
                    <div class="col-md-4 inputTip"><span style="color: red;">*</span>请把图中字符填写到输入框中
                        ，点击图片刷新</div>
                </div>

                <div class="form-group">
                    <div class="col-md-offset-3 col-md-8">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="tnc" id="tnc">
                                我已阅读并接受<a href="#">《宁波石材网用户协议》</a>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-8">
                        <button type="submit" id="registerUser" class="btn btn-primary btn-block">注册</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="registeHelper">
            <p>已是会员,<a href="{{url('/login')}}">直接登录</a></p>
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
    <script type="text/javascript" src="../../../js/pages/registerAuth.js"></script>
    <script type="text/javascript">
        var countDown = 60;
        var error = "";
        error = "{{$errors->first('mobileCodeError')}}";
        $(function(){
            $('.changeCode').click(function(){
                var url = "{{url('/getCaptcha/')}}"+"/";
                url+=Math.random();
                $("#imageCode").attr("src",url);
            })

            if($.trim(error).length>0)
            {
                layer.msg(error,{time:1000,offset:'150px'});
            }


        });

        function sendCode(val)
        {
            if($.trim($("#mobile").val())!="")
            {
                $.ajax({
                    url : "{{url('/sendCode')}}",
                    type : "post",
                    dataType : "json",
                    data: {
                        _token:$('input[name="_token"]').val(),
                        mobile:$.trim($('#mobile').val())
                    },
                    success : function(msg) {
                        //要执行的代码
                        if(msg.status==1){
                            layer.msg('发送成功，请注意查看',{time:1000,offset:'150px'});
                        }
                        else {
                            layer.msg('发送失败',{time:1000,offset:'150px'});
                        }
                    }
                });
                settime(val);
            }
            else
            {
                layer.msg("请填写手机号码",{time:1000,offset:'150px'})
            }
        }

        function settime(val) {
            if (countDown == 0) {
                val.removeAttribute("disabled");
                val.value = "获取短信验证码";
                countDown = 60;
            } else {
                val.setAttribute("disabled", true);
                val.value = "重新发送(" + countDown + ")";
                countDown--;
                setTimeout(function () {
                    settime(val)
                }, 1000)
            }
        }


        function checkCode(obj)
        {
            if($(obj).val()=="")
                return ;
            $.ajax({
                url : "/verify/checkCaptcha",
                type : "post",
                dataType : "json",
                data: {
                    _token:$('input[name="_token"]').val(),
                    code:$.trim($(obj).val())
                },
                success : function(msg) {
                    //要执行的代码
                    if(msg==true){
                        $(obj).closest('.form-group').removeClass('has-error');
                        $("#verifyCode-error").remove();
                        $("#authCode").val(1);
                    }
                    else {
                        $("#authCode").val(0);

                        if($(obj).closest('.form-group').hasClass('has-error'))
                        {
                            $(obj).closest('.form-group').find(".help-block").text("验证码不正确！");
                        }
                        else
                        {
                            $(obj).closest('.form-group').addClass('has-error');
                            var error = $("<span>");
                            error.attr("id","verifyCode-error");
                            error.attr("class","help-block");
                            error.text("验证码不正确！");
                            error.appendTo($(obj).parent());
                        }
                        var url = "/getCaptcha/";
                        url+=Math.random();
                        $("#imageCode").attr("src",url);

                    }
                }
            });
        }


    </script>


@endsection