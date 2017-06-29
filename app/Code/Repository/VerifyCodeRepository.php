<?php
/**
 * Created by PhpStorm.
 * User: 钧球
 * Date: 2017-05-24
 * Time: 10:47
 */

namespace App\Code\Repository;

use App\Models\Member\verifyCodeStatusEnum;
use App\Models\Member\userVerify;

class VerifyCodeRepository
{
    function CreateVerifyCode(UserVerify $verify)
    {
        return UserVerify::create([
            'typeId' => $verify->typeId,
            'verifyCode' => $verify->verifyCode,
            'mobile' => $verify->mobile,
            'email' => $verify->email,
            'status' => $verify->status,
            'ip' => $verify->ip
        ]);
    }

    /**
     * Create a new controller instance.
     *
     * @param $mobile
     * @param $code
     * @param $effectTime 有效时间
     * @internal param ILoginLogService $logService
     */
    function CheckMobileVerifyCode($mobile,$code,$effectTime)
    {
        $info = UserVerify::where([['mobile','=',$mobile],['verifyCode','=',$code]])->where('status',verifyCodeStatusEnum::Pending)->where('created_at','>=',$effectTime)->first();
        return $info;
    }

    /**
     * Create a new controller instance.
     *
     * @param $email
     * @param $code
     * @param $effectTime 有效时间
     * @internal param ILoginLogService $logService
     */
    function CheckEmailVerifyCode($email,$code,$effectTime)
    {
        $info = UserVerify::where([['email','=',$email],['verifyCode','=',$code]])->whereDate('created_at','>=',$effectTime)->first();
        return $info;
    }

    function GetResultsByFilter($whereArray)
    {
        $results = null;
        if($whereArray)
        {
            $results = UserVerify::where($whereArray)->get();
        }
        return $results;
    }

    function SaveVerify(UserVerify $verify)
    {
        return $verify->save();
    }

    function ToggleVerifyStatusByMobile($filterArray,$updateArray)
    {
        try
        {
            UserVerify::where($filterArray)->update($updateArray);
            return true;
        }catch (\Exception $exception)
        {
            return false;
        }
    }

}