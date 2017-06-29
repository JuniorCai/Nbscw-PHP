<?php
/**
 * Created by PhpStorm.
 * User: 钧球
 * Date: 2017-06-07
 * Time: 15:49
 */

namespace App\Code\Common;


//登录客户端类型
/**
 * 登录客户端类型枚举
 * @package App\Code\Common
 */
class LoginAgentEnum
{
    const PC = 0;
    const Mobile = 1;
}

//登录方式

/**
 * 登录方式枚举
 * @package App\Code\Common
 */
class LoginModeEnum
{
    const UserName = 0;
    const Mobile = 1;
}

//是否为后台授权登录

/**
 * 是否为后台授权登录枚举
 * @package App\Code\Common
 */
class FromAdminOperateEnum
{
    const FromAdmin = 1;
    const FromUser = 0;
}