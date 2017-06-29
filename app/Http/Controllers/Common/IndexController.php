<?php

namespace App\Http\Controllers\Common;

use App\Http\Controllers\WebController;
use Illuminate\Http\Request;

class IndexController extends WebController
{
    //
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index(Request $request)
    {
        //get user logInfo

        //缓存获取首页产品、广告、资讯信息



        return view("index");
    }

}
