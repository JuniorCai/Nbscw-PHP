<?php
/**
 * Created by PhpStorm.
 * User: 钧球
 * Date: 2017-05-24
 * Time: 11:23
 */
namespace App\Code\Service;


use App\Code\IService\IUserService;
use App\Code\Repository\UserRepository;

use App\Models\Member\User;
use Illuminate\Support\Facades\Auth;

class UserService implements IUserService
{

    protected $Repository;
    function __construct(UserRepository $repository)
    {
        $this->Repository = $repository;
    }


    function Login($accountEmail, $password)
    {
        // TODO: Implement Login() method.
        if(Auth::guard('admin')->attempt(['email'=>$accountEmail,'password'=>$password])){
            return true;
        }
        else{
            return false;
        }

    }

    function LoginWithCredentials($credentials,$isRemember)
    {
        if(Auth::attempt($credentials, $isRemember))//Auth::guard('admin')->attempt($credentials, $isRemember)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function GetUserInfoById($id)
    {
        // TODO: Implement GetUserInfo() method.
        return $this->Repository->GetUserInfoById($id);
    }

    function CreateUser(User $userModel)
    {
        return $this->Repository->CreateUser($userModel);
    }

}