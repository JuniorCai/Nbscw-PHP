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
        //return $userModel->save();
        return User::create([
            'accountName' => $userModel->accountName,
            'nickName' => $userModel->nickName,
            'mobile' => $userModel->mobile,
            'password' => $userModel->password,
            'payPassword' => $userModel->payPassword,
            'userName' => $userModel->userName,
            'gender' => $userModel->gender,
            'userGroup' => $userModel->userGroup,
            'ip' => $userModel->ip,
            'isAuth' => $userModel->isAuth,
            'authMobile' => $userModel->authMobile,
            'authEmail' => $userModel->authEmail,
            'isAdmin' => $userModel->isAdmin,
            'email' => $userModel->email,
            'avatar' => $userModel->avatar,
            'qq' => $userModel->qq,
            'areaId' => $userModel->areaId,
            'remark' => $userModel->remark,
            'remember_token' => $userModel->remember_token,
        ]);
    }


    public function GetUserInfoById($id)
    {
        $user = User::find($id);
        return $user;
    }

    function GetUserByAccountName($account)
    {
        $user = User::where('accountName',$account)->first();
        return $user;
    }

    function GetUserByMobile($mobile)
    {
        $user = User::where('mobile',$mobile)->first();
        return $user;
    }

}