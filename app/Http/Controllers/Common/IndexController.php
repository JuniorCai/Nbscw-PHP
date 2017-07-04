<?php

namespace App\Http\Controllers\Common;

use App\Code\IService\ISellCategoryService;
use App\Http\Controllers\WebController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redis;

class IndexController extends WebController
{
    protected $SellCategoryService ;

    //
    public function __construct(ISellCategoryService $ISellCategoryService)
    {
        //$this->middleware('auth');
        $this->SellCategoryService = $ISellCategoryService;
    }

    public function index(Request $request)
    {
//        if($this->CheckStaticPageExist("index.shtml"))
//        {
//            return redirect("index.shtml");
//        }
        //get user logInfo
        $logUser = $this->GetLoginUserInfo();

        //缓存获取首页产品、广告、资讯信息
        $productCategory = $this->SellCategoryService->GetCategoryFromCache();



//        $result  = view("index",["user"=>$logUser])->__toString();
//        file_put_contents("index.shtml",$result);
        return view("index",["user"=>$logUser]);
    }

}
