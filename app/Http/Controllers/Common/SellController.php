<?php

namespace App\Http\Controllers\Common;

use App\Code\IService\ISellCategoryService;
use App\Code\IService\ISellService;
use App\Http\Controllers\WebController;
use App\Models\Member\PriceTypeEnum;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class SellController extends WebController
{
    protected $SellCategoryService ;
    protected $SellService ;
    protected $PageSize;

    //
    public function __construct(ISellCategoryService $ISellCategoryService,ISellService $ISellService)
    {
        //$this->middleware('auth');
        $this->SellCategoryService = $ISellCategoryService;
        $this->SellService = $ISellService;
        $this->PageSize = config("app.WebPageSize.SellPageSize");
    }

    public function search(Request $request)
    {
        $resultList = null;
        $logUser = $this->GetLoginUserInfo();
        $categoryList = $this->SellCategoryService->GetCategoryFromCache();
        $resultList = $this->SellService->GetSellsByFilterFromCache([],"updateDate",true);

        $selectedFilter = [];
        $v1 = $request->get("catId",0);
        $keyword = $request->get("keyword","");
        $sortFiled = $request->get("sort","updateDate");
        $pageIndex = $request->get("page","1");
        $selectedFilter["Sort"] = $sortFiled;

        $category = $categoryList->where("id",$v1)->first();
        if($category!=null)
        {
            $filterCategoryId = [];
            if($category->parentCategory==null)
            {
                $selectedFilter["bigCategory"] = $category;
                $smallCategories = $categoryList->where("parentId",$category->id);
                foreach ($smallCategories as $small)
                {
                    array_push($filterCategoryId,$small->id);
                }
            }else{
                $selectedFilter["bigCategory"] = $category->parentCategory;
                $selectedFilter["smallCategory"] = $category;

                array_push($filterCategoryId,$category->id);
            }
            $resultList = $resultList->whereIn("categoryId",$filterCategoryId);
        }

        if(trim($keyword)!="")
        {
            $selectedFilter["keyword"] = $keyword;

            $resultList = $resultList->filter(function($item) use ($keyword){
                if(stripos($item->title,$keyword)>0)
                    return true;
            });
        }

        //处理排序逻辑
        if($sortFiled!="updateDate")
        {
            //先排除面议产品，后续结果列表补上
            $facePriceProductsList =  $resultList->where("priceType",PriceTypeEnum::Negotiable);
            $priceProductsList = $resultList->whereIn("priceType",[PriceTypeEnum::Fixed,PriceTypeEnum::Range]);

            if($sortFiled=="asc")
            {
                $priceProductsList = $priceProductsList->sortBy("minPrice");
            }
            else{
                $priceProductsList = $priceProductsList->sortByDesc("maxPrice");
            }
            $resultList = $priceProductsList->union($facePriceProductsList);
        }
        $resultList = $this->GeneratePager($resultList,$pageIndex,$this->PageSize,"/sell");



        return view("common.sell",["pageName"=>"sell","filterContainer"=>$selectedFilter,"user"=>$logUser,"categoryList"=>$categoryList,"result"=>$resultList]);
    }

//    protected function GeneratePager($totalList,$pageIndex,$perPage,$pagePath)
//    {
//        $pageList = $totalList->forPage($pageIndex,$perPage);
//        $lengthAwarePaginator = new LengthAwarePaginator($pageList,$totalList->count(),$perPage,$pageIndex,["pageName"=>"page","path"=>$pagePath]);
//        return $lengthAwarePaginator;
//    }

}
