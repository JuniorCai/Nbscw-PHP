<?php

namespace App\Http\Controllers\Common;

use App\Code\IService\ISellCategoryService;
use App\Code\IService\ISellService;
use App\Http\Controllers\WebController;
use Illuminate\Http\Request;

class IndexController extends WebController
{
    protected $SellCategoryService ;
    protected $SellService ;

    //
    public function __construct(ISellCategoryService $ISellCategoryService,ISellService $ISellService)
    {
        //$this->middleware('auth');
        $this->SellCategoryService = $ISellCategoryService;
        $this->SellService = $ISellService;
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

        //获取供应
        $dalishiList = $this->GetNewProductsList($productCategory,["大理石"]);
        $huagangyanList = $this->GetNewProductsList($productCategory,["花岗岩"]);
        $environmentList = $this->GetNewProductsList($productCategory,["环境石材","室内装饰","庭院产品","石工艺品"]);

//        $result  = view("index",["user"=>$logUser])->__toString();
//        file_put_contents("index.shtml",$result);
        return view("index",["pageName"=>"index","user"=>$logUser,"firstFloorSell"=>$dalishiList,"secondFloorSell"=>$huagangyanList,"thirdFloorSell"=>$environmentList]);
    }

    /**获取分类新品发布
     * @param $categoryList
     * @param $filterNameArray
     * @return mixed
     */
    protected function GetNewProductsList($categoryList,$filterNameArray)
    {
        $v = $categoryList->whereIn("name",$filterNameArray);
        $filterIdArray = [];
        foreach ($v as $c)
        {
            array_push($filterIdArray,$c->id);
        }
        $categoryChildren = $categoryList->whereIn("parentId",$filterIdArray);
        $categoryIdArray = [];
        foreach ($categoryChildren as $item )
        {
            array_push($categoryIdArray,$item->id);
        }
        $productSell = $this->SellService->GetSellsByFilterFromCache([],"updateDate",true);
        $showList = $productSell->whereIn("categoryId",$categoryIdArray)->values()->take(20);
        return $showList;
    }

}
