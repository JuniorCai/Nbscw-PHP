<?php
/**
 * Created by PhpStorm.
 * User: 钧球
 * Date: 2017-05-24
 * Time: 10:47
 */

namespace App\Code\Repository;

use App\Models\Member\LoginLog;

class LoginLogRepository
{
    function CreateLog(LoginLog $logModel)
    {
        return $logModel->save();
    }
}