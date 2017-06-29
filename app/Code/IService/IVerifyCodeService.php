<?php
/**
 * Created by PhpStorm.
 * User: 钧球
 * Date: 2017-05-24
 * Time: 11:21
 */
namespace App\Code\IService;
use App\Models\Member\User;
use App\Models\Member\userVerify;

interface IVerifyCodeService
{

    function CreateVerifyCode(UserVerify $verify);

    function CheckMobileVerifyCode($mobile, $code, $effectTime);

    function CheckEmailVerifyCode($email, $code, $effectTime);

    function GetResultsByFilter($whereArray);

    function SaveVerify(UserVerify $verify);

    function ToggleVerifyStatusByMobile($filterArray,$updateArray);

}