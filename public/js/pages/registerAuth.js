/**
 * Created by 钧球 on 2017-06-14.
 */
jQuery(document).ready(function() {
    $('#accountName').blur(function(obj){
        var result = true;

        var val = $.trim($(this).val());
        result = checkAccountLength(this,6,20);
        if(!result) {
            toggleError(this,result,"会员名格式不正确","authAccount");
            return result;
        }

        var params = {
            _token:$('input[name="_token"]').val(),
            accountName: val
        };
        result = checkExist(params,"/verify/checkAccountExist");

        toggleError(this,result,"会员名已存在","authAccount");
        return result;
    });

    $("#mobile").blur(function(obj){
        var result = true;
        var val = $.trim($(this).val());
        result = checkMobile(this);
        if(!result) {
            toggleError(this,result,"手机号码格式不正确","authMobile");
            $("#getMobileCode").attr("disabled",true);
            return ;
        }


        var params = {
            _token:$('input[name="_token"]').val(),
            mobile: val
        };
        result = checkExist(params,"/verify/checkMobileExist");

        if(!result)
        {
            $("#getMobileCode").attr("disabled",true);
        }
        else
        {
            $("#getMobileCode").removeAttr("disabled");
        }
        toggleError(this,result,"该手机号已注册","authMobile");
    });

    $("#password").blur(function(){
        var result = true;
        var val = $.trim($(this).val());
        result = checkPassword(this);

        toggleError(this,result,"请输入以英文字母开头，6-20个英文与字母组合的密码","authPassword");
    });

    $("#pwdConfirm").blur(function(){
        var result = true;
        var pwd = $.trim($("#password").val());
        var cpwd = $.trim($("#pwdConfirm").val());
        if(!$("#password").closest('.form-group').hasClass('has-error')&&pwd.length>0&&cpwd.length>0)
        {
            result = cpwd==pwd;
        }
        toggleError(this,result,"两次输入密码不一致","authCPassword")
    });

    $("#userName").blur(function(){
        var result = true;

        result = checkName(this);

        toggleError(this,result,"不正确的中文姓名格式","authName");
    });

    $("#mobileCode").blur(function(){
       var v = $(this).val();
       toggleError(this,v.length!=0,"请输入短信验证码")
    });

    $("input:radio[name='gender']").blur(function(){
        toggleError(this,$("input:radio[name='gender']").is(":checked"),"请选择性别")
    });

    $("#registerUser").click(function(){
        var authAccount = $("#authAccount").val();
        var authMobile = $("#authMobile").val();
        var authPwd = $("#authPassword").val();
        var authCPwd = $("#authCPassword").val();
        var authName = $("#authName").val();
        var authCode = $("#authCode").val();
        var mobileCode = $("#mobileCode").val();
        var genderChoice = $("input:radio[name='gender']:checked").val();
        if(authAccount==0) {toggleError($("#authAccount")[0],false,"会员名格式不正确","authAccount"); return false;}
        if(authMobile==0) {toggleError($("#authMobile")[0],false,"手机号码格式不正确","authMobile");return false;}
        if(authPwd==0) {toggleError($("#authPassword")[0],false,"请输入以英文字母开头，6-20个英文与字母组合的密码","authPassword");return false;}
        if(authCPwd==0) {toggleError($("#authCPassword")[0],false,"两次输入密码不一致","authCPassword");return false;}
        if(authName==0) {toggleError($("#authName")[0],false,"不正确的中文姓名格式","authName");return false;}
        if(authCode==0) {toggleError($("#authCode")[0],false,"验证码不正确","authCode");return false;}
        if(mobileCode.length==0) {toggleError($("#mobileCode")[0],false,"请输入短信验证码");return false;}
        if(genderChoice==undefined) {toggleError($("input:radio[name='gender']")[0],false,"请选择性别");return false;}
        if(!$("#tnc").is(":checked")){toggleError($("#tnc")[0],false,"请勾选用户协议");return false;}

        // var params = {
        //     _token:$('input[name="_token"]').val(),
        //     accountName: $("#accountName").val(),
        //     mobile: $("#mobile").val(),
        //     mobileCode: $("#mobileCode").val(),
        //     password: $("#password").val(),
        //     userName: $("#userName").val(),
        //     gender: $("#gender").val()
        // };
        $("#registerForm").submit();

    });

});

function checkName(obj)
{
    var val = $.trim($(obj).val());
    var nameTest = /^[\u4e00-\u9fa5]{2,4}$/;
    return nameTest.test(val);
}

function checkPassword(obj)
{
    var result = true;
    var val = $.trim($(obj).val());
    var length = val.length;
    var pwdTest = /^[a-zA-Z](?![a-zA-Z]+$)[a-zA-Z0-9]{5,19}$/;
    if(!pwdTest.test(val))
    {
        result = false;

    }
    return result;
}

function checkMobile(obj)
{
    var result = true;
    var val = $.trim($(obj).val());
    var length = val.length;
    var mobile = /^(((13[0-9]{1})|(15[0-9]{1}))+\d{8})$/;
    if(!(length == 11 && mobile.test(val)))
    {
        result = false;
    }
    return result;
}

function checkAccountLength(obj,rangeMin,rangeMax)
{
    var val = $.trim($(obj).val());
    var result = true;
    if(val.length<rangeMin||val.length>rangeMax)
    {
        result = false;
    }
    return result;
}

function checkExist(params,url)
{
    var result = true;
    // 设置同步
    $.ajaxSetup({
        async: false
    });
    $.post(url, params, function(data){
        result = data=="true";
    });
    // 恢复异步
    $.ajaxSetup({
        async: true
    });
    return result;
}

function toggleError(obj,authStatus,msg,authObj)
{
    if(authStatus){
        if(authObj!="")
            $("#"+authObj).val(1);

        if($(obj).closest('.form-group').hasClass('has-error'))
        {
            $(obj).closest('.form-group').removeClass('has-error');
            $(obj).closest('.form-group').find(".help-block").remove();
        }
    }
    else {
        if(authObj!="")
            $("#"+authObj).val(0);

        if($(obj).closest('.form-group').hasClass('has-error'))
        {
            $(obj).closest('.form-group').find(".help-block").text(msg);
        }
        else
        {
            $(obj).closest('.form-group').addClass('has-error');
            var error = $("<span>");
            error.attr("id","verifyCode-error");
            error.attr("class","help-block");
            error.text(msg);
            error.appendTo($(obj).parent());
        }
    }
}