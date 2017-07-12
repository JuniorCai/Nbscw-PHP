<?php

namespace App\Models\Member;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
//    protected $fillable = [
//        'name', 'email', 'password',
//    ];

    protected $guarded=[];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $dates = ["deleted_at"];

}

/**
 * 会员组类别
 * @package App\Models\Member
 */
class UserGroupEnum
{
    const Guest = 0;
    const MemberUser = 1;
    const UnauthCompany = 2;
    const AuthCompany = 3;
    const VIP = 4;
}
