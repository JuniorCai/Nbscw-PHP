<?php
/**
 * Created by PhpStorm.
 * User: 钧球
 * Date: 2017-05-24
 * Time: 10:47
 */

namespace App\Code\Repository;

use App\Models\Member\User;

class UserRepository
{
    public function CreateUser(User $userModel){
        return $userModel->save();
    }


    public function GetUserInfoById($id)
    {
        $user = User::find($id);
        return $user;
    }

}