/**
 * Created by 钧球 on 2017-06-05.
 */
var Auth = function() {

    var handleLogin = function() {

        $('#loginForm').validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-block', // default input error message class
            focusInvalid: true, // do not focus the last invalid input
            rules: {
                mobile: {
                    required: true
                },
                password: {
                    required: true
                },
                remember: {
                    required: false
                }
            },

            messages: {
                mobile: {
                    required: "请输入账号"
                },
                password: {
                    required: "请输入密码"
                }
            },

            // invalidHandler: function(event, validator) { //display error alert on form submit
            //     $('.alert-danger', $('.login-form')).hide();
            // },

            highlight: function(element) { // hightlight error inputs
                $(element)
                    .closest('.form-group').addClass('has-error'); // set error class to the control group
            },

            success: function(label) {
                //$('.alert-danger', $('.login-form')).hide();
                label.closest('.form-group').removeClass('has-error');
                label.remove();
            },

            // errorPlacement: function(error, element) {
            //     error.insertAfter(element.closest('.input-icon'));
            // },

            submitHandler: function(form) {
                form.submit(); // form validation success, call ajax form submit
            }
        });

        $('#loginForm input').keypress(function(e) {
            if (e.which == 13) {
                if ($('#loginForm').validate().form()) {
                    $('#loginForm').submit(); //form validation success, call ajax form submit
                }
                return false;
            }
        });
    }


    var handleRegister = function() {

        $('#registerForm1').validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-block', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            ignore: "",
            rules: {
                accountName: {
                    required: true,
                    minlength:6//,
                    //checkAccount:true
                },
                mobile: {
                    required: true
                },
                mobileCode: {
                    required: true
                },
                password: {
                    required: true,
                    rangelength:[6,12]
                },
                userName: {
                    required: true
                },
                gender: {
                    required: true
                },
                pwdConfirm: {
                    equalTo: "#password"
                },
                verifyCode: {
                    required: true
                },

                tnc: {
                    required: true
                }
            },

            messages: { // custom messages for radio buttons and checkboxes
                accountName: {
                    required: "请输入会员名。"//.,
                    //checkAccount:"会员名已存在"
                },
                mobile: {
                    required: "请输入手机号。"
                },
                mobileCode: {
                    required: "请输入短信验证码。"
                },
                password: {
                    required: "请输入密码。",
                    rangelength:"请输入6-12位的密码"
                },
                userName: {
                    required: "请填写姓名。"
                },
                gender: {
                    required: "请选择性别。"
                },
                verifyCode: {
                    required: "请输入验证码。"
                },
                pwdConfirm:{
                    equalTo:"请填写与密码一致的字符串"
                }
            },
            onfocusout:function(ele){
              $(ele).valid();
            },

            invalidHandler: function(event, validator) { //display error alert on form submit
            },

            highlight: function(element) { // hightlight error inputs
                $(element)
                    .closest('.form-group').addClass('has-error'); // set error class to the control group
            },

            success: function(label) {
                label.closest('.form-group').removeClass('has-error');
                label.remove();
            },

            // errorPlacement: function(error, element) {
            //     if (element.attr("name") == "tnc") { // insert checkbox errors after the container
            //         error.insertAfter($('#register_tnc_error'));
            //     } else if (element.closest('.input-icon').size() === 1) {
            //         error.insertAfter(element.closest('.input-icon'));
            //     } else {
            //         error.insertAfter(element);
            //     }
            // },

            submitHandler: function(form) {
                var result = true;
                //check AccountName Exist
                // 设置同步
                $.ajaxSetup({
                    async: false
                });
                var param = {
                    _token:$('input[name="_token"]').val(),
                    accountName: $('input[name="accountName"]').val()
                };
                $.post("/verify/checkAccountExist", param, function(data){
                    result = data;
                    showError($('input[name="accountName"]')[0],data,"会员名已存在");
                });
                // 恢复异步
                $.ajaxSetup({
                    async: true
                });

                if(result)
                    form[0].submit();
            }
        });

        $('#registerForm input').keypress(function(e) {
            if (e.which == 13) {
                if ($('#registerForm').validate().form()) {
                    $('#registerForm').submit();
                }
                return false;
            }
        });

        // jQuery('#register-btn').click(function() {
        //     jQuery('.login-form').hide();
        //     jQuery('.register-form').show();
        // });
        //
        // jQuery('#register-back-btn').click(function() {
        //     jQuery('.login-form').show();
        //     jQuery('.register-form').hide();
        // });
    }

    var showError = function(obj,result,message){
        if(result){
            $(obj).closest('.form-group').removeClass('has-error');
            $("#verifyCode-error").remove();
        }
        else {
            $(obj).closest('.form-group').addClass('has-error');
            var error = $("<span>");
            error.attr("id","verifyCode-error");
            error.attr("class","help-block");
            error.text(message);
            error.insertAfter($(obj));

        }
    }

    var handleForgetPassword = function() {
        $('.forget-form').validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-block', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            ignore: "",
            rules: {
                email: {
                    required: true,
                    email: true
                }
            },

            messages: {
                email: {
                    required: "Email is required."
                }
            },

            invalidHandler: function(event, validator) { //display error alert on form submit

            },

            highlight: function(element) { // hightlight error inputs
                $(element)
                    .closest('.form-group').addClass('has-error'); // set error class to the control group
            },

            success: function(label) {
                label.closest('.form-group').removeClass('has-error');
                label.remove();
            },

            // errorPlacement: function(error, element) {
            //     error.insertAfter(element.closest('.input-icon'));
            // },

            submitHandler: function(form) {
                form.submit();
            }
        });

        $('.forget-form input').keypress(function(e) {
            if (e.which == 13) {
                if ($('.forget-form').validate().form()) {
                    $('.forget-form').submit();
                }
                return false;
            }
        });

        jQuery('#forget-password').click(function() {
            jQuery('.login-form').hide();
            jQuery('.forget-form').show();
        });

        jQuery('#back-btn').click(function() {
            jQuery('.login-form').show();
            jQuery('.forget-form').hide();
        });

    }


    return {
        //main function to initiate the module
        init: function() {

            handleLogin();
            handleForgetPassword();
            handleRegister();

        }

    };

}();

jQuery(document).ready(function() {
    Auth.init();
});