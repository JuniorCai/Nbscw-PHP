<?php
/**
 * Created by PhpStorm.
 * User: 钧球
 * Date: 2017-05-24
 * Time: 11:23
 */
namespace App\Code\Service;


use App\Code\IService\IUserService;
use App\Code\IService\IVerifyCodeService;
use App\Code\Repository\UserRepository;

use App\Code\Repository\VerifyCodeRepository;
use App\Models\Member\User;
use App\Models\Member\userVerify;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class VerifyCodeService implements IVerifyCodeService
{

    protected $Repository;
    function __construct(VerifyCodeRepository $repository)
    {
        $this->Repository = $repository;
    }


    function CreateVerifyCode(UserVerify $verify)
    {
        return $this->Repository->CreateVerifyCode($verify);
    }

    function CheckMobileVerifyCode($mobile, $code, $effectTime)
    {
        $v = $this->Repository->CheckMobileVerifyCode($mobile,$code,$effectTime);
        if($v!=null)
        {
            return $v;
        }
        return null;
    }

    function CheckEmailVerifyCode($email, $code, $effectTime)
    {
        $v = $this->Repository->CheckEmailVerifyCode($email,$code,$effectTime);
        if($v!=null)
        {
            return true;
        }
        return false;
    }

    function GetResultsByFilter($whereArray)
    {
        return $this->Repository->GetResultsByFilter($whereArray);
    }

    function SaveVerify(UserVerify $verify)
    {
        return $this->Repository->SaveVerify($verify);
    }

    function ToggleVerifyStatusByMobile($filterArray,$updateArray)
    {
        return $this->Repository->ToggleVerifyStatusByMobile($filterArray,$updateArray);
    }

}