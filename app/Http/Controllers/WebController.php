<?php
/**
 * Created by PhpStorm.
 * User: 钧球
 * Date: 2017-05-24
 * Time: 15:35
 */
namespace App\Http\Controllers;

class WebController extends Controller
{
    function GetLoginUserInfo()
    {
        return auth()->user();
    }

    function RecordLoginLog()
    {
        
    }
}
