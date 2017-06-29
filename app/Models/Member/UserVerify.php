<?php

namespace App\Models\Member;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class userVerify extends Model
{
    //
    use SoftDeletes;

    protected $table = "userVerifys";
    protected $fillable = ["typeId","verifyCode","mobile","email","ip","status"];
}
//验证码状态
class verifyCodeStatusEnum
{
    const Pending = 0;
    const Invalid = 1;
}

class verifyType
{
    const Mobile = 0;
    const Email = 1;
}

class smsSwitchState
{
    const ON = "ON";
    const OFF = "OFF";
}
