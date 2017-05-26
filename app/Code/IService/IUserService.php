<?php
/**
 * Created by PhpStorm.
 * User: 钧球
 * Date: 2017-05-24
 * Time: 11:21
 */
namespace App\Code\IService;
use App\Models\Member\User;

interface IUserService
{
    function Login($accountName,$password);

    function GetUserInfoById($id);

    function CreateUser(User $userModel);

    function LoginWithCredentials($credentials,$isRemember);

}