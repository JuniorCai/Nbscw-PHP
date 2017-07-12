<?php

namespace App\Models\Member;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class LoginLog extends Model
{
    use SoftDeletes;

    protected $table = "loginLogs";

    protected $dates = ["deleted_at"];

    //
}
