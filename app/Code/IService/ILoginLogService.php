<?php
/**
 * Created by PhpStorm.
 * User: 钧球
 * Date: 2017-05-24
 * Time: 11:21
 */
namespace App\Code\IService;
use App\Models\Member\LoginLog;

interface ILoginLogService
{
    function CreateLog(LoginLog $logModel);





}