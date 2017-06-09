<?php
/**
 * Created by PhpStorm.
 * User: 钧球
 * Date: 2017-05-24
 * Time: 15:35
 */
namespace App\Http\Controllers;

use App\Events\LoginLogEvent;
use App\Models\Member\User;
use Carbon\Carbon;

class WebController extends Controller
{


    function GetLoginUserInfo()
    {
        return auth()->user();
    }

    function TriggerLoginLog($loginType,$loginAgent,$isFromAdmin,$ip)
    {
        $userInfo = new User();

        $userInfo->id = $this->GetLoginUserInfo()->id;
        $userInfo->mobile = $this->GetLoginUserInfo()->mobile;
        event(new LoginLogEvent($userInfo,$ip,$loginType,$loginAgent,$isFromAdmin,Carbon::now()));

    }
}
