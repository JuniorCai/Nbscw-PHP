<?php
/**
 * Created by PhpStorm.
 * User: 钧球
 * Date: 2017-05-24
 * Time: 11:23
 */
namespace App\Code\Service;


use App\Code\IService\ILoginLogService;
use App\Code\IService\IUserService;
use App\Code\Repository\LoginLogRepository;
use App\Code\Repository\UserRepository;

use App\Models\Member\LoginLog;
use Illuminate\Support\Facades\Auth;

class LoginLogService implements ILoginLogService
{

    protected $Repository;
    function __construct(LoginLogRepository $repository)
    {
        $this->Repository = $repository;
    }

    function CreateLog(LoginLog $logModel)
    {
        return $this->Repository->CreateLog($logModel);
    }




}