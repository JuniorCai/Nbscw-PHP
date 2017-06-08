<?php
/**
 * Created by PhpStorm.
 * User: 钧球
 * Date: 2017-05-24
 * Time: 15:35
 */
namespace App\Http\Controllers;

use App\Code\IService\ILoginLogService;
use App\Models\Member\LoginLog;
use Carbon\Carbon;

class WebController extends Controller
{
    protected $LogService;

    public function __construct(ILoginLogService $logService)
    {
        $this->LogService = $logService;
    }

    function GetLoginUserInfo()
    {
        return auth()->user();
    }

    function RecordLoginLog($loginType,$loginAgent,$isFromAdmin,$ip)
    {
        $userInfo = $this->GetLoginUserInfo();
        $logModel = new LoginLog();
        $logModel->userId = $userInfo->id;
        $logModel->typeId = $loginType;
        $logModel->loginIp = $ip;
        $logModel->loginDate = Carbon::now();
        $logModel->loginAgent = $loginAgent;
        $logModel->admin = $isFromAdmin;
        $logModel->accountNo = $userInfo->mobile;


        $this->LogService->CreateLog($logModel);
    }
}
