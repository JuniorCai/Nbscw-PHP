<?php
/**
 * Created by PhpStorm.
 * User: 钧球
 * Date: 2017-06-07
 * Time: 15:49
 */

namespace App\Code\Common;


//登录客户端类型
class LoginAgent
{
    const PC = 0;
    const Mobile = 1;
}

//登录方式
class LoginTypeEnum
{
    const UserName = 0;
    const Mobile = 1;
}

//是否为后台授权登录
class FromAdminOperate
{
    const FromAdmin = 0;
    const FromUser = 1;
}